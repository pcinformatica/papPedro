<?php
$images = scandir("../images");
var_dump($images); ?>



<?php    $images = scandir("../images");
var_dump($images);foreach($images as $img){
if(!in_array($img, array(".", ".."))){
    $filename = "images" . DIRECTORY_SEPARATOR . $img;            $info = pathinfo($filename);            var_dump($info);
}
}?>
