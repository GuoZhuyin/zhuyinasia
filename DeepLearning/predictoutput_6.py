import torch
import torchvision
from torch import nn
from torch.utils.data import Dataset, DataLoader
from torchvision import datasets, transforms
from torchvision.transforms import ToTensor
import torchvision.models as models
import PIL
from PIL import Image 
import os
import glob
import pandas as pd
import numpy as np
import time
import csv
import sys, getopt

class MyImageDataset(Dataset):
  def __init__(self, img_folder,transform):
    self.transform=transform
    self.img_folder=img_folder
    subpath=os.path.join(img_folder, "*")
    files = glob.glob(subpath)
    self.image_names=files
    self.labels=np.zeros(len(files))
  
#The __len__ function returns the number of samples in our dataset.
  def __len__(self):
    return len(self.image_names)

  def __getitem__(self,index):
    image = Image.open(self.image_names[index])
    label = 0

    if self.transform !=None:
        image=self.transform(image)
    
    sample = {'image': image,'label':label}

    return image

def run(modelfile, imgdir,  batches, outputfile):
    start = time.time()

    class_to_index={'banana': 0, 'bareland': 1, 'building': 2, 'carrot': 3, 'corn': 4,
    'dragonfruit': 5, 'garlic': 6, 'guava': 7, 'mountain': 8, 'peanut': 9, 'pineapple': 10,
    'pumpkin': 11, 'rice': 12, 'sky': 13, 'soybean': 14, 'sugarcane': 15, 'tomato': 16}
    index_to_class = {v: k for k, v in class_to_index.items()}
    classes=['banana', 'bareland', 'carrot', 'corn', 'dragonfruit', 'garlic', 'guava', 'peanut', 'pineapple', 'pumpkin', 'rice', 'soybean', 'sugarcane', 'tomato', 'building', 'mountain', 'sky']

    folders=['banana', 'bareland', 'carrot', 'corn', 'dragonfruit', 'garlic', 'guava', 'peanut', 'pineapple', 'pumpkin', 'rice', 'soybean', 'sugarcane', 'tomato']
    num_folders = len(folders)

    # test_transform = transforms.Compose([
    #     transforms.Resize(224),
    #     transforms.ToTensor(), # ToTensor : [0, 255] -> [0, 1]
    #     transforms.Normalize(mean=[0.485, 0.456, 0.406],
    #     std=[0.229, 0.224, 0.225])
    # ])
    test_transform = transforms.Compose([
    transforms.Resize((299, 299)),
    transforms.ToTensor(), # ToTensor : [0, 255] -> [0, 1]
    transforms.Normalize(mean=[0.485, 0.456, 0.406],
                         std=[0.229, 0.224, 0.225])
    ])
    num_classes = 17
    # model=models.efficientnet_b0(pretrained=False, num_classes=num_classes)
    model = torch.hub.load('pytorch/vision:v0.10.0', 'inception_v3', pretrained=False)
    model.aux_logits = False
    model.fc =  nn.Linear(model.fc.in_features, num_classes)
    model = nn.DataParallel(model) #cuda設定
    model.load_state_dict(torch.load(modelfile))
    model.cuda()
    model.eval()
    

    test_data = MyImageDataset(imgdir, test_transform)
    batch_size = batches
    test_loader = DataLoader(test_data,batch_size=batch_size,shuffle=False)

    print(f"Total images={len(test_data)}")

    f = open(outputfile, "w", newline='')
    writer = csv.writer(f)
    # again no gradients needed
    with torch.no_grad():
        total_batch = len(test_data)//batch_size
        for i, batch_images in enumerate(test_loader):
            images = batch_images.cuda()
            outputs = model(images)
            probs_all = torch.nn.functional.softmax(outputs, dim=1)
            for probs in probs_all:
                str_outputs = [(lambda x: f'{x:0.4f}')(num) for num  in probs]
                writer.writerow(str_outputs)

            if (i+1) % 50 == 0:
                print(f'lter [{i+1}/{total_batch}]')

    f.close()
    end = time.time()
    print(end - start)

def main(argv):
    modelfile = None
    imgdir = 'train_images'
    batches = 256
    outputfile = 'xxx.csv'
    try:
        opts, args = getopt.getopt(argv[:],"h:m:o:d:b:",["model=","ofile=", "imgdir="])
    except getopt.GetoptError:
        print('test_en1.py -m <model> -o <outputfile>')
        sys.exit(2)
    for opt, arg in opts:
        if opt == '-h':
            print('test_en1.py -m <model> -o <outputfile>')
            sys.exit()
        elif opt in ("-m", "--model"):
            modelfile = arg
            print(arg)
        elif opt in ("-o", "--ofile"):
            outputfile = arg
            print(arg)
        elif opt in ("-d", "--imgdir"):
            imgdir = arg
            print(arg)
        elif opt in ("-b", "--batches"):
            batches = int(arg)
    run(modelfile, imgdir, batches, outputfile)

if __name__ == "__main__":
   main(sys.argv[1:])