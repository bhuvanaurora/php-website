<?php session_start();
include ("login.php"); ?>
<!DOCTYPE html>
<html>

	<head lang="en">
		<title>Erulier - Contact us</title>
		<meta charset="utf-8">
        <link href="/css/style.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Lato:400,300italic|Armata|Carrois+Gothic|Roboto:400,300,200,100' rel='stylesheet' type='text/css'>
<style>
* {
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
}
#cont{
	margin-top: 20px;
	vertical-align: center;
	text-align: center;
}
#footerback{
	margin-top: 80px;
}
.btn{
color: #fff;
  background-color: #428bca;
  border-color: #357ebd;
   padding: 10px 16px;
  font-size: 18px;
  line-height: 1.33;
  border-radius: 6px;
}
.bttn{
text-align: center;
margin-top: 140px;	
}
.btn:hover, .btn:focus, .btn:active{
	color: #fff;
  background-color: #3276b1;
 border-color: #285e8e;
}
.header{
  margin-bottom: 180px;
}

</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<center>
<div id="bg">
<div id="bg1">
		<div id="header">
            <div onclick="location.href='../homepage.php';" id="logo" class="header" style="margin-left:100px;
            cursor:pointer;border-top-left-radius:5px;border-bottom-left-radius:5px;">
                <a href="../homepage.php" style='font-family:Armata;font-weight:100;color:#FFF;font-size:26px;'>Erulier</a>
            </div>                    

            <div class="header">
               <!-- <p style="margin:0px;padding:0px;margin-top:11px;">
                <a href="#" style="font-size:18px;font-family:Roboto;color:#DDD">CAT</a></p>-->
            </div>

            <div class="header">
                <!--<p style="margin:0px;padding:0px;margin-top:11px;">
                <a href="#" style="font-size:18px;font-family:Roboto;color:#DDD">GMAT</a></p>-->
            </div>
            
            <div id="username" class="header">
            <p style="margin:0px;padding:0px;margin-top:10px;">
                <!--<?php/*
                if (!isset($_SESSION['username']))
                {
                $loggedin = FALSE;
                echo "Guest";
                }
                else
                {
                $loggedin = TRUE;
                echo $_SESSION['username'];
                }
                */?>-->
            </p>
            </div>

            <div id="search" class="header" style="border-top-right-radius:5px;border-bottom-right-radius:5px;">
                <form class="search">
                <input type="text" class="search-control" placeholder="Search..."  
                style="margin-top:11px;font-size:13px;border-radius:15px;text-align:center;width:160px;">
                </form>
            </div>
        </div>
		
		<div id='cont'>
			<span style='font-size:30px;font-family:Armata;font-weight: 100;'><b>Erulier</b></span><br />
			<br />
			For queries and suggestions, drop us a line at contact@erulier.com
		</div>

		<div class ='bttn'>
		<a href="careers.php"><button class="btn" data-toggle="modal" data-target="/js/modal.js">
			We're Hiring!
		</button></a>
		</div>

</div>
        <div id="footerback">
    <hr class="line"></hr>
        <div id="footer1" style="text-align:center;">
    <!--ul class="footer1ul"-->
      <!--li class="footer1li"--><a href="../homepage.php" style="letter-spacing:1px;">HOME</a><!--/li--> |
      <!--li class="footer1li"--><a href="../aboutus.php" style="letter-spacing:1px;">ABOUT US</a><!--/li--> |
      <!--<li class="footer1li"><a href="../termsofuse.php" style="letter-spacing:1px;">TERMS OF USE</a></li>
      <li class="footer1li"><a href="../privacypolicy.php" style="letter-spacing:1px;">PRIVACY POLICY</a></li>-->
      <!--li class="footer1li"--><a href="../contactus.php" style="letter-spacing:1px;">CONTACT US</a><!--/li-->
    <!--/ul-->
    </div>
    
  <div id="footer2">
    <?php echo "&copy" ?> Erulier 
  </div>
    </div>
    </div>
    </div>

        </center>
  </body>

  <link href='http://fonts.googleapis.com/css?family=Lato:400,300italic|Armata|Carrois+Gothic|Roboto:400,300,200,100' rel='stylesheet' type='text/css'>
</html>