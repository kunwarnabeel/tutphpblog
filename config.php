<?php
    
    $currentFolder = "/blog1/";
    $protocol = stripos($_SERVER['SERVER_PROTOCOL'],'https') === 0 ? 'https://' : 'http://';
    $serverName = $protocol.$_SERVER['SERVER_NAME'].$currentFolder;
?>