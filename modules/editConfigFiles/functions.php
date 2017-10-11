<?php

function getFilesInXML($files)
{
    $values = array();

    if (isset($files->file)) {
        foreach ($files->file as $file) {
            if (empty((string)$file)) {
                continue;
            }

            $values[] = array(
                'name'            =>    (string)$file,
                'description'    =>    $file['description'],
                'path'            =>    (string)$file
            );
        }
    }
    
    return $values;
}