<?php


    $result = array();

    $cdir = scandir("images");
    foreach ($cdir as $key => $value)
    {
        if (!in_array($value,array(".","..")))
        {
            if (is_dir("images" . DIRECTORY_SEPARATOR . $value))
            {
                $result[$value] = ("images" . DIRECTORY_SEPARATOR . $value);
            }
            else
            {
                $result[] = $value;
            }
        }
    }

    return $result;

?>