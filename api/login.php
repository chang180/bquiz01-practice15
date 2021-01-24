<?php
include_once "../base.php";
$chk=$Admin->count(['acc'=>$_POST['acc'],'pw'=>$_POST['pw']]);
if (!empty($_POST['token'])) {
    if (hash_equals($_SESSION['token'], $_POST['token'])) {
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
