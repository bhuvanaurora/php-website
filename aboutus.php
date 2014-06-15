<?php session_start();
include ("login.php"); ?>
<!DOCTYPE html>
<html>
	<head lang="en">
		<title>Erulier - About us</title>
		<meta charset="utf-8">
        <link href="/css/style.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Lato:400,300italic|Armata|Carrois+Gothic|Roboto:400,300,200,100' rel='stylesheet' type='text/css'>
<style>
* {
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
}
#comp{
	width:85%;
	text-align: justify;
	margin-top: -10px;
	font-family: Roboto;
	font-weight: 300;
}
#team{
	width:85%;
	text-align: justify;
	font-family: Roboto;
	font-weight: 300;
    margin-top: 6pc;
}
#footerback{
	margin-top: 0px;
}
#bhuvan
{
    width:42%;
    float:left;
    margin-bottom:80px;
    text-align: center;
}
#nitesh
{
    width:42%;
    float:right;
    margin-bottom:80px;
    text-align: center;
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
                <a href="../homepage.php" style='font-family:Armata;font-weight:100;color:#FFF;font-size:26px;'>
                Erulier</a>
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

<div id='comp'>
<h3 style="text-align:center;">Company Overview</h3>
<p><b>Erulier</b> is a tech startup that aims to change the education industry for better. 
We at Erulier strive to challenge the status quo by changing the existing educational system and 
making study fun and interactive. 
The study material will be in the form of infographics, 
animated and interactive videos along with adaptive content to let each student learn at his/her own pace 
which will result in longer study time, firm grasp on key skill sets and deep learning. 
Additionally we also aim to offer peer group study options along with online tutoring facilities on our platform, 
thus allowing the users to learn through collaborative reinforcement of skills.</p>
</div>

<div id='team'>
<h3 style="text-align:center;">Guys in the eye of the storm!</h3>

<div id="bhuvan">
<img src="/Pics/Bhuvan.jpg" alt='Bhuvan' style='border-radius:50%;max-width:80px;max-height:80px' />
<br /><b>The Troublemaker</b><br />
<p>Bhuvan, co-founder Erulier, is a 2012 NSIT graduate. After working in the corporate world for a couple of years, 
he decided to take a leap for his dreams. 
He is a passionate entrepreneur with inquisitiveness at the bottom of his heart.</p>
</div>

<div id="nitesh">
<img src="/Pics/Nitesh.jpeg" alt='Nitesh' style='border-radius:50%;max-width:80px;max-height:80px' />
<br /><b>The Peacemaker</b><br />
<p>"<em>It is never too late for a fresh start </em>"...Nitesh, co-founder Erulier & a 2012 IIT Kanpur graduate is
finally pursuing his childhood dream of making the world a better place as an edupreneur. 
A sports fanatic along with a love for economics, he likes animated movies and listening to soft music.<br /></p>
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