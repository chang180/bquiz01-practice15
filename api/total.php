<?php
include_once "../base.php";
$total['total']=$_POST['total'];
$Total->save($total);
to("../admin.php?do=total");