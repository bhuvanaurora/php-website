<?php
require_once ("login.php");

if (isset($_POST['username']) && isset($_POST['password']))
{
$username = get_post($_POST['username']);
$password = get_post($_POST['password']);
}

static $t = 0;

        if (empty($username)) 
            {
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
       elseif (isset($_POST['username']) &&
               isset($_POST['password']))
            {
                
                $user_last_login_timestamp = time();
       
                //$user_password_hash = password_hash($password, PASSWORD_DEFAULT, array('cost' => 12));
                $salt1 = "bh!";
                $salt2 = "eru^";        
                $user_password_hash = md5("$salt1$password$salt2");
                
                $query = "SELECT user_name, user_password_hash FROM pdata WHERE (user_name = '$username' OR user_email = '$username')";
                $result = mysqli_query($sql, $query);
                $row = mysqli_fetch_row($result);
                
                if(!($user_password_hash == $row[1]))
                    {
                        echo "<script>alert('Username/Password does not match')</script>";
                        return false;
                    }
                else
                    {
                        //echo "You are now logged in as $row[0]";
                        
                        session_start();
                        $_SESSION['username'] = $row[0];
                        ini_set('session.gc_maxlifetime', 60 * 60);
                        //echo "<br />" . ini_get('session.gc_maxlifetime');
                        header("location:homepage.php");
                        exit;
                       
                        $query2 = "UPDATE pdata SET user_last_login_timestamp = '$user_last_login_timestamp' WHERE (user_name = '$row[0]')";
                        $result2 = mysqli_query($sql, $query2) or die("Insert failed:" . mysql_error());    
                    }
            }
    
//mysql_close($db_server);

?>