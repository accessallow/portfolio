<?php


$message=NULL;

if(isset($_POST['name'])){
    $connection = mysql_connect($connection='mysql.1freehosting.com', $username='u334712321_root', $password='abc123');
    mysql_select_db('u334712321_h5db');
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $query = "insert into userdata(email,name,message) values('$email','$name','$message');";
    
    $result = mysql_query($query);
    $message = "Thankyou for your feedback.";
    
}


?>
<!doctype html>
<html>
    <head>
        <title>My site</title>
        <link rel="stylesheet" href="style.css"/>
        <link href='http://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister' rel='stylesheet' type='text/css'>
    </head>
    <body>
	<div id="wrap">
    <?php include_once './header.php';?>
    <section>
        <p id="notification"><?php 
        if($message){
            echo $message;
        }
            
            ?></p>
        <div id="contact_form">
            <form action="contact.php" method="post" id="contact-form">
            Name <br/><input type="text" name="name"/> <br/>
            Email <br/><input type="text" name="email"/><br/>
            Message <br/><textarea name="message"></textarea><br/>
            <br/>
            <button onclick="document.getElementById('contact-form').submit();">Submit</button>
            </form>
        </div>
    </section>
	</div>
	<div id="footer">
    <footer>
        <p>Sanchaar Developers copyright 2013-2014</p>
    </footer>
	</div>
    </body>
</html>