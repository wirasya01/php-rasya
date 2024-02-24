<?php
$email = @$_REQUEST['email'];
$password = @$_REQUEST['password'];

if ($email !== 'wiras@gmail.com') {
    die("Email tidak terdaftar!");
  }
  
  if ($password !== 'wirasya_01') {
    die("Password salah!");
  }
  
  echo "Selamat {$email}, anda berhasil login! :-3";