<?php
require 'SocialMediaAdapter.php';
require 'Facebook.php';
require 'FacebookAdapter.php';

$facebook = new \App\FacebookAdapter(new \App\Facebook());
$message = getUserMessage();

$facebook->post();
function getUserMessage()
{
    echo 'hi there';
}