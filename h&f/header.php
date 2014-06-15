<?php

//      Floating div(s) to be created for questions
//      Screen to be locked for further scroll down until question answered
//      Next page to be accessed on answering the last question on the page
//      Scroll bar showing the total length of the page to be introduced

session_start();
ob_start();
include ("../login.php");
?>

<!DOCTYPE html>
<html>

	<head lang="en">
		<title>Erulier.</title>
		<meta charset="utf-8">
        <link href="../css/content-style.css" rel="stylesheet">
        
	<style>
        
        </style>
        <script>
        String.prototype.trim = function() {return this.replace(/^\s+|\s+$/g, '')}
        </script>
        
        <script src='../osc.js'></script>
        
        </head>
	
	<body>
	<center>
    <div id="bg">
    <div id="bg1">

    <center>
		<div id="header">
			<div onclick="location.href='../homepage.php';" id="logo" class="header" style="margin-left:60px;
            border-top-left-radius:5px;border-bottom-left-radius:5px;cursor:pointer;">
				<a href="../homepage.php" style='font-family:Armata;font-weight:100;color:#FFF;font-size:26px;'>
                Erulier</a>
            </div>                   

            <div class="header" onclick="location.href='CAT_page.php';" style="cursor:pointer;">
                <p style="margin:0px;padding:0px;margin-top:11px;">
                <a href="CAT_page.php" style="font-size:18px;font-family:Roboto;color:#DDD">CAT</a></p>
            </div>

            <div class="header" onclick="location.href='#';" style="cursor:pointer;">
                <p style="margin:0px;padding:0px;margin-top:11px;">
                <a href="#" style="font-size:18px;font-family:Roboto;color:#DDD">GMAT</a></p>
            </div>
            
            <div id="username" class="header1">
            <p style="margin:0px;padding:0px;margin-top:10px;">
                <?php
                if (!isset($_SESSION['username']))
                {
                $loggedin = FALSE;
                echo "Guest";
                /*header("Location: ../index.php");
                exit;*/
                }
                elseif($_SESSION['username'] == 'bhuvanaurora')
                                    {
                                        echo <<<_END
                                         <a href="admin.php">admin</a>
_END;
                }
                else
                {
                $loggedin = TRUE;
                echo $_SESSION['username'];
                }
                ?>
            </p>
            </div>
        </center>

            <div id="search" class="header1" style="border-top-right-radius:5px;border-bottom-right-radius:5px;">
                <form class="search">
                <input type="text" class="search-control" placeholder="Search..."  
                style="margin-top:11px;font-size:13px;border-radius:15px;text-align:center;width:160px;">
                </form>
            </div>

			
		</div>
                