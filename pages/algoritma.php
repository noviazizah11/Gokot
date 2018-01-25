<?php
Pseudocode:
	
	Algoritma Login (Melakukan proses login untuk aplikasi Ngangkot)
	================================================================

	Deklarasi (kamus)
	=================
	User_name, password : string

    Deskripsi
    =========
    Start
	    input(User_name)
	    input(password)

	    If (User_name == 'novi' AND password == 'rahasia') > 0 Then
	     	Output: Masuk Ke Tampilan Khusus Customer
	   	Else
	     	Print "Username atau Password yang anda masukkan salah."
	   	End if
   	End

Query:

	SELECT COUNT(*) FROM custumer WHERE User_name = 'novi' AND password = 'rahasia'
+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

Pseudocode:
	
	Algoritma Register (Melakukan proses registrasi untuk aplikasi Ngangkot)
	========================================================================

	Deklarasi (kamus)
	=================
	User_name, password : string

    Deskripsi
    =========
    Start
	    input(User_name)
	    input(password)

	    If (User_name == 'novi' AND password == 'rahasia') > 0 Then
	     	Output: Masuk Ke Tampilan Khusus Customer
	   	Else
	     	Print "Username atau Password yang anda masukkan salah."
	   	End if
   	End

Query:

	SELECT COUNT(*) FROM custumer WHERE User_name = 'novi' AND password = 'rahasia'