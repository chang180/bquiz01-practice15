<?php
include_once "../base.php";
$bottom['bottom']=$_POST['bottom'];
$Bottom->save($bottom);
to("../admin.php?do=bottom");