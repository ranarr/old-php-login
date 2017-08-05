<?php
session_start();
if (!empty($_SESSION['login'])) 
{
    echo 'OH DUDE YOU LOGGED IN NICE JOB';
} else {
    echo 'You are not logged in. <a href="home.php">click here to log in</a>.';
};
?>