<?php

require_once "connection.php";

class ClientModel{

	static public function mdlAddClient($table,$data){

		$stmt = Connection::connect()->prepare("INSERT INTO $table (name) VALUES (:name)");
		$stmt -> bindParam(":name", $data["clientname"], PDO::PARAM_STR);
		if ($stmt->execute()) {
			return 'success';
		} else {
			return 'error';
		}
		// $stmt -> close();
		$stmt = null;

	}

	// SHOW CLIENTS
	static public function mdlShowClients($table,$item,$value){

        if ($item !=null){ 

            $stmt = Connection::connect()->prepare("SELECT * FROM $table where $item =:$item");
            $stmt -> bindParam(":".$item, $value, PDO::PARAM_STR); // bind the item value with the value parameter
            $stmt->execute(); 
            return $stmt ->fetch();
        }else{

			$stmt = Connection::connect()->prepare("SELECT * FROM $table");
			$stmt->execute(); 
            return $stmt ->fetchAll();
            
        }    
	}
	
	static public function mdlCreateBetting($table,$data){

		$stmt = Connection::connect()->prepare("INSERT INTO $table (clientname,raceNumber,horseName,amountbet,price,payout) VALUES (:clientname,:raceNumber,:horseName,:amountbet,:price,:payout)");

		$stmt -> bindParam(":clientname", $data["bettingclientname"], PDO::PARAM_STR);
		$stmt -> bindParam(":raceNumber", $data["racenum"], PDO::PARAM_STR);
		$stmt -> bindParam(":horseName", $data["horsename"], PDO::PARAM_STR); 
		$stmt -> bindParam(":amountbet", $data["amountbet"], PDO::PARAM_STR);
		$stmt -> bindParam(":price", $data["price"], PDO::PARAM_STR);
		$stmt -> bindParam(":payout", $data["payout"], PDO::PARAM_STR);

		if ($stmt->execute()) {
			
			return 'success';
		
		} else {
			
			return 'error';
		}
		
		//$stmt -> close();

		$stmt = null;

	}

	// static public function mdlShowBetsOnHorses($table) {

	// 	$stmt = Connection::connect()->prepare("SELECT * FROM $table");

	// 	$stmt->execute(); 

	// 	return $stmt ->fetchAll();
		
	// }

	// static public function mdlShowClientBettingInfo($column, $value){

	// 	if ($value !=null){ 

    //         $stmt = Connection::connect()->prepare("SELECT horseName, amountbet, payout FROM horsesales where $column=:$value");
    
    //         $stmt -> bindParam(":",$column, $value, PDO::PARAM_STR); 
    
    //         $stmt->execute(); 
    
	// 		return $stmt ->fetchAll();

	// 	}else{

	// 		var_dump("error");
	// 	}
	
	// }


	// // static public function mdlShowClientInfo($table, $item, $value){
	// // 	$stmt = Connection::connect()->prepare("SELECT * FROM $table WHERE $item = $value");
	// // 	$stmt -> execute();
	// // 	return $stmt -> fetchAll();
	// // 	$stmt -> close();
	// // 	$stmt = null;
	// // }



}