package com.example.myapplication;

import androidx.appcompat.app.AppCompatActivity;

import android.database.Cursor;
import android.database.sqlite.SQLiteDatabase;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.SimpleCursorAdapter;
import android.widget.TextView;

public class MainActivity extends AppCompatActivity {
    private EditText edt;
    private TextView txt;
    private Button btn;
    private SQLiteDatabase db=null;
    private SimpleCursorAdapter adapter;
    Cursor cursor;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        db=SQLiteDatabase.openOrCreateDatabase("db1.db", MODE_PRIVATE, null);
        db.execSQL("DROP TABLE IF EXISTS table01");
        String createTable="CREATE TABLE table01(_id INTEGER PRIMARY KEY AUTOINCREMENT, num TEXT,data TEXT)";
        db.execSQL(createTable);
        edt=findViewById(R.id.editTextTextPersonName2);
        txt=findViewById(R.id.textView6);
        btn=findViewById(R.id.button);
        btn.setOnClickListener(btnListener);
    }
    private View.OnClickListener btnListener=new View.OnClickListener() {
        @Override
        public void onClick(View view) {
            //cursor=db.rawQuery("SELECT * FROM table01");
            db.execSQL(edt.getText().toString());
            try{
                Cursor cursor=db.rawQuery("SELECT * FROM table01", null);
                if(cursor.getCount()>0){
                    cursor.moveToFirst();
                    String str="";
                    do{
                        String id=cursor.getString(cursor.getColumnIndex("_id"));
                        String height=cursor.getString(cursor.getColumnIndex("height"));
                    }
                    while(cursor.moveToNext());
                }
                txt.setText("");
            }
            catch (Exception ignored){

            }
        };
    };
}