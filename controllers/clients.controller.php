<?php

class ClientController
{

    static public function ctrCreateClient()
    {
        if (isset($_POST["newClientName"])) {

            $table = "clients";
            $data = array('clientname' => $_POST["newClientName"]);
            $request_to_model = ClientModel::mdlAddClient($table, $data);
            if ($request_to_model == "success") {
                echo '<script>
                        swal({
                            type: "success",
                            title: "The Client has been added succesfully!",
                            showConfirmButton: true,
                            confirmButtonText: "Close"

                        }).then(function(result){

                            if(result.value){

                                window.location = "create-betting";
                            }

                        });
                     </script>';
            } else {
                echo '<script> 
                        swal({
                            type: "error",
                            title: "No special characters or blank fields",
                            showConfirmButton: true,
                            confirmButtonText: "Close"
                
                        }).then(function(result){

                            if(result.value){

                                window.location = "create-betting";
                            }

                        });  
                     </script>';
            }

        }
    }

    static public function ctrShowClients($item, $value)
    {
        $table = "clients";
        $request = ClientModel::mdlShowClients($table, $item, $value);
        return $request;
    }


    static public function ctrCreateCustomerBetting()
    {

        if (isset($_POST["BettingClientName"])) {

            $table = "horsesales";

            // check if race number is set or not 
            if (isset($_POST["newRaceNumber"])) {
                $data = array(
                    'bettingclientname' => $_POST["BettingClientName"],
                    'racenum' => $_POST["newRaceNumber"],
                    'horsename' => $_POST["newHorseName"],
                    'amountbet' => $_POST["NewamountBet"],
                    'price' => $_POST["Newprice"],
                    'payout' => $_POST["Betpayout"]
                );
                $request = ClientModel::mdlCreateBetting($table, $data);

            }else{

                echo '<script>            
                swal({
                type: "error",
                title: "No special characters or blank fields",
                showConfirmButton: true,
                confirmButtonText: "Close"
                }).then(function(result){
                    if(result.value){
                        window.location = "create-betting";
                    }
                );            
             </script>';

            }
            
            // if request || request1 || request2 == "success"
            if ($request == "success") {

                echo '<script>                 
                        swal({
                        type: "success",
                        title: "Betting has been added succesfully!",
                        showConfirmButton: true,
                        confirmButtonText: "Close"
                        }).then(function(result){
                           if(result.value){
                                window.location = "create-betting";
                            }
                        });
                      </script>';
            } else {

                echo '<script>            
                        swal({
                        type: "error",
                        title: "No special characters or blank fields",
                        showConfirmButton: true,
                        confirmButtonText: "Close"
                        }).then(function(result){
                            if(result.value){
                                window.location = "create-betting";
                            }
                        );
                                    
                     </script>';
            }

            $data2 = array(
                'bettingclientname' => $_POST["BettingClientName"],
                'racenum' => $_POST["newRaceNumber2"],
                'horsename' => $_POST["newHorseName2"],
                'amountbet' => $_POST["NewamountBet2"],
                'price' => $_POST["Newprice2"],
                'payout' => $_POST["Betpayout2"]
            );
            $request2 = ClientModel::mdlCreateBetting($table, $data2);

            $data3 = array(
                'bettingclientname' => $_POST["BettingClientName"],
                'racenum' => $_POST["newRaceNumber3"],
                'horsename' => $_POST["newHorseName3"],
                'amountbet' => $_POST["NewamountBet3"],
                'price' => $_POST["Newprice3"],
                'payout' => $_POST["Betpayout3"]
            );
            $request3 = ClientModel::mdlCreateBetting($table, $data3);

            $data4 = array(
                'bettingclientname' => $_POST["BettingClientName"],
                'racenum' => $_POST["newRaceNumber4"],
                'horsename' => $_POST["newHorseName4"],
                'amountbet' => $_POST["NewamountBet4"],
                'price' => $_POST["Newprice4"],
                'payout' => $_POST["Betpayout4"]
            );
            $request4 = ClientModel::mdlCreateBetting($table, $data4);
        }
    }

    //calculate the sum of amountbet for each horsename from horsesales table 
    // static public function ctrShowHorsesSales()
    // {

    //     //request model to give the list of horses from database 
    //     $table = "horsesales";
    //     $request = ClientModel::mdlShowBetsOnHorses($table);

    //     return $request;
    // }

    // static public function ctrShowClientBettingInfo()
    // {

    //     if (isset($_POST["NewClientNameTxtBox"])) {

    //         var_dump("isset working");

    //         $column = "clientname";

    //         $value = $_POST["NewClientNameTxtBox"];

    //         var_dump("Client Name from AJAX", $value);

    //         $request = ClientModel::mdlShowClientBettingInfo($column, $value);

    //         return $request;
    //     } else {

    //         echo "isset not working";
    //     }
    // }

    // // static public function ctrShowClientInfo($item, $value){

    // // 	$table = "horsesales";

    // // 	$request = ClientModel::mdlShowClientInfo($table,$item,$value);

    // // 	return $request;

    // // }   


}
