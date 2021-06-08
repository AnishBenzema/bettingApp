<div class="content-wrapper">
   <section class="content-header">
      <h1>Winning Horses Entries</h1>
   </section>
   <section class="content">
      <div class="col-lg-5 col-xs-12">
         <div class="box box-success">
            <form role="form" method="POST" class="CreateForm">
               <div class="box-body">
                  
                  <div class="input-group">
                     <span class="input-group-addon">Race 1</span>
                     <input type="text" class="form-control input-sm" name="WiningHorseName1" placeholder="Enter Winning Horse Name">
                     
                  </div>
                  <br> 
                  <div class="input-group">
                     <span class="input-group-addon">Race 2</span>
                     <input type="text" class="form-control input-sm" name="WiningHorseName2" placeholder="Enter Winning Horse Name">
                    
                  </div>
                  <br>
                  <div class="input-group">
                     <span class="input-group-addon">Race 3</span>
                     <input type="text" class="form-control input-sm" name="WiningHorseName3" placeholder="Enter Winning Horse Name">
                    
                  </div>
                  <br>

                  <div class="input-group">
                     <span class="input-group-addon">Race 4</span>
                     <input type="text" class="form-control input-sm" name="WiningHorseName4" placeholder="Enter Winning Horse Name">
                    
                  </div>

                  <br>
                  <div class="input-group">
                     <span class="input-group-addon">Race 5</span>
                     <input type="text" class="form-control input-sm" name="WiningHorseName5" placeholder="Enter Winning Horse Name">
                  
                  </div>

                  <br>
                  <div class="input-group">
                     <span class="input-group-addon">Race 6</span>
                     <input type="text" class="form-control input-sm" name="WiningHorseName6" placeholder="Enter Winning Horse Name">
                   
                  </div>

                  <br>
                  <div class="input-group">
                     <span class="input-group-addon">Race 7</span>
                     <input type="text" class="form-control input-sm" name="WiningHorseName7" placeholder="Enter Winning Horse Name">
     
                  </div>

                  <br>
                  <div class="input-group">
                     <span class="input-group-addon">Race 8</span>
                     <input type="text" class="form-control input-sm" name="WiningHorseName8" placeholder="Enter Winning Horse Name">
                    
                  </div>

                  <br>
                  <div class="input-group">
                     <span class="input-group-addon">Race 9</span>
                     <input type="text" class="form-control input-sm" name="WiningHorseName9" placeholder="Enter Winning Horse Name">
                  
                  </div>

                  <br>
                  <div class="input-group">
                     <span class="input-group-addon">Race 10</span>
                     <input type="text" class="form-control input-sm" name="WiningHorseName10" placeholder="Enter Winning Horse Name">
                 
                  </div>
                  <br>

                  <button type="submit" class="btn btn-primary">Save Winning Horses</button>
                  
               </div>
            </form>

            <?php $InsertWinningHorses = new HorseController(); $InsertWinningHorses -> ctrInsertWinningHorses(); ?>

         </div>
      </div>
   </section>
</div>