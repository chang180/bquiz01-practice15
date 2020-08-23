<form action="api/add.php" method="post" enctype="multipart/form-data">
<h1 class="ct">新增最新消息</h1>
<hr>
最新消息：<textarea name="text" cols="60" rows="10"></textarea><br>
<input type="hidden" name="table" value="<?=$_GET['do'];?>">
<button>新增</button><button type="reset">重置</button>
</form>