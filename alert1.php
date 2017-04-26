<?php

 session_start();

$_SESSION['Name'] = $_POST['name'];

 if(!isset($_SESSION['Name'])){
 header("location:/leave/login.php");
 }

    $Name = $_POST['name']; 
    $email = $_POST['email']; 
    $comments = $_POST['comments'];

$from = $email;
$subject = "Customer has sent you a mail";
$to = "p.igwubor@gmail.com";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers = "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers = "From:" .$from;
$message1 = " Hello Philip Igwubor, \r\n\r\n". $comments ."\r\n\r\n". "From: " .$Name ."\r\n\r\n". "Email: " .$email;
mail($to,$subject,$message1,$headers);

?>

<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script type='text/javascript' src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script type='text/javascript' src='//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
 <script type='text/javascript' src='//cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>
<style type="text/css">
#abc {
width:100%;
height:100%;
opacity: .95;
top:0;
left:0;
display:none;
position:fixed;
background-color:#C6DEFF;
overflow:auto;
}
img#close {
position:absolute;
right:-14px;
top:-14px;
cursor:pointer
}
div#popupContact {
position:absolute;
left:43%;
top:13%;
margin-left:-202px;
font-family:'Raleway',sans-serif
}
#form {
max-width:600px;
min-width:250px;
padding:10px 50px;
border:2px solid gray;
border-radius:10px;
font-family:raleway;
background-color:#fff
}
p {
margin-top:30px
}
h2 {
background-color:#FEFFED;
padding:20px 35px;
margin:-10px -50px;
text-align:center;
border-radius:10px 10px 0 0
}
hr {
margin:10px -50px;
border:0;
border-top:1px solid #ccc
}
input[type=text] {
width:82%;
padding:10px;
margin-top:30px;
border:1px solid #ccc;
padding-left:40px;
font-size:16px;
font-family:raleway
}
#name {
background-image:url(../images/name.jpg);
background-repeat:no-repeat;
background-position:5px 7px
}
#email {
background-image:url(../images/email.png);
background-repeat:no-repeat;
background-position:5px 7px
}
textarea {
background-image:url(../images/msg.png);
background-repeat:no-repeat;
background-position:5px 7px;
width:82%;
height:95px;
padding:10px;
resize:none;
margin-top:30px;
border:1px solid #ccc;
padding-left:40px;
font-size:16px;
font-family:raleway;
margin-bottom:30px
}
#submit {
text-decoration:none;
width:100%;
text-align:center;
display:block;
background-color: #2F4F4F;
color:#fff;
border:1px solid #FFCB00;
padding:10px 0;
font-size:20px;
cursor:pointer;
border-radius:5px
}
span {
color:red;
font-weight:700
}
button {
width:10%;
height:45px;
border-radius:3px;
background-color:#cd853f;
color:#fff;
font-family:'Raleway',sans-serif;
font-size:18px;
cursor:pointer
}
h3{
color: black;
}
h4{
color: blue;
padding-left: 50px;
}
</style>
</head>
<header>

</header>
<script>
//Function To Display Popup
window.onload = function div_show(){
document.getElementById('abc').style.display = "block";
}
//Function to Hide Popup
function div_hide(){
document.getElementById('abc').style.display = "none";
}
</script>
<!-- Body Starts Here -->
<body id="body" style="overflow:hidden;">
<div id="abc">
<!-- Popup Div Starts Here -->
<div id="popupContact">
<!-- Contact Us Form -->
<form action="#" id="form" method="post" name="form">

<h2>Thank you!!!</h2><div class="alert alert-success" role="alert" id="success_message"><h2>Successfully Delivered <i class="glyphicon glyphicon-thumbs-up"></h2></i></div>
<hr>


<div class="alert alert-info">
<h3><p> Thank you for inquiry or comment. I will surely get back to you through your provided email contact. </h3></p>
<br><h2><p><h3 style="text-align: center"> Do have a nice day. </h2></p>
</div>

<a href="index.php" id="submit">Back to Home Page</a>
</form>
</div>
<!-- Popup Div Ends Here -->
</div>

</body>
<!-- Body Ends Here -->
</html>