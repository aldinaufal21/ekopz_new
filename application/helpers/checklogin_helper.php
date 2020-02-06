<?php

function checklogin(){
  $checkses = $_SESSION['id_koperasi'];
  if (!$checkses) {
    redirect('login/koperasi');
  }
}

function userlogin()
{
  $checkses = $_SESSION['id_anggota'];
  if (!$checkses) {
    redirect('login');
  }
}
?>
