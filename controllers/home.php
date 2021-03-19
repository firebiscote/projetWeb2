<?php
       require 'controllersRequire.php';
       $donne = ['id' => 2];
       $compa = new Company();
       $compa->hydrate($donne);
       $smarty->assign('tes', $compa->_id);
