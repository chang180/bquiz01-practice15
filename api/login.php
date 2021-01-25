<?php
include_once "../base.php";
$chk=$Admin->count(['acc'=>$_GET['acc'],'pw'=>$_GET['pw']]);
if (!empty($_GET['token'])) {
    if (hash_equals($_SESSION['token'], $_GET['token'])) {
         // Proceed to process the form data
         if($chk>0){
            to("../admin.php");
        }else{
            echo "<script>
            alert('帳號或密碼輸入錯誤');
            location.href='../index.php?do=login';
            </script>";
        }
    } else {
         // Log this as a warning and keep an eye on these attempts
         echo "<script>alert('Anti-CSRF proicessing....');
         location.href='../index.php?do=login';</script>";
    }
}
