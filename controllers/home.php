<?php
       require_once 'controllersRequire.php';
       $donne = ['name' => ''];
       $compa = new Company($donne);
       $smarty->assign('tes', $compa->_name);
