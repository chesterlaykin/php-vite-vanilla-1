<?php

//Configuration

function getManifestProp($prop) {
    if(file_exists( getcwd('./dist/manifest.json') )){
         die('exists');
    }else{
        die('no exists');
    }
}

