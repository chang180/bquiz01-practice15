<form action="api/submenu.php" method="post">
    
    <h1 class="ct">編輯次選單</h1>
    <hr>
    <table id="more">
        <tr>
            <td>次選單名稱</td>
            <td>次選單連結網址</td>
            <td>刪除</td>
        </tr>
    <?php
    include_once "../base.php";
    $parent=$_GET['id'];
    $rows=$Menu->all(['parent'=>$parent]);
    foreach($rows as $row){
    ?>
        <tr>
            <td><input type="text" name="name[]" value="<?=$row['name'];?>"></td>
            <td><input type="text" name="text[]" value="<?=$row['text'];?>"></td>
            <td><input type="checkbox" name="del[]" value="<?=$row['id'];?>"></td>
            <td><input type="hidden" name="id[]" value="<?=$row['id'];?>"></td>
        </tr>
        <?php } ?>
    </table>
    <input type="hidden" name="parent" value="<?=$parent;?>">
    <button>修改確定</button>
    <button type="reset">重置</button>
    <button type="button" onclick="moreOpt()">更多次選單</button>
</form>
<script>
    function moreOpt(){
        let el=`<tr>
            <td><input type="text" name="name2[]"></td>
            <td><input type="text" name="text2[]"></td>
            <td></td>
        </tr>`;
        $("#more").append(el);
    }
</script>