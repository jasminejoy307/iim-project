<!DOCTYPE html>
<html lang="en">
<head>
<title>IIM</title>
<?=$this->include("includes/css");?>
<?=$this->renderSection('css'); ?>
</head>
<body class="layout-1" data-luno="theme-blue">
<?php
echo $this->include("includes/leftmenu"); 
echo $this->include("includes/headermenu"); 
?>
<?=$this->renderSection('content'); ?>
<?=$this->include("includes/jsfile");?>
<?=$this->renderSection('js'); ?>
</body>
</html>