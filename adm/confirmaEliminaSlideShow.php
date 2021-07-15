<?php
    unlink('../slideshowImages/'.$_GET['url']);
    header("location:listaslideshow.php?inicio=true");
?>