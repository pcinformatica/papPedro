<?php
$id=-1;
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $inicio=false;
}else{
    $inicio=true;
}

include_once("includes/functionSlideshow.php");
top();
table($inicio,$id);
footer();
?>