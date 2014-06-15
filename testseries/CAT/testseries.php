<?php //session_start(); ?>
<!DOCTYPE html>
<html>
<head lang="en">
<title>Erulier | CAT Test Series</title>
<meta charset="utf-8">
<script type="text/javascript"
    src="https://c328740.ssl.cf1.rackcdn.com/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML">
</script>
<style>
#header
{
	width:100%;
	height:13%;
	position:fixed;
	background-color:#008080;
	color:#fff;
	text-align:center;
	float:left;
	margin-top:-10px;
	margin-left: -10px;
}
#container-left
{
	width:55%;
	margin-left: 10%;
	float:left;
	margin-top:70px;
	text-align:left;
	clear:top;
	min-height:400px;
}
#container-right
{
	width:35%;
	float:left;
	position:fixed;
	margin-top:70px;
	min-height:600px;
	margin-left: 64%;
}
#footer
{
	width:100%;
	background-color:#008080;
	text-align:center;
	height:15%;
	position:fixed;
	margin-top:45%;
	margin-left: -10px;
}
</style>

</head>

<body>

<div id='header'>
<center>
<div style='font-size:26px;width:60px;text-align:center;margin-top:20px;margin-right:40px;'>Erulier</div>
<?
$min = 1;
$max = 3;
$number_of_questions = 2;
$ptr = 0;
$arr = array();
while (count($arr) < $number_of_questions)
{
    $x = mt_rand($min,$max);
    if (!in_array($x,$arr))
    	{
    		$arr[$ptr] = $x;
    		$ptr += 1;
    	}
}
?>
<span style='font-size:18px;padding:30px;'>Question <? $ptr ?> of 30</span>
<span style='margin-left:180px;font-size:20px;padding:30px;'>Timer</span>
</div>
</center>

<div id='container-left'>

<!--
<script>
$(document).ready(function() {
	$("#container").load("2.php");
	var refreshId = setInterval(function() {
		$("container").load('3.php');
	}, 100);
$.ajaxSetup({cache: false });
});
</script>-->

<?
$ptr = 0;
while($ptr < $number_of_questions)
{
	require("quant/$arr[$ptr].php");
	$ptr += 1;
}

//$answer = get_post($_POST['$next_question']);
/*$username = $_SESSION['username'];
$query = "INSERT INTO testseries VALUES (user_name = '$username',
tests = 'test1', ques = 'q1', answered = '$answer', cor_ans = '')";*/

function get_post($var)
{
    $var = sanitizeString($var);
    return $var;
}

function sanitizeString($var)
{
        if (get_magic_quotes_gpc())
        $var = stripslashes($var);
        $var = htmlentities($var);
        $var = strip_tags($var);
        return $var;
}
?>
</div>

<div id='container-right'>

<h1>blah-blah<h1>
<h1>blah-blah-blah<h1>
</div>

<div id='footer'>
<div class='buttons' style='margin-top:15px;'>
<form name='buttons'>
<input name="previous" action='testseries.php' type="submit" style="width:100px;height:30px;font-size:16px;margin-left:40px;margin-right:40px;" value="Previous"/>
<input name="mark" type="submit" style="width:100px;height:30px;font-size:16px;margin-left:40px;margin-right:40px;" value="Mark"/>
<input name="review" type="submit" style="width:100px;height:30px;font-size:16px;margin-left:40px;margin-right:40px;" value="Review"/>
<input name="next" action='testseries.php' type="submit" style="width:100px;height:30px;font-size:16px;margin-left:40px;margin-right:40px;" value="Next"/>
</form>
</div>
</div>

</body>
</html>