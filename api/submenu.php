<?php
include_once "../base.php";
$parent = $_POST['parent'];
foreach ($_POST['id'] as $key => $id) {
    if (!empty($_POST['del']) && in_array($id, $_POST['del'])) {
        $Menu->del($id);
    } else {
        $row = $Menu->find($id);
        $row['name'] = $_POST['name'][$key];
        $row['text'] = $_POST['text'][$key];
        $Menu->save($row);
    }
}
if (!empty($_POST['name2'])) {
    foreach ($_POST['name2'] as $key => $name) {
        $new['parent'] = $parent;
        $new['name'] = $name;
        $new['text'] = $_POST['text2'][$key];
        $Menu->save($new);
    }
}

to("../admin.php?do=menu");
