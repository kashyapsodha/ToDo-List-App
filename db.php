<?php
$db = new Mysqli;
$db->connect('localhost','root','','todo_list');
if(!$db){
    echo "Success";
}
?>