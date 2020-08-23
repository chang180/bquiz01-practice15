<div class="di" style="height:540px; border:#999 1px solid; width:53.2%; margin:2px 0px 0px 0px; float:left; position:relative; left:20px;">
	<?php include "marquee.php"; ?>
	<div style="height:32px; display:block;"></div>
	<h1>更多最新消息顯示區</h1>
	<hr>
	<!--正中央-->
	<?php
$table=$do;
$db=new DB($table);

$total=$db->count(['sh'=>1]);
$div=5;
$pages=ceil($total/$div);
$now=$_GET['p']??"1";
$start=($now-1)*$div;
$prev=(($now-1)>0)?($now-1):1;
$next=(($now+1)<=$pages)?($now+1):$pages;

$rows=$db->all(['sh'=>1]," LIMIT $start,$div");
foreach($rows as $key=> $row){
?>
<div class="sswww"><?=($start+1);?>.<?=mb_substr($row['text'],0,20,"utf8");?>
<div class="all" style="display:none"><?=$row['text'];?></div>
</div>

				<?php 
			$start++;
			} ?>
            </tbody>
        </table>
<div class="ct">
<?php
    echo "<a href='?do=$table&p=$prev'> < </a>";
for($i=1;$i<=$pages;$i++){
    $font=($now==$i)?"32px":"20px";
    echo "<a href='?do=$table&p=$i' style='font-size:$font'>$i</a>";
}
echo "<a href='?do=$table&p=$next'> > </a>";
?>

</div>
</div>
<div id="alt" style="position: absolute; width: 350px; min-height: 100px; word-break:break-all; text-align:justify;  background-color: rgb(255, 255, 204); top: 50px; left: 400px; z-index: 99; display: none; padding: 5px; border: 3px double rgb(255, 153, 0); background-position: initial initial; background-repeat: initial initial;"></div>
<script>
	$(".sswww").hover(
		function() {
			$("#alt").html("<pre>" + $(this).children(".all").html() + "</pre>").css({
				"top": $(this).offset().top - 50
			})
			$("#alt").show()
		}
	)
	$(".sswww").mouseout(
		function() {
			$("#alt").hide()
		}
	)
</script>