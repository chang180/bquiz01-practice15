<?php
include_once "../base.php";

if(!empty($_FILES['name']['tmp_name'])){
    move_uploaded_file($_FILES['name']['tmp_name'],"../img/".$_FILES['name']['name']);
    $_POST['name']=$_FILES['name']['name'];
}
$table=$_POST['table'];
unset($_POST['table']);
$db=new DB($table);
switch($table){
    case "title":
        $_POST['sh']=0;
    break;
    case "admin":
        unset($_POST['pw2']);
    break;
    default:
    $_POST['sh']=1;
break;
}
$db->save($_POST);
to("../admin.php?do=$table");