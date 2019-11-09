<?php
//method pengecekan username field
function username($username){
  if (preg_match('/^[a-z.]{5,8}$/', $username)){
    echo "username valid ";
  } else{
    echo "Username minimal 5 karakter dan hanya boleh Huruf Kecil!";
  }
}
//method pengecekan password field
function password($password){
  if (preg_match('/^[0-9\_\-]+@[A-Z\_\-]{4,100}$/', $password)){
    echo "password valid";
  } else{
    echo "password merupakan kombinasi dari 2 digit angka lalu diikuti simbol “@” atau simbol “&” dan diikuti 4 huruf besar! ";
  }
}
?>