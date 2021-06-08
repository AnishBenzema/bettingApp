<div class="content-wrapper">

  <section class="content">

    <!-- <form role="form" method="post"> -->

        <div class="col-lg-7 hidden-md hidden-sm hidden-xs">

          <div class="box box-warning">

            <table class="table table-bordered table-striped dt-responsive tables"  width="100%">
          
              <thead>

              <tr>
                <th>Horses Name</th>  
                <th>Total Bettings</th>
                <th>Total Payout</th>
                <th>Actions</th>
              </tr> 

              </thead>

              <tbody>

                <?php

                  // total amount bet and Total Payout for all horsenames 
                    $TotalAmtBet = HorseController::ctrShowTotalAmoutBet();
                    //var_dump($TotalAmtBet);

                  foreach ($TotalAmtBet as $key => $value) {

                    echo'
                        <tr>

                          <td>

                              <div class="input-group">

                                  <input class="form-control NewHorseName" type="text" value="'.$value["horsename"].'" readonly>
          
                              </div>

                          </td>
                        
                          <td>

                              <div class="input-group">

                                  <input class="form-control NewAmountBetTotal" type="text" value="'.$value["SUM(amountbet)"].'" readonly>
          
                              </div>

                          </td>

                          <td>

                              <div class="input-group">

                                  <input class="form-control NewTotalPayout" type="text" value="'.$value["SUM(payout)"].'" readonly>

                              </div>

                          </td>

                          <td>

                              <div class="btn-group">

                                <button class="btn btn-warning btnSaveHorses" data-toggle="modal" data-target="#modalSaveHorses" HorseNameAttr="'.$value["horsename"].'" HorseAmountBetAttr="'.$value["SUM(amountbet)"].'" HorsePayoutAttr="'.$value["SUM(payout)"].'">Save</button>

                              </div>

                          </td>

                      </tr>';
                  }
        

                ?>

              </tbody>

            </table>

          </div>

      </div>

    <!-- </form> -->

  </section>

</div>


<!--===========================================
  MODULE TO Save Horses' Name and AmountBet     
============================================ -->
<!-- 
<div id="modalSaveHorses" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

    <form role="form" method="POST">


        <div class="modal-header" style="background:#dc3545; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Save Horses</h4>

          </div>

 
          <div class="modal-body">

            <div class="box-body">

          
                <div class="form-group">

                  <div class="input-group">

                    <span class="input-group-addon"><i class="fa fa-user"></i></span>

                    <input class="form-control" type="text" name="newHorseName" id="newHorseName" required> 

                    <input type="hidden" name="horsename" id="horsename">

                  </div>

                </div>

         
                <div class="form-group">

                  <div class="input-group">

                    <span class="input-group-addon"><i class="fa fa-key"></i></span>

                    <input class="form-control" type="number" name="newTotalBettings" id="newTotalBettings" required>

                  </div>

                </div>


            </div>

          </div>

     
          <div class="modal-footer">

            <button type="submit" class="btn btn-primary">Save Changes</button>

          </div>

     </form>

    </div>

  </div>

</div> -->

<?php

    $SaveHorse = new HorseController();
    $SaveHorse -> ctrSaveHorse(); 

?>