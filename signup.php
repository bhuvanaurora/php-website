<!DOCTYPE html>
<?php
/*
 * Erulier
 * 
 * Author: Bhuvan Arora / bhuvan.aurora@gmail.com       
 * 
 * For new users: signup
 *
 */
 
//      Ajax request debugging required
//      for dynamically displaying the existence/non-existence
//      of user name by the username textbox 
  
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head lang="en">
	<title>Erulier.</title>
	<!--<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />-->
        <link href="css/signup.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Lato:400,300italic|Armata|Carrois+Gothic|Roboto:400,100' rel='stylesheet' type='text/css'>   
        <script src='../osc.js'></script>
        
        <script>
        function validate(form)
        {
        
        fail = validateUsername(form.username.value)
        fail += validateEmail(form.email.value)
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
        
        <script>
function checkUser(user)
{
    if(user.value == '')
    {
            O('info').innerHTML = ''
            return
    }
    
    params = "user=" + user.value
    request = new ajaxRequest()
    request.open("POST", "checkuser.php", true)
    request.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
    request.setRequestHeader("Content-length", params.length)
    request.setRequestHeader("Connection", "close")
    
    request.onreadystatechange = function()
    {
        if(this.readystate == 4)
            if(this.status == 200)
                if(this.responseText != null)
                    O('info').innerHTML = this.responseText
    }
    request.send(params)
}

function ajaxRequest()
{
    try
    {
            var request = new XMLHttpRequest()
    }
    catch(e1)
    {
        try
        {
            request = new ActiveXObject("Msxml2.XMLHTTP")
        }
        catch(e2)
        {
            try
            {
                request = new ActiveXObject("Microsoft.XMLHTTP")
            }
            catch(e3)
            {
                request = false
            }
        }
    }
    return request
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

        <?php $error = ""; ?> 
	<div id="content">
			<div id="regform">
              
				<form class="form-signin" role="form" action="signup.php" method="post" onSubmit="return validate(this)" name="form">
					<input name="username" type="text" placeholder="Username" maxlength="32" size="32" data-required="required"
                                        onBlur="checkUser(this)"/><span id='info'></span>
					<br/>
                                        <input name="email" type="text" placeholder="Email Address" maxlength="256" size="32" data-required="required"/>
					<br/>
                                        <input name="password" type="password" placeholder="Password" maxlength="16" size="32" data-required="required"/>
					<br/>
					<input name="signup" type="submit" value="Sign up"/>
				</form>
                                <a href="index.php"><h5>Log in to your account</h5></a>
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
        <?php require ('register.php'); ?>        
          
	<div id="footer">
		<?php echo "&copy"; ?> Erulier	
	</div>


</body>
</html>