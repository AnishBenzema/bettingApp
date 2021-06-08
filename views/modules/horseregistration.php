<div class="content-wrapper">
   <section class="content-header">
      <h1>Register Horses</h1>
   </section>
   <section class="content">
      <div class="col-lg-5 col-xs-12">
         <div class="box box-success">
            <form role="form" method="POST" class="CreateForm">
               <div class="box-body">
                  <div class="input-group">
                     <span class="input-group-addon input-sm">Race</span>
                     <input type="number" min="1" class="form-control input-sm NewRaceNum" name="NewRaceNumber" placeholder="Enter Race Number">
                  </div>
                  <br> 
                  <div class="input-group">
                     <span class="input-group-addon">1</span>
                     <input type="text" class="form-control input-sm" name="NewHorseName1" placeholder="Enter Horse Name">
                     <input type = "hidden" class="racenum" name="RaceNumTxt1">
                  </div>
                  <br> 
                  <div class="input-group">
                     <span class="input-group-addon">2</span>
                     <input type="text" class="form-control input-sm" name="NewHorseName2" placeholder="Enter Horse Name">
                     <input type = "hidden" class="racenum" name="RaceNumTxt2">
                  </div>
                  <br>
                  <div class="input-group">
                     <span class="input-group-addon">3</span>
                     <input type="text" class="form-control input-sm" name="NewHorseName3" placeholder="Enter Horse Name">
                     <input type = "hidden" class="racenum" name="RaceNumTxt3">
                  </div>
                  <br>

                  <div class="input-group">
                     <span class="input-group-addon">4</span>
                     <input type="text" class="form-control input-sm" name="NewHorseName4" placeholder="Enter Horse Name">
                     <input type = "hidden" class="racenum" name="RaceNumTxt4">
                  </div>

                  <br>
                  <div class="input-group">
                     <span class="input-group-addon">5</span>
                     <input type="text" class="form-control input-sm" name="NewHorseName5" placeholder="Enter Horse Name">
                     <input type = "hidden" class="racenum" name="RaceNumTxt5">
                  </div>

                  <br>
                  <div class="input-group">
                     <span class="input-group-addon">6</span>
                     <input type="text" class="form-control input-sm" name="NewHorseName6" placeholder="Enter Horse Name">
                     <input type = "hidden" class="racenum" name="RaceNumTxt6">
                  </div>

                  <br>
                  <div class="input-group">
                     <span class="input-group-addon">7</span>
                     <input type="text" class="form-control input-sm" name="NewHorseName7" placeholder="Enter Horse Name">
                     <input type = "hidden" class="racenum" name="RaceNumTxt7">
                  </div>

                  <br>
                  <div class="input-group">
                     <span class="input-group-addon">8</span>
                     <input type="text" class="form-control input-sm" name="NewHorseName8" placeholder="Enter Horse Name">
                     <input type = "hidden" class="racenum" name="RaceNumTxt8">
                  </div>

                  <br>
                  <div class="input-group">
                     <span class="input-group-addon">9</span>
                     <input type="text" class="form-control input-sm" name="NewHorseName9" placeholder="Enter Horse Name">
                     <input type = "hidden" class="racenum" name="RaceNumTxt9">
                  </div>

                  <br>
                  <div class="input-group">
                     <span class="input-group-addon">10</span>
                     <input type="text" class="form-control input-sm" name="NewHorseName10" placeholder="Enter Horse Name">
                     <input type = "hidden" class="racenum" name="RaceNumTxt10">
                  </div>
                  <br>

                  <button type="submit" class="btn btn-primary">Save Horses</button>
                  
               </div>
            </form>

            <?php $CreateHorses = new HorseController(); $CreateHorses -> ctrCreateHorses(); ?>

         </div>
      </div>
   </section>
</div>