
                <div class="di" style="height:540px; border:#999 1px solid; width:53.2%; margin:2px 0px 0px 0px; float:left; position:relative; left:20px;">
				<?php include "marquee.php";
				if (empty($_SESSION['token'])) {
					$_SESSION['token'] = bin2hex(random_bytes(32));
				}
				$token = $_SESSION['token'];
				?>
                    <div style="height:32px; display:block;"></div>
                                        <!--正中央-->
                                            		<form method="get" action="api/login.php">
													<input type="hidden" name="token" value="<?=$token;?>">
                        	    	<i class="t botli">管理員登入區</input>
                        			<p class="cent">帳號 ： <input name="acc" autofocus="" type="text"></p>
                        	        <p class="cent">密碼 ： <input name="pw" type="password"></p>
                        	        <p class="cent"><input value="送出" type="submit"><input type="reset" value="清除"></p>
                        	    </form>
                        	                </div>
                