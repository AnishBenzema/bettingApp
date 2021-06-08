<div class="content-wrapper">

   <section class="content-header">
      <h1>Horse Sales</h1>
   </section>

   <section class="content">

      <div class="box">

        <div class="box-header with-border">
            <!-- <button class="btn btn-primary" data-toggle="modal" data-target="#modalAddClient">Add a Client</button> -->
        </div>

        <div class="box-body">
            <table class="table table-bordered table-striped dt-responsive tables" width="100%">

               <thead>
                  <tr>
                     <th style="width:10px">#</th>
                     <th>Client Name</th>
                     <th>Race Number</th>
                     <th>Horse Name</th>
                     <th>Amount Bet</th>
                     <th>Horse Price</th>
                     <th>Possible Payout</th>
                  </tr>
               </thead>

               <tbody>
                  <?php
                     $showhorsesbets = HorseController::ctrShowHorsesBettings();
                     foreach ($showhorsesbets as $key => $value) {
                       echo '
                         <tr>
                     
                           <td>'.($key+1).'</td>
                           <td>'.$value["clientname"].'</td>
                           <td>'.$value["raceNumber"].'</td>
                           <td>'.$value["horseName"].'</td>
                           <td>'.$value["amountbet"].'</td>
                           <td>'.$value["price"].'</td>
                           <td>'.$value["payout"].'</td>
                     
                         </tr>';
                         
                     }
                     
                     ?>
               </tbody>

            </table>

        </div>

      </div>

   </section>

</div>

