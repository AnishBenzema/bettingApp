<?php
	
require_once "controllers/template.controller.php";
require_once "controllers/clients.controller.php";
require_once "controllers/horse.controller.php";

require_once "models/clients.model.php";
require_once "models/horse.model.php";

$template = new ControllerTemplate();
$template -> ctrTemplate();