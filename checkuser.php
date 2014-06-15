<?php // checkuser.php
//      for ajax request

include_once 'login.php';
if (isset($_POST['username']))
{
$user = sanitizeString($_POST['username']);

if (mysql_num_rows(queryMysql("SELECT * FROM members WHERE user='$user'")))
    echo "<span class='taken'>&nbsp;&#x2718; "."Username exists</span>";
else
    echo "<span class='available'>&nbsp;&#x2714; "."Available</span>";
}
?>