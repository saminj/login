<?php
session_start();
if (isset($_post["submit"])){
    if($_post["user"]=="samin" && $_post["pass"]=="jafari"){
        $_session["loginok"]='yes';
    }
    else{
        $_session["loginfaild"]='yes';
    }
}
?>

<html>
<head>
    <title> login </title>
</head>
<body>

<?php
if (isset($_get["logout"]) && $_get["logout"]=='yes'){
    unset($_session['loginok']);
    echo 'successful logout';
}
if(isset($_session["loginok"])){
    echo ("welcome");
} else {
    if (isset($_session["loginfaild"])) {
        echo("username or password it's not correct");
        unset($_session['loginfaild']);
    }
}
?>

<form metod="post"  action="login.php">
    <input type="text"  name="user"/><br/>
    <input type="password"  name="pass"/><br/>
    <input type="submit"  name="submit"  value="login"/>
    <form/>

</body>
</html>