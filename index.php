<!DOCTYPE html>
<?php
/*
 * Erulier
 * 
 * Author: Bhuvan Arora / bhuvan.aurora@gmail.com       
 * 
 * For new users: signin
 *
 */
 
 //     Option to let users create and edit their profiles to be created pg480
 //     Option to let users create communities to be provided

?>
<html>
<head lang="en">
	<title>Erulier.</title>
	<!--<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />-->
        <link href="css/signup.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Lato:400,300italic|Armata|Carrois+Gothic|Roboto:400,100' rel='stylesheet' type='text/css'>
        <script>
        function validate(form)
        {
        
        if (form.username.value.indexOf("@") > 0)
        fail = validateEmail(form.username.value)
        else
        fail = validateUsername(form.username.value)
        fail += validatePassword(form.password.value)
        if (fail == "")
        {
        return true
        }
        else
        {
        alert(fail);
        return false
        }
        
        }
        </script>
</head>
<body class="Body">

	<div id="header">
        
		<div id="logo">
			Erulier.
		</div>
		<div id="logo2">
			<!--First step to your dreams-->
		</div>
	</div>

         
	<div id="content">
			<div id="regform">			
				<form class="form-signin" role="form" action="index.php" method="post" onSubmit="return validate(this)">
					<input name="username" type="text" placeholder="Username" maxlength="32" size="32" data-required="required"/>
					<br/>
                                        <input name="password" type="password" placeholder="Password" maxlength="16" size="32" data-required="required"/>
					<br/>
					<input name="login" type="submit" value="Log in"/>
				</form>
                                <a href="signup.php"><h5>Sign up for a new account</h5></a>
                                <a href="homepage.php"><h5>Continue as guest</h5></a>
			</div>
        </div>

<script>
function validateUsername(field)
{
if (field == "") return "No Username was entered.\n"
else if (field.length < 5 || field.length > 32)
return "Usernames must be at least 5 characters.\n"
else if (/[^a-zA-Z0-9_-]/.test(field))
return "Only a-z, A-Z, 0-9, - and _ allowed in Usernames.\n"
return ""
}
function validatePassword(field)
{
if (field == "") return "No Password was entered.\n"
else if (field.length < 6)
return "Passwords must be at least 6 characters.\n"
return ""
}
function validateEmail(field)
{
if (field == "") return "No Email was entered.\n"
else if (!((field.indexOf(".") > 0) &&
(field.indexOf("@") > 0)) ||
/[^a-zA-Z0-9.@_-]/.test(field))
return "The Email address is invalid.\n"
return ""
}
</script>

        <?php require ('signin.php'); ?>        
          
	<div id="footer">
		<?php echo "&copy"; ?> Erulier	
	</div>


</body>
</html>