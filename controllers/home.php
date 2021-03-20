<?php
       require_once 'Controllers.php';
       require_once 'core/OfferManager.php';
       $donne = ['name' => ''];
       $compa = new Company($donne);
       $lo = new OfferManager();
       $smarty->assign('tes', $lo->getAll());