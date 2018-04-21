package com.example.user.printersale;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.webkit.WebSettings;
import android.webkit.WebView;

public class printer extends AppCompatActivity {
    WebView webView;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_printer);
        webView=(WebView)findViewById(R.id.web_view);
        WebSettings settings=webView.getSettings();
        settings.setJavaScriptEnabled(true);
        webView.loadUrl("file:///android_asset/index.html");
    }
}
