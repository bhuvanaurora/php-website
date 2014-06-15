<?php // login.php
include_once ('configure.php');

$db_hostname = DB_SERVER;
$db_database = DB_DATABASE;
$db_username = DB_SERVER_USERNAME;
$db_password = DB_SERVER_PASSWORD;

$sql = new mysqli($db_hostname, $db_username, $db_password, $db_database);

$db_server = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);
if (!$db_server) die("Unable to connect to MySQL: " . mysql_error());

mysqli_select_db($sql, $db_database)
or die("Unable to select database: " . mysql_error());                          //mysqli_select_db($sql, $database)


function createTable($name, $query)
{
        queryMysql("CREATE TABLE IF NOT EXISTS $name($query)");
}

function queryMysql($sql, $query)
{
     $result = mysqli_query($sql, $query) or die(mysql_error());
     return $result;
     /*if (!mysqli_query($sql, $query))
     echo "QUERY failed: <br />$query<br /><br />" . mysql_error() . "<br /><br />";*/
}

function destroySession()
{
    $_SESSION = array();
    
    if (session_id() != "" || isset($_COOKIE[session_name()]))
        setcookie(session_name(), '', time()-2592000, '/');
    
    session_destroy();
}

function get_post($var)
{
    //$var = mysqli_real_escape_string($db_server, $var);
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

function showProfile($user)
{
    if (file_exists("$user.jpg"))
        echo "<img src='/userimages/$user.jpg' align='left' />";
        
    $result = queryMysql("SELECT * FROM pdata WHERE user_name='$user'");
    
    if (mysql_num_rows($result))
    {
        $row = mysql_fetch_row($result);
        echo stripslashes($row[1]) . "<br clear=left /><br />";
    }
}
?>