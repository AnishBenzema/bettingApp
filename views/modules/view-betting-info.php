<div class="content-wrapper">

  <section class="content-header">

    <h1>Client Management</h1>

  </section>

  <section class="content">

    <div class="box">

        <div class="box-body">

            <table class="table table-bordered table-striped dt-responsive tables" width="100%">
        
            <thead>
            <tr>
                <th style="width:10px">#</th>
                <th>Client Name</th>  
                <th>Actions</th>
         
            </tr> 
            </thead>

            <tbody>

                <?php

                $item = null;
                $value = null; 

                $showclients = ClientController::ctrShowClients($item, $value);

                foreach ($showclients as $key => $value) {

                echo '

                    <tr>
                        <td>'.($key+1).'</td>
                        <td>'.$value["name"].'</td>

                        <td>

                            <div class="btn-group">

                                <button class="btn btn-danger btnViewBetInfo" data-toggle="modal" data-target="#modalCreateBetting1" ClientName="'.$value["name"].'" >View Bet Info</button>    
                            
                            </div>  

                        </td>
                    
                    </tr>';

                }

                ?>

            </tbody>

            </table>  

        </div>

    </div>
 

  </section>

</div>



<!-- ====================================  VIEW CLIENT BETTING INFO MODAL  =========================================== -->

<div id="modalCreateBetting1" class="modal fade" role="dialog">

  <div class="modal-dialog modal-lg">

    <div class="modal-content">

        <form role="form" method="POST" class="form-horizontal">

            <div class="modal-header" style="background:#dc3545; color:white">

                <button type="button" class="close" data-dismiss="modal">&times;</button>

                <h4 class="modal-title">View Client Betting Information</h4>

            </div>

            <div class="modal-body">

                <div class="box-body"> 

                    <!--CLIENT Name -->
                    <div class="form-group">
                        
                        <input class="form-control" type="text" id="NewClientName" name="NewClientName">

                    </div>
                  

                    <!-- Horse Name -->
                    <!-- <div class="form-group">
                        
                        <input class="form-control" type="text" id="NewHorseName" name="NewHorseName">

                    </div> -->

                    <hr>

                    <table class="table table-bordered table-striped dt-responsive tables" id="horseRacetable" width="100%">
            
                        <thead>

                            <tr>
                                <th style="width:10px">#</th>
                                <th>Horse Name</th>  
                                <th>Amount Bet</th> 
                                <th>Payouts</th>
                            </tr> 

                        </thead>

                        <tbody>

                        </tbody>

                    </table>

                </div>

            </div>


            <div class="modal-footer">

            <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Close</button>
                    <div class="form-group form-row col-md-2">
                        
                        <input class="form-control" type="text" id="NewClientName" name="NewClientName" placeholder= "Payout">

                        <?php //$showclients = ClientController::ctrShowClients($item, $value);?>

                    </div>

                    <div class="col-md-1"><p>-</p></div>
                   
                    <div class="form-group form-row col-md-4">
                        
                        <input class="form-control" type="text" id="NewClientName" name="dummy" placeholder= "Enter Amount Bet">

                    </div>

                    <div class="col-md-1"><p>=</p></div>
                   
                    <div class="form-group form-row col-md-2">
                        
                        <input class="form-control" type="text" id="NewClientName" name="dummy" placeholder= "Enter Amount Bet">

                    </div>
            
            </div>

        </form>

    </div>

  </div>

</div>

<!-- END VIEW CLIENT BET INFO MODAL -->





