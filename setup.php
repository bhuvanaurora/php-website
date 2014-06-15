<html>
<head>
<title>Setting up database</title>
<?php include ("login.php"); ?>
</head>
<body><h4>Setting up..</h4>

createTable ('pdata',
             'user_name varchar(64),
              user_password_hash varchar(255),
              user_email varchar(64),
              user_creation_timestamp bigint(20),
              user_last_login_timestamp bigint(20),
              user_name PRIMARY KEY
              user_email UNIQUE KEY');
</body>
</html>