package com.mikadev.bunnywiki_app.account

import android.annotation.SuppressLint
import android.content.Intent
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.view.MotionEvent
import android.view.View
import android.widget.Button
import android.widget.TextView
import com.mikadev.bunnywiki_app.R

class LoginActivity : AppCompatActivity(), View.OnTouchListener {

    private lateinit var loginButton: Button
    private lateinit var registreerLink: TextView

    @SuppressLint("ClickableViewAccessibility")
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.login_activity)

        loginButton = findViewById(R.id.button_login)
        registreerLink = findViewById(R.id.text_noAccount)

        loginButton.setOnClickListener {
            val intent = Intent(this@LoginActivity, RegistreerActivity::class.java)
            startActivity(intent)
        }

        registreerLink.setOnTouchListener(this)
    }

    override fun onTouch(v: View?, event: MotionEvent?): Boolean {
        v?.performClick()
        when (v?.id) {
            R.id.text_noAccount -> {val intent = Intent(this@LoginActivity, RegistreerActivity::class.java)
            startActivity(intent) }
        }
        return true
    }
}

