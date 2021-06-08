<div class="content-wrapper">

    <section class="content-header">

        <h1>Betting Info For Race 8</h1>

    </section>

    <section class="content">

        <div class="row">

            <!--=========================================== BOOKMAKER BETTING FORM SECTION  =============================================-->
            <div class="col-lg-5 col-xs-12">

                <div class="box box-success">

                    <div class="box-header with-border"></div>

                    <form role="form" method="post" class="BookMakerBettingForm">

                        <div class="box-body">

                            <div class="box box-danger">
                                <br>

                                <div class="form-group row">
                                    <div class="col-xs-6" style="padding-right:0px">
                                        <p>Race 8</p>
                                        <div class="input-group">
                                            <input type="text" class="form-control" value='8' id="Race1TxtBoxID" name="NewRace1TxtBox" readonly>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-users"></i></span>
                                        <select class="form-control" id="newHorseTextBox" name="newHorseTextBox" required>
                                            <!-- // VIEW DATA ON ajaxData.php -->
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-users"></i></span>
                                        <select class="form-control" id="SelectedBookmaker" name="SelectedBookmaker" required>
                                            <option value="">Select Bookmaker Name</option>
                                            <option value="Bosco">Bosco</option>
                                            <option value="Shogun">Shogun</option>
                                        </select>
                                    </div>
                                </div>

                                <!--======================= BOOKMAKER BETTING FORM: HORSE NAMES, AMOUNT BETS AND PAYOUTS  ==================================-->
                                <div class="row">
                                    <div class="col-xs-12">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Amount Bet</th>
                                                    <th>Horse Price</th>
                                                    <th>Payout</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td style="width:50%">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" id="AmountBetID" name="AmountBetTxt" required>
                                                        </div>
                                                    </td>
                                                    <td style="width: 90px;">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" id="HorsePriceID" name="HorsePriceTxt" required>
                                                        </div>
                                                    </td>
                                                    <td style="width: 90px;">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" id="PayoutID" name="PayoutTxt" readonly required>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <br>
                                <!-- SAVE BETTING BUTTON -->
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary pull-right">Save Betting</button>
                                </div>

                            </div>

                            <?php $CreateBookmakerBettings = new HorseController(); $CreateBookmakerBettings->ctrCreateBookmakerBettingsByRace() ?>

                            <!-- ============================= SHOW BOOKMAKER BETTINGS ON TABLE FOR RACE 2===============================  -->

                            <div class="box box-danger">
                                <h3 class="box-title">Bookmaker's Bettings</h3>
                                <br>
                               
                                <div class="row">
                                    <div class="col-xs-12">
                                        <table class="table table-bordered table-striped dt-responsive tables">
                                            <thead>
                                                <tr>
                                                    <th>Bookmaker Name</th>
                                                    <th>Horse Name</th>
                                                    <th>Amount Bet</th>
                                                    <th>Price</th>
                                                    <th>Payout</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php

                                                    $RaceNumValue = 8;

                                                    $showhorsesbets = HorseController::ctrShowBookmakerBettingsByRaceNumber($RaceNumValue);

                                                    foreach ($showhorsesbets as $value) {
                                                        echo '
                                                            <tr>
                                                            <td>' . $value["BookmakerName"] . '</td>
                                                            <td>' . $value["HorseName"] . '</td>
                                                            <td>' . $value["AmountBet"] . '</td>
                                                            <td>' . $value["HorsePrice"] . '</td>
                                                            <td>' . $value["Payout"] . '</td>       
                                                            </tr>';
                                                    }

                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <br>
                            </div>

                        </div>
                
                </div>
            </div>



<!-- ==================================================================================================================================================== -->
<!--                                2ND BOX - WARNING: HORSES HEAVY BETTINGS TABLE                              -->
<!-- ==================================================================================================================================================== -->

            <div class="col-lg-7 hidden-md hidden-sm hidden-xs">
                <div class="box box-warning"></div>
                <div class="box-header with-border"></div>
                <div class="box-body">
                    <table class="table table-bordered table-striped dt-responsive tables" id="horsetableRace1">
                        <thead>
                            <tr>
                                <th>Horses</th>
                                <th>Total Bettings</th>
                                <th>Total Payouts</th>
                                <th>Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                
                                $TotalAmtBet = HorseController::ctrShowTotalAmoutBetRace8();

                                foreach ($TotalAmtBet as $key => $value) {

                                echo '
                                    <tr>
                                
                                        <td>
                                
                                            <div class="input-group">
                                
                                                <input class="form-control NewHorseName" type="text" value="' . $value["horsename"] . '" readonly>
                                
                                            </div>
                                
                                        </td>
                                    
                                        <td>
                                
                                            <div class="input-group">
                                
                                                <input class="form-control NewAmountBetTotal" type="text" value="' . $value["SUM(amountbet)"] . '" readonly>
                                
                                            </div>
                                
                                        </td>
                                
                                        <td>
                                
                                            <div class="input-group">
                                
                                                <input class="form-control NewTotalPayout" type="text" value="' . $value["SUM(payout)"] . '" readonly>
                                
                                            </div>
                                
                                        </td>
                                
                                        <td>
                                
                                            <div class="btn-group">
                                
                                            <button class="btn btn-warning btnSaveHorses" data-toggle="modal" data-target="#modalSaveHorses" HorseNameAttr="' . $value["horsename"] . '" HorseAmountBetAttr="' . $value["SUM(amountbet)"] . '" HorsePayoutAttr="' . $value["SUM(payout)"] . '">Save</button>
                                
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

        </form>

    </section>
</div>