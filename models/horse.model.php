<?php
require_once "connection.php";

class HorseModel
{
    static public function mdlCreateHorse($data)
    {
        $stmt = Connection::connect()->prepare("INSERT INTO horse (racenumber,horsename) VALUES (:racenumber,:horsename)");
        // Plug the values 
        $stmt->bindParam(":racenumber", $data["racenum"], PDO::PARAM_STR);
        $stmt->bindParam(":horsename", $data["horsename"], PDO::PARAM_STR);
        if ($stmt->execute()) {  
            return 'success';

        }else {
            return 'error';
        }

        $stmt = null;
    }

    static public function mdlInsertWinningHorses($data)
    {
        $stmt = Connection::connect()->prepare("INSERT INTO WonHorses (horsename) VALUES (:horsename)");
        // Plug the values 
        $stmt->bindParam(":horsename", $data["WiningHorse"], PDO::PARAM_STR);
        if ($stmt->execute()) {  
            return 'success';

        }else {
            return 'error';
        }

        $stmt = null;
    }

    static public function mdlShowHorsesBettings($table)
    {

        $stmt = Connection::connect()->prepare("SELECT * FROM $table");

        $stmt->execute();

        return $stmt->fetchAll();

        $stmt = null;
    }

    static public function mdlShowClientInfo($table, $item, $value)
    {

        $stmt = Connection::connect()->prepare("SELECT * FROM $table WHERE $item = '$value' ");

        $stmt->execute();

        return $stmt->fetchAll();

        $stmt = null;
    }
    
