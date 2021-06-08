<?php

require_once "../controllers/horse.controller.php";
require_once "../models/horse.model.php";

// require_once "connection.php";


// // $result = array();

// // $stmt = Connection::connect()->prepare("SELECT horsename , SUM(amountbet), SUM(payout) FROM horsesales GROUP BY horsename");

// // $stmt->execute(); 

// // $stmt->fetchAll();


// $con = new mysqli('localhost', 'root', '', 'BETdb'); 

// $return_arr = array();

// //$query = Connection::connect()->prepare("SELECT horsename , SUM(amountbet), SUM(payout) FROM horsesales GROUP BY horsename");
// $query = "SELECT * FROM horsesales";

// $result = mysqli_query($con,$query);

// //mysqli_fetch_all($result, MYSQLI_ASSOC);

// while($row = mysqli_fetch_array($result)){

//     $horsename = $row['horsename'];

//     $return_arr[] = array("horsename" => $horsename);
// }

// echo json_encode($return_arr);


class AjaxHorses
{

    public $RaceNumber;

    public function ShowHorsesNameByRace()
    {

        $request = HorseController::ctrShowTotalAmoutBet();

        echo json_encode($request);
    }

    public $ClientName;

    public function ShowClientBettingInfor()
    {

        $clientName = "clientname";

        $ClientNameOnBtnClick = $this->$ClientName;

        $request = ClientController::ctrShowClientBettingInformation($clientName, $ClientNameOnBtnClick);

        echo json_encode($request);
    }
}

if (isset($_POST["RaceNumber"])) {

    $horses = new AjaxHorses();
    $horses->RaceNumber = $_POST["RaceNumber"];
    $horses->ShowHorsesNameByRace();
} else {

    echo 'Variable not Set';
}

if (isset($_POST["ClientName"])) {

    $showclientinfo = new AjaxHorses();
    $showclientinfo->ClientName = $_POST["ClientName"];
    $showclientinfo->ShowClientBettingInfor();
}
