package com.example.user.printersale;

import android.app.ProgressDialog;
import android.content.Intent;
import android.support.annotation.NonNull;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.MotionEvent;
import android.view.View;
import android.widget.EditText;
import android.widget.Toast;

import com.google.android.gms.tasks.OnCompleteListener;
import com.google.android.gms.tasks.Task;
import com.google.firebase.database.DatabaseReference;
import com.google.firebase.database.FirebaseDatabase;

public class about extends AppCompatActivity {
    float x1,x2,y1,y2;
   EditText name,mail,age;
   ProgressDialog progressDialog;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_about);
        name=(EditText)findViewById(R.id.editText);
        mail=(EditText)findViewById(R.id.editText2);
        age=(EditText)findViewById(R.id.editText3);

    }
    public void save(View view){
        String names=name.getText().toString();
        String emails=mail.getText().toString();
        String ages=age.getText().toString();
        progressDialog=new ProgressDialog(this);
        progressDialog.setMessage("Saving Details");
        if (names.isEmpty()||emails.isEmpty()||ages.isEmpty()) {
            Toast.makeText(this, "Fill in all slots", Toast.LENGTH_SHORT).show();
            return;
        }
        long time=System.currentTimeMillis();
        DatabaseReference ref= FirebaseDatabase.getInstance().getReference().child("Names/"+time);
        User one=new User(names,emails,ages);
        progressDialog.show();
        ref.setValue(one).addOnCompleteListener(new OnCompleteListener<Void>() {
            @Override
            public void onComplete(@NonNull Task<Void> task) {
                progressDialog.dismiss();

                if (task.isSuccessful()){
                    Toast.makeText(about.this, "Saved Successfully",
                            Toast.LENGTH_SHORT).show();
                }
                else {
                    Toast.makeText(about.this, "Failed to save",
                            Toast.LENGTH_SHORT).show();
                }
            }
        })
;
    }
    public boolean onTouchEvent(MotionEvent touchevent){
        switch (touchevent.getAction()){
            case MotionEvent.ACTION_DOWN:
                x1=touchevent.getX();
                y1=touchevent.getY();
                break;
            case MotionEvent.ACTION_UP:
                x2=touchevent.getX();
                y2=touchevent.getY();
                if (x1<x2){
                    Intent j=new Intent
                            (about.this,printer.class);
                    startActivity(j);
                }
                break;
        }
        return false;
    }
}
