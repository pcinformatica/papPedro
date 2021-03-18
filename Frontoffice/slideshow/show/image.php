
<?php

$types = array( 'png', 'jpg', 'jpeg', 'gif' );
$path = '../images';
$dir = new DirectoryIterator($path);
foreach ($dir as $fileInfo) {
$ext = strtolower( $fileInfo->getExtension() );
if( in_array( $ext, $types ) ) echo $fileInfo->getFilename();
}
?>



