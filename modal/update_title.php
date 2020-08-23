<form action="api/add.php" method="post" enctype="multipart/form-data">
<h1 class="ct">更新圖片</h1>
<hr>
圖片：<input type="file" name="name"><br>
<input type="hidden" name="table" value="<?=$_GET['do'];?>">
<input type="hidden" name="id" value="<?=$_GET['id'];?>">
<button>更新</button><button type="reset">重置</button>
</form>