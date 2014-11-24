<?php
$username = $_POST['username'];
$password = $_POST['pass'];

//admin: ezwan password: wan123

if($username == 'ezwan' AND $password == 'wan123'){
    echo "you have logged in";
}
 else {
     echo "you have not logged in, username or password incorrect";
 }
?>