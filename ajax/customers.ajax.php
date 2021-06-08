<?php

require_once "../controllers/clients.controller.php";
require_once "../models/clients.model.php";
require_once "../controllers/horse.controller.php";
require_once "../models/horse.model.php";

class AjaxClients
{
    public $idClient;
    public function ShowClientName()
    {

        $idClient = "id";

        $clientIDOnBtnClickValue = $this->idClient;

        $request = ClientController::ctrShowClients($idClient, $clientIDOnBtnClickValue);

        echo json_encode($request);
    }

    public $ClientName;
    public function ajaxShowClientBettingInfo()
    {

        $item = "clientname";

        $value = $this->ClientName;

        $request = HorseController::ctrShowClientInfo($item, $value);

        echo json_encode($request);
    }
}
if (isset($_POST["idClient"])) {

    $client = new AjaxClients();
    $client->idClient = $_POST["idClient"];
    $client->ShowClientName();
}

if (isset($_POST["ClientName"])) {

    $showclientinfo = new AjaxClients();
    $showclientinfo->ClientName = $_POST["ClientName"];
    $showclientinfo->ajaxShowClientBettingInfo();
}