    public static function mdlShowTotalHeavyBettingsForRace1()
    { 
        $stmt = Connection::connect()->prepare("SELECT horsename, raceNumber, SUM(amountbet), SUM(payout) FROM horsesales WHERE raceNumber=1 GROUP BY horsename");
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public static function mdlShowTotalHeavyBettingsForRace2()
    {
        $stmt = Connection::connect()->prepare("SELECT horsename, raceNumber, SUM(amountbet), SUM(payout) FROM horsesales WHERE raceNumber = 2 GROUP BY horsename");
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public static function mdlShowTotalHeavyBettingsForRace3()
    {
        $stmt = Connection::connect()->prepare("SELECT horsename, raceNumber, SUM(amountbet), SUM(payout) FROM horsesales WHERE raceNumber = 3 GROUP BY horsename");
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public static function mdlShowTotalHeavyBettingsForRace4()
    {
        $stmt = Connection::connect()->prepare("SELECT horsename, raceNumber, SUM(amountbet), SUM(payout) FROM horsesales WHERE raceNumber = 4 GROUP BY horsename");
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public static function mdlShowTotalHeavyBettingsForRace5()
    {
        $stmt = Connection::connect()->prepare("SELECT horsename, raceNumber, SUM(amountbet), SUM(payout) FROM horsesales WHERE raceNumber = 5 GROUP BY horsename");
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public static function mdlShowTotalHeavyBettingsForRace6()
    {
        $stmt = Connection::connect()->prepare("SELECT horsename, raceNumber, SUM(amountbet), SUM(payout) FROM horsesales WHERE raceNumber = 6 GROUP BY horsename");
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public static function mdlShowTotalHeavyBettingsForRace7()
    {
        $stmt = Connection::connect()->prepare("SELECT horsename, raceNumber, SUM(amountbet), SUM(payout) FROM horsesales WHERE raceNumber = 7 GROUP BY horsename");
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public static function mdlShowTotalHeavyBettingsForRace8()
    {
        $stmt = Connection::connect()->prepare("SELECT horsename, raceNumber, SUM(amountbet), SUM(payout) FROM horsesales WHERE raceNumber = 8 GROUP BY horsename");
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public static function mdlShowTotalHeavyBettingsForRace9()
    {
        $stmt = Connection::connect()->prepare("SELECT horsename, raceNumber, SUM(amountbet), SUM(payout) FROM horsesales WHERE raceNumber = 9 GROUP BY horsename");
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public static function mdlShowTotalHeavyBettingsForRace10()
    {
        $stmt = Connection::connect()->prepare("SELECT horsename, raceNumber, SUM(amountbet), SUM(payout) FROM horsesales WHERE raceNumber = 10 GROUP BY horsename");
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public static function mdlInsertBookmakerBetting($data){

        $stmt = Connection::connect()->prepare("INSERT INTO bookmaker (BookmakerName, HorseName, AmountBet, HorsePrice, Payout) VALUES (:BookmakerName, :HorseName, :AmountBet, :HorsePrice, :Payout)");
        $stmt->bindParam(":BookmakerName", $data["BookmakerName"], PDO::PARAM_STR);
        $stmt->bindParam(":HorseName", $data["HorseName"], PDO::PARAM_STR);
        $stmt->bindParam(":AmountBet", $data["AmountBet"], PDO::PARAM_STR);
        $stmt->bindParam(":HorsePrice", $data["HorsePrice"], PDO::PARAM_STR);
        $stmt->bindParam(":Payout", $data["Payout"], PDO::PARAM_STR);
        if ($stmt->execute()) {  
            return 'success';

        }else {
            return 'error';
        }

        $stmt = null;
    }

    public static function mdlInsertBookmakerBettingsByRace($data){

        $stmt = Connection::connect()->prepare("INSERT INTO bookmakerr (RaceNumber, BookmakerName, HorseName, AmountBet, HorsePrice, Payout) VALUES (:RaceNumber, :BookmakerName, :HorseName, :AmountBet, :HorsePrice, :Payout)");
        $stmt->bindParam(":RaceNumber", $data["RaceNumber"], PDO::PARAM_STR);
        $stmt->bindParam(":BookmakerName", $data["BookmakerName"], PDO::PARAM_STR);
        $stmt->bindParam(":HorseName", $data["HorseName"], PDO::PARAM_STR);
        $stmt->bindParam(":AmountBet", $data["AmountBet"], PDO::PARAM_STR);
        $stmt->bindParam(":HorsePrice", $data["HorsePrice"], PDO::PARAM_STR);
        $stmt->bindParam(":Payout", $data["Payout"], PDO::PARAM_STR);
        if ($stmt->execute()) {  
            return 'success';

        }else {
            return 'error';
        }

        $stmt = null;
    }

    static public function mdlSaveHorse($data)
    {
        //update horse table with new total amout bet and total betting 
        $stmt = Connection::connect()->prepare("UPDATE horse SET totalbetting = :totalbetting, totalpayout = :totalpayout WHERE horsename =:horsename");

        $stmt->bindParam(":totalbetting", $data["HorseAmountBets"], PDO::PARAM_INT);
        $stmt->bindParam(":totalpayout", $data["HorsePayouts"], PDO::PARAM_INT);
        $stmt->bindParam(":horsename", $data["horsename"], PDO::PARAM_STR);

        if ($stmt->execute()) {

            return 'success';
        } else {

            return 'error';
        }

        $stmt = null;
    }

    static public function mdlShowBookmakerBettings($table)
    {

        $stmt = Connection::connect()->prepare("SELECT * FROM $table");

        $stmt->execute();

        return $stmt->fetchAll();

        $stmt = null;
    }

    static public function mdlShowBookmakerBettingsRace2($table)
    {

        $stmt = Connection::connect()->prepare("SELECT * FROM $table");

        $stmt->execute();

        return $stmt->fetchAll();

        $stmt = null;
    }

    static public function mdlShowBookmakerBettingsByRaceNumber($RaceNumValue)
    {

        $stmt = Connection::connect()->prepare("SELECT * FROM bookmakerr WHERE RaceNumber = :RaceNumber");

        $stmt->bindParam(":RaceNumber", $RaceNumValue, PDO::PARAM_INT);

        $stmt -> execute();

		return $stmt -> fetchAll();

		$stmt = null;
    }

    static public function mdlShowWiningHorsesPayout($clientnameValue)
    {

        $stmt = Connection::connect()->prepare("SELECT SUM(payout) FROM horsesales WHERE clientname = :clientname AND horseName IN ('THE RIDDLER', 'DESERT ILLUSION', 'CAPTAIN GARETT', 'CARLAS MAMBO', 'CULTURE TRIP', 'WALL TAG', 'AMANDLA', 'STRAIGHT')");

        $stmt->bindParam(":clientname", $clientnameValue, PDO::PARAM_INT);

        $stmt -> execute();

		return $stmt -> fetchAll();

		$stmt = null;
    }



}
