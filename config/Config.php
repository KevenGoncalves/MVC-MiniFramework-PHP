<?php

#variaveis globais

#EnterFolder
$internalFolder = "";

#Root Dirs
define("DIRPAGE","http://{$_SERVER['HTTP_HOST']}/{$internalFolder}");
define("DIRREQ","{$_SERVER['DOCUMENT_ROOT']}/{$internalFolder}");

#Main public Dirs
define('DIRIMG',DIRPAGE."public/img/");
define('DIRCSS',DIRPAGE."public/css/");
define('DIRJS',DIRPAGE."public/js/");
define('DIRFONT',DIRPAGE."public/font/");

?>