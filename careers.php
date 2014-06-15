<?php session_start();
include ("login.php"); ?>
<!DOCTYPE html>
<html>

	<head lang="en">
		<title>Erulier - Careers</title>
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
	text-align: center;
  width:85%;
}
#footerback{
	margin-top: 240px;
}
#header{
  margin-top: 10px; 
}
.header{
  margin-bottom: 200px;
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
			<br />
      <p style="font-size:14px;font-family:Armata;font-weight:100;">
      We are looking for passionate people who are willing to take responsibility and 
      work independently to get Erulier in every home.<br />
      At Erulier, life is work and work is life. If you are a web developer or graphic designer and 
      share a similar passion for work, we would love to meet you.
      Drop us a line at careers@erulier.com</p>
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