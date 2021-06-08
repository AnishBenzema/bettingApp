<div class="content-wrapper">

  <section class="content-header">
     <h1>Create Betting</h1>
  </section>
  <section class="content">
     <!-- BETTING FORM SECTION -->
    <div class="col-xs-12">
        <div class="box box-success">
           <div class="box-header with-border">
              <!-- ADD CLIENT BUTTON -->
              <button class="btn btn-primary" data-toggle="modal" data-target="#modalAddClient">Add a Client</button>
           </div>
           <!-- CLIENT TABLE WITH CREATE BET BUTTON-->
           <div class="box-body">
              <table class="table table-bordered table-striped dt-responsive tables" width="100%">
                 <thead>
                    <tr>
                       <th style="width:10px">#</th>
                       <th>Client Name</th>
                       <th>Actionss</th>
                    </tr>
                 </thead>

                 <tbody>
                    <?php
                       $item = null;
                       $value = null;
                       $showclients = ClientController::ctrShowClients($item, $value);
                       foreach ($showclients as $key => $value) 
                       {
                       
                         echo '
                              <tr>
                                  <td>' . ($key + 1) . '</td>
                                  <td>' . $value["name"] . '</td>
                                  <td>
                                    <div class="btn-group">
                                      <button class="btn btn-warning btnEditClient" data-toggle="modal" data-target="#modalCreateBetting" idClient="' . $value["id"] . '">Create A Bet</button>
                                    </div>  
                                  </td>
                              </tr>';
                       } 
                     ?>
                 </tbody>   
              </table>
           </div>

        </div>

    </div>

</div>
</section>
</div>


<!-- ============================================== MODAL BETTING SLIP FORM ================================================ -->
<div id="modalCreateBetting" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">

        <form role="form" method="POST" class="BetForm">

            <div class="modal-header" style="background:#dc3545; color:white">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Create A Betting</h4>
            </div>

            <!-- BODY FORM  -->
            <div class="modal-body">
            <div class="box-body">
                <div class="form-group form-row">
                    <div class="col-md-2">
                        <div class="input-group">
                        <input type="hidden" name="idClient" id="idClient">
                        <input class="form-control" type="text" name="BettingClientName" id="newClientName" required readonly>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="col-md-2">
                    <div class="input-group">
                        <select class="form-control" id="RaceNumber" name="newRaceNumber">
                        <option value="">Select Race</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                        <select class="form-control" id="Horse" name="newHorseName">
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="input-group">
                        <input class="form-control" id="amountBet" type="text" name="NewamountBet" required>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="input-group">
                        <input class="form-control" type="text" id="price" name="Newprice" required>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="input-group">
                        <input class="form-control" id="Betpayout" type="text" name="Betpayout" readonly>
                    </div>
                </div>
                <hr>
                <br>

            </div>
            <hr>
            <div class="form-group row NewProduct"></div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save Betting</button>
            </div>

        </form>
        <!-- END OF BETTING FORM -->
        <?php
            $createClientBetting = new ClientController();
            $createClientBetting->ctrCreateCustomerBetting();      
        ?>
        </div>
    </div>
</div>
<!-- END OF CREATE BETTING SLIP -->