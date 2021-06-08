<?php
class HorseController
{
    // public static function ctrShowRaces($item, $value)
    // {
    //     $table = "horse";
    //     $request = HorseModel::mdlShowRaces($table, $item, $value);
    //     return $request;
    // }

    // public static function ctrShowAllForRace1()
    // {
    //     $table = "horse";
    //     $request = HorseModel::mdlShowAllForRace1($table);
    //     return $request;
    // }

    // public static function ctrInsertTotalBetting($sumOfArray)
    // {
    //     if (isset($a)) {
    //         $table = "horse";
    //         $request = HorseModel::mdlInsertTotalBetting($table, $sumOfArray);
    //         return $request;
    //     }
    // }


    // public static function ctrShowTotalAmoutBetRace2()
    // {
    //     $table = "horse";
    //     $request = HorseModel::mdlShowTotalAmoutBetRace2();
    //     return $request;
    // }



    static public function ctrShowHorsesBettings()
    {
        $table = "horsesales";
        $request = HorseModel::mdlShowHorsesBettings($table);
        return $request;
    }

    static public function ctrShowClientInfo($item, $value)
    {
        $table = "horsesales";
        $request = HorseModel::mdlShowClientInfo($table, $item, $value);
        return $request;
    }

    static public function ctrCreateHorses()
    {
        if (isset($_POST["NewRaceNumber"])) 
        {
            // if Textbox 1 is filled with value  
            if ($_POST["NewHorseName1"] != "" && $_POST["NewRaceNumber"] != ""){
                $data = array('racenum' => $_POST["NewRaceNumber"], 'horsename' => $_POST["NewHorseName1"] );
                $request = HorseModel::mdlCreateHorse($data);
            }
            if ($request == "success") 
            {
                echo '<script>
                        swal({
                            type: "success",
                            title: "The Horse Bettings have been saved succesfully",
                            showConfirmButton: true,
                            confirmButtonText: "Close"
                            }).then(function(result){
                                if (result.value) {
                                    window.location = "horseregistration";
                                }
                            })
                     </script>';
            }

            if ($_POST["NewHorseName2"] != "" && $_POST["NewRaceNumber"] != ""){
                $data = array('racenum' => $_POST["NewRaceNumber"], 'horsename' => $_POST["NewHorseName2"] );
                $request = HorseModel::mdlCreateHorse($data);
            }   
            elseif ($_POST["NewHorseName2"] == "" && $_POST["NewRaceNumber"] == ""){
                // skip, do not insert in database 
            } 
  
            if ($_POST["NewHorseName3"] != "" && $_POST["NewRaceNumber"] != ""){
                $data = array('racenum' => $_POST["NewRaceNumber"], 'horsename' => $_POST["NewHorseName3"] );
                $request = HorseModel::mdlCreateHorse($data);
            }
            elseif ($_POST["NewHorseName3"] == "" && $_POST["NewRaceNumber"] != ""){
                // skip, do not insert in database 
            } 

            if ($_POST["NewHorseName4"] != "" && $_POST["NewRaceNumber"] != ""){
                $data = array('racenum' => $_POST["NewRaceNumber"], 'horsename' => $_POST["NewHorseName4"] );
                $request = HorseModel::mdlCreateHorse($data);
            }
            elseif ($_POST["NewHorseName4"] == "" && $_POST["NewRaceNumber"] != ""){
                // skip, do not insert in database 
            } 

            if ($_POST["NewHorseName5"] != "" && $_POST["NewRaceNumber"] != ""){
                $data = array('racenum' => $_POST["NewRaceNumber"], 'horsename' => $_POST["NewHorseName5"] );
                $request = HorseModel::mdlCreateHorse($data);
            }
            elseif ($_POST["NewHorseName5"] == "" && $_POST["NewRaceNumber"] != ""){
                // skip, do not insert in database 
            } 

            if ($_POST["NewHorseName6"] != "" && $_POST["NewRaceNumber"] != ""){
                $data = array('racenum' => $_POST["NewRaceNumber"], 'horsename' => $_POST["NewHorseName6"] );
                $request = HorseModel::mdlCreateHorse($data);
            }
            elseif ($_POST["NewHorseName6"] == "" && $_POST["NewRaceNumber"] != ""){
                // skip, do not insert in database 
            } 

            if ($_POST["NewHorseName7"] != "" && $_POST["NewRaceNumber"] != ""){
                $data = array('racenum' => $_POST["NewRaceNumber"], 'horsename' => $_POST["NewHorseName7"] );
                $request = HorseModel::mdlCreateHorse($data);
            }
            elseif ($_POST["NewHorseName7"] == "" && $_POST["NewRaceNumber"] != ""){
                // skip, do not insert in database 
            } 

            if ($_POST["NewHorseName8"] != "" && $_POST["NewRaceNumber"] != ""){
                $data = array('racenum' => $_POST["NewRaceNumber"], 'horsename' => $_POST["NewHorseName8"] );
                $request = HorseModel::mdlCreateHorse($data);
            }
            elseif ($_POST["NewHorseName8"] == "" && $_POST["NewRaceNumber"] != ""){
                // skip, do not insert in database 
            } 

            if ($_POST["NewHorseName9"] != "" && $_POST["NewRaceNumber"] != ""){
                $data = array('racenum' => $_POST["NewRaceNumber"], 'horsename' => $_POST["NewHorseName9"] );
                $request = HorseModel::mdlCreateHorse($data);
            }
            elseif ($_POST["NewHorseName9"] == "" && $_POST["NewRaceNumber"] != ""){
                // skip, do not insert in database 
            } 

            if ($_POST["NewHorseName10"] != "" && $_POST["NewRaceNumber"] != ""){
                $data = array('racenum' => $_POST["NewRaceNumber"], 'horsename' => $_POST["NewHorseName10"] );
                $request = HorseModel::mdlCreateHorse($data);
            }
            elseif ($_POST["NewHorseName10"] == "" && $_POST["NewRaceNumber"] != ""){
                // skip, do not insert in database 
            } 
            
        }
    }

    static public function ctrInsertWinningHorses(){

        if (isset($_POST["WiningHorseName1"])) {

            if ($_POST["WiningHorseName1"] != ""){

                $data = array('WiningHorse' => $_POST["WiningHorseName1"]);
                $request = HorseModel::mdlInsertWinningHorses($data);
            }
            if ($request == "success") 
            {
                echo '<script>
                        swal({
                            type: "success",
                            title: "Winning Horses have been saved succesfully",
                            showConfirmButton: true,
                            confirmButtonText: "Close"
                            }).then(function(result){
                                if (result.value) {
                                    window.location = "home";
                                }
                            })
                     </script>';
            }

            if ($_POST["WiningHorseName2"] != ""){

                $data = array('WiningHorse' => $_POST["WiningHorseName2"]);
                $request = HorseModel::mdlInsertWinningHorses($data);
            }
            elseif ($_POST["WiningHorseName2"] == ""){
                // skip, do not insert in database 
            } 

            if ($_POST["WiningHorseName3"] != ""){

                $data = array('WiningHorse' => $_POST["WiningHorseName3"]);
                $request = HorseModel::mdlInsertWinningHorses($data);
            }
            elseif ($_POST["WiningHorseName3"] == ""){
                // skip, do not insert in database 
            } 

            if ($_POST["WiningHorseName4"] != ""){

                $data = array('WiningHorse' => $_POST["WiningHorseName4"]);
                $request = HorseModel::mdlInsertWinningHorses($data);
            }
            elseif ($_POST["WiningHorseName4"] == ""){
                // skip, do not insert in database 
            } 

            if ($_POST["WiningHorseName5"] != ""){

                $data = array('WiningHorse' => $_POST["WiningHorseName5"]);
                $request = HorseModel::mdlInsertWinningHorses($data);
            }
            elseif ($_POST["WiningHorseName5"] == ""){
                // skip, do not insert in database 
            } 

            if ($_POST["WiningHorseName6"] != ""){

                $data = array('WiningHorse' => $_POST["WiningHorseName6"]);
                $request = HorseModel::mdlInsertWinningHorses($data);
            }
            elseif ($_POST["WiningHorseName6"] == ""){
                // skip, do not insert in database 
            } 
            
            if ($_POST["WiningHorseName7"] != ""){

                $data = array('WiningHorse' => $_POST["WiningHorseName7"]);
                $request = HorseModel::mdlInsertWinningHorses($data);
            }
            elseif ($_POST["WiningHorseName7"] == ""){
                // skip, do not insert in database 
            } 

            if ($_POST["WiningHorseName8"] != ""){

                $data = array('WiningHorse' => $_POST["WiningHorseName8"]);
                $request = HorseModel::mdlInsertWinningHorses($data);
            }
            elseif ($_POST["WiningHorseName8"] == ""){
                // skip, do not insert in database 
            } 

            if ($_POST["WiningHorseName9"] != ""){

                $data = array('WiningHorse' => $_POST["WiningHorseName9"]);
                $request = HorseModel::mdlInsertWinningHorses($data);
            }
            elseif ($_POST["WiningHorseName9"] == ""){
                // skip, do not insert in database 
            } 

            if ($_POST["WiningHorseName10"] != ""){

                $data = array('WiningHorse' => $_POST["WiningHorseName10"]);
                $request = HorseModel::mdlInsertWinningHorses($data);
            }
            elseif ($_POST["WiningHorseName10"] == ""){
                // skip, do not insert in database 
            } 
        }
    }

    public static function ctrCreateBookmakerBettingsByRace(){

        if (isset($_POST["NewRace1TxtBox"]) && isset($_POST["newHorseTextBox"])) 
        {
            $data = array(
                            'RaceNumber' => $_POST["NewRace1TxtBox"],
                            'HorseName' => $_POST["newHorseTextBox"],
                            'BookmakerName' => $_POST["SelectedBookmaker"],
                            'AmountBet' => $_POST["AmountBetTxt"],
                            'HorsePrice' => $_POST["HorsePriceTxt"],
                            'Payout' => $_POST["PayoutTxt"]
                        );

            $request = HorseModel::mdlInsertBookmakerBettingsByRace($data);

            if ($request == "success") 
            {
                echo '<script>
                        swal({
                            type: "success",
                            title: "The Horse Betting has been saved succesfully",
                            showConfirmButton: true,
                            confirmButtonText: "Close"
                            }).then(function(result){
                                if (result.value) {
                                    window.location.reload();
                                }
                            })
                     </script>';
            }
        }

    }

    // Show total Horse bets, total payouts 
    public static function ctrShowTotalAmoutBet()
    {
        $table = "horse";
        $request = HorseModel::mdlShowTotalHeavyBettingsForRace1();
        return $request;
    }

    public static function ctrShowTotalAmoutBetRace2()
    {
        $request = HorseModel::mdlShowTotalHeavyBettingsForRace2();
        return $request;
    }

    public static function ctrShowTotalAmoutBetRace3()
    {
        $request = HorseModel::mdlShowTotalHeavyBettingsForRace3();
        return $request;
    }

    public static function ctrShowTotalAmoutBetRace4()
    {
        $request = HorseModel::mdlShowTotalHeavyBettingsForRace4();
        return $request;
    }

    public static function ctrShowTotalAmoutBetRace5()
    {
        $request = HorseModel::mdlShowTotalHeavyBettingsForRace5();
        return $request;
    }

    public static function ctrShowTotalAmoutBetRace6()
    {
        $request = HorseModel::mdlShowTotalHeavyBettingsForRace6();
        return $request;
    }

    public static function ctrShowTotalAmoutBetRace7()
    {
        $request = HorseModel::mdlShowTotalHeavyBettingsForRace7();
        return $request;
    }

    public static function ctrShowTotalAmoutBetRace8()
    {
        $request = HorseModel::mdlShowTotalHeavyBettingsForRace8();
        return $request;
    }

    public static function ctrShowTotalAmoutBetRace9()
    {
        $request = HorseModel::mdlShowTotalHeavyBettingsForRace9();
        return $request;
    }

    public static function ctrShowTotalAmoutBetRace10()
    {
        $request = HorseModel::mdlShowTotalHeavyBettingsForRace10();
        return $request;
    }

    public static function ctrSaveHorse()
    {
        if (isset($_GET["HorseNameAttr"])) 
        {
            $data = array(
                'horsename' => $_GET["HorseNameAttr"],
                'HorseAmountBets' => $_GET["HorseAmountBetAttr"],
                'HorsePayouts' => $_GET["HorsePayoutAttr"]
            );
            $request = HorseModel::mdlSaveHorse($data);
            // $request = HorseModel::mdlSaveHorse($data1,$data2,$data3);
            if ($request == "success") {
                echo '<script>
                        swal({
                            type: "success",
                            title: "The Horse Bettings have been saved succesfully",
                            showConfirmButton: true,
                            confirmButtonText: "Close"
                        
                            }).then(function(result){
                                
                                if (result.value) {
                        
                                window.location = "horsebetsRace1";
                        
                                }
                            })
                        
                    </script>';
            }
        }
    }

    static public function ctrShowBookmakerBettings()
    {
        $table = "bookmaker";
        $request = HorseModel::mdlShowBookmakerBettings($table);
        return $request;
    }

    static public function ctrShowBookmakerBettingsRace2()
    {
        $table = "bookmakerR2";
        $request = HorseModel::mdlShowBookmakerBettingsRace2($table);
        return $request;
    }

    static public function ctrShowBookmakerBettingsByRaceNumber($RaceNumValue)
    {

        $request = HorseModel::mdlShowBookmakerBettingsByRaceNumber($RaceNumValue);

        return $request;
    }

   
    
}