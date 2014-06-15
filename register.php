<?php
//session_start();
require_once ("login.php");

if (isset($_POST['username']) && isset($_POST['password']))
{
$username = get_post($_POST['username']);
$email =  get_post($_POST['email']);
$password = get_post($_POST['password']);
}

$user = "";

if(isset($_SESSION['username']))
    $user = get_post($_SESSION['username']);

if (isset($_SESSION['username']))
    destroySession();

if (queryMysql($sql, "SELECT * FROM pdata where user_name='$user'"))
{
    $error = "Username exists <br />";
}

static $t = 0;

        if (empty($username)) {
            //$_SESSION["feedback_negative"][] = 'FEEDBACK_USERNAME_FIELD_EMPTY';
            if ($t == 0)
            return false;
            else
            echo "username empty";
            }
        elseif (empty($password)) {
            //$_SESSION["feedback_negative"][] = 'FEEDBACK_PASSWORD_FIELD_EMPTY';    
            echo "password empty";
            }
        elseif (strlen($password) < 6) {
            //$_SESSION["feedback_negative"][] = 'FEEDBACK_PASSWORD_TOO_SHORT';
            echo "password too short";
            } 
        elseif (strlen($username) > 32 OR strlen($username) < 5) {
            //$_SESSION["feedback_negative"][] = 'FEEDBACK_USERNAME_TOO_SHORT_OR_TOO_LONG';
            echo "password too long or username too short";
            }
        elseif (empty($email)) {
            //$_SESSION["feedback_negative"][] = 'FEEDBACK_EMAIL_FIELD_EMPTY';
            echo "email empty";
            }
        elseif (strlen($email) > 64) {
            //$_SESSION["feedback_negative"][] = 'FEEDBACK_EMAIL_TOO_LONG';
            echo "email too long";
            }
     /*   elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            //$_SESSION["feedback_negative"][] = FEEDBACK_EMAIL_DOES_NOT_FIT_PATTERN;
            } */
        elseif (isset($_POST['username']) &&
                isset($_POST['email']) &&
                isset($_POST['password']))
            {
                
                /*$check = "SELECT * FROM pdata WHERE user_name = '$username'";
                echo $check;
                $rows = mysql_num_rows($check);
                $check = mysqli_query($sql, $check);
                
                echo mysql_num_rows($check);
                if($rows == 1)
                {
                    echo "username exists";
                    break;
                }
                
                $check = "SELECT * FROM pdata WHERE user_email = $email";
                $check = mysqli_query($sql, $check);
                $rows = mysql_num_rows($check);
                if($rows == 1)
                {
                    echo "email exists";
                    break;
                }*/
                
                $user_creation_timestamp = time();
       
                //$user_password_hash = password_hash($password, PASSWORD_DEFAULT, array('cost' => 12));        
                $salt1 = "bh!";
                $salt2 = "eru^";        
                $user_password_hash = md5("$salt1$password$salt2");
            
                $query = "INSERT INTO pdata(user_name, user_email, user_password_hash, user_creation_timestamp)".
                " VALUES ('$username', '$email', '$user_password_hash', '$user_creation_timestamp')";
            
                if (!mysqli_query($sql, $query))
                echo "INSERT failed: <br />$query<br /><br />" . mysql_error() . "<br /><br />";
            }
    
//mysql_close($db_server);

?>