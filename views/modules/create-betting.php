<div class="content-wrapper">

  <section class="content-header">
     <h1>Create Betting</h1>
  </section>
  <section class="content">
     <!-- BETTING FORM SECTION -->
    <div class="col-xs-12">
        <div class="box box-success">

           <div class="box-header with-border"></div>
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
                       <th>Actions</th>
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

<!--------------------------------------------- ADD A CLIENT MODAL ------------------------------------------------------------>
<div id="modalAddClient" class="modal fade" role="dialog">
  <div class="modal-dialog">
     <div class="modal-content">
        <form role="form" method="POST">
           <div class="modal-header" style="background:#dc3545; color:white">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Add Client</h4>
           </div>
           <div class="modal-body">
              <div class="box-body">
                 <!--Input name -->
                 <div class="form-group">
                    <div class="input-group">
                       <span class="input-group-addon"><i class="fa fa-user"></i></span>
                       <input class="form-control" type="text" name="newClientName" placeholder="Enter Client Name" required>
                    </div>
                 </div>
              </div>
           </div>
           <div class="modal-footer">
              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save Client</button>
           </div>
        </form>
        <?php
        
           $createClient = new ClientController();
           $createClient->ctrCreateClient();
           
        ?>
     </div>
  </div>
</div>
<!-- END ADD MODAL -->

<!-- ============================================== MODAL BETTING SLIP ================================================ -->
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
                        <!-- ENTERING OF CUSTOMERS' BETS STARTS FROM HERE  -->
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
                                <select class="form-control" id="Horse" name="newHorseName"></select>
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

                        <!-- 2ND ROW -->
                        <div class="col-md-2">
                            <div class="input-group">
                                <select class="form-control" id="RaceNumber2" name="newRaceNumber2">
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
                                <select class="form-control" id="Horse2" name="newHorseName2"></select>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="input-group">
                                <input class="form-control" id="amountBet2" type="text" name="NewamountBet2" >
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="input-group">
                                <input class="form-control" type="text" id="price2" name="Newprice2" >
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="input-group">
                                <input class="form-control" id="Betpayout2" type="text" name="Betpayout2" readonly>
                            </div>
                        </div>

                        <hr>

                        <!-- 3RD ROW -->
                        <div class="col-md-2">
                            <div class="input-group">
                                <select class="form-control" id="RaceNumber3" name="newRaceNumber3">
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
                                <select class="form-control" id="Horse3" name="newHorseName3"></select>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="input-group">
                                <input class="form-control" id="amountBet3" type="text" name="NewamountBet3" >
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="input-group">
                                <input class="form-control" type="text" id="price3" name="Newprice3" >
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="input-group">
                                <input class="form-control" id="Betpayout3" type="text" name="Betpayout3" readonly>
                            </div>
                        </div>

                        <hr>
                        <br>
                        <!-- 4TH ROW, ADD CODES BELOW -->
                        <div class="col-md-2">
                            <div class="input-group">
                                <select class="form-control" id="RaceNumber4" name="newRaceNumber4">
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
                                <select class="form-control" id="Horse4" name="newHorseName4"></select>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="input-group">
                                <input class="form-control" id="amountBet4" type="text" name="NewamountBet4" >
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="input-group">
                                <input class="form-control" type="text" id="price4" name="Newprice4" >
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="input-group">
                                <input class="form-control" id="Betpayout4" type="text" name="Betpayout4" readonly>
                            </div>
                        </div>

                        <hr>
                        <br>
                        <!-- ADD 5TH ROW BELOW -->


                    </div>

                </div>

                <!-- FOOTER -->
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