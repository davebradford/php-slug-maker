<?php

$title = $_REQUEST['title'];

function create_slug($title){
   $slug=preg_replace('/[^A-Za-z0-9-]+/', '-', $title);
   return $slug;
}

echo create_slug($title);

?>