<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>admin</title>
</head>
<body>
	<div id="bg1">
        
                <div id="logo">
					<a href="homepage.php">Erulier</a>
                                <!--<div id="sublogo">
                                    <?php
                                    /*if (!isset($_SESSION['username']))
                                    {
                                        $loggedin = FALSE;
                                        echo "Guest";
                                        /*header("Location: ../index.php");
                                        exit;*/
                                    //}
                                    /*elseif ($_SESSION['username'] == )
                                    else
                                    {
                                        $loggedin = TRUE;
                                        echo $_SESSION['username'];
                                    }*/
                                    ?>
                                </div>-->
				</div>
				
				<table>

				<tr><form role="form" action="admin.php" method="post">
				<textarea name="question" type="text" placeholder="Question" cols="50" rows="5"/></textarea><br />
				<input name="A" type="text" placeholder="A" />
				<input name="B" type="text" placeholder="B" />
				<input name="C" type="text" placeholder="C" />
				<input name="D" type="text" placeholder="D" /><br />
				<input name="diff" type="number" min="1" max="2400" width='64' placeholder="Difficulty level (1-2400)" /><br />
				<input name="topic" type="text" placeholder="Topic" />
				<input name="subTopic" type="text" placeholder="Subtopic" />
				</form>
				</tr>
				</table>
	</div>

</body>
</html>