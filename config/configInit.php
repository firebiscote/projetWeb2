<?php
// Initialisation de la session
session_start();
header("Cache-Control: no-cache");

// Chargement Smarty et Defines
require 'defines.inc.php';
require(_PATH_ . 'web/tools/smarty/Smarty.class.php');

// Chargement du coeur
$files = scandir(_CORE_);
foreach ($files as $filename) {
    if (is_file(_CORE_.$filename))
        require_once(_CORE_.$filename);
}

// Initialisation Smarty
$smarty = new Smarty();