<?php

include"../markdown.php";
$mytext = "
4. ssh / scp / rsync
====================
In a previous section we went over how to copy files from one place on your
computer to another. Now what about over a network? Well first you will need to
connect to another computer:

###  ssh < username >@< hostname >
####  Used for:
Establishing a \"secure shell\" on another computer. You will be logged into
that computer, using a shell on that computer.This allows you to do work on that
computer remotely, as well as access resources on that computer's network that
may not be on the network you are currently on.";

$my_html = Markdown($mytext);

echo $my_html;

?>
