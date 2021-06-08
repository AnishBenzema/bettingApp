// $(document).on("click","button.Race1Btn", function(){

//     //console.log("testBtn");

//     // capture its value and then insert it in a defined html attribute 
//     var racenum = $(".Race1Btn").val();
//     console.log("Race Num", racenum);

//     //var racenumber = $(".Race1Btn").attr("racenumb"); 


//     // console.log("Race Num", racenumber);



// });

// CAPTURE VALUE AND INSERT IN INTO A DEFINED HTML ATTRIBUTED WHICH CAN BE USED BY PHP USING ISSET
// $(document).on("click", ".RaceBtn", function(){

//     // create a variable to store the value of this attribute in RaceNumber from html
//     var racenumberr = $(this).attr("RaceNumber");

//     $("#newRaceNum").val(racenumberr);  // i have bring the race number from html tag to another html textbox named newRaceNum with id newRaceNum


// });




// $(".horsetableRace tbody").on("change","input.NewHorseName", function(){

//     //console.log("Race Number Value:", $(this).val()); 

//     // capture amount bet from textbox, comes with many vales 
//     var HorseNames = $(".NewHorseName").val();

//     // console this in a loop 

//     for (var i=0; i<5; i++){ 

//         console.log("Horse Names: ", HorseNames[i]); 

//     }

//     //console.log("Horse Names: ", HorseNames[1]); 

//     $(".newHorseNames").val(HorseNames[1]); // this action put into textbox 

// });




// // $(document).on("click", ".RaceBtn", function(){
// $(document).ready(function () {

//     var racenumberr = $(this).attr("RaceNumber");

//     //$("#newRaceNum").val(racenumberr);  // i have bring the race number from html tag to another html textbox named newRaceNum with id newRaceNum

//     var data = new FormData();

//     data.append("RaceNumber", racenumberr);

//     $.ajax({

//         url: "ajax/horses.ajax.php",
//         method: "POST",
//         data: data,
//         cache: false,
//         contentType: false,
//         processData: false,
//         dataType: "json",
//         success: function (response) {

//             console.log("Horse Information Displayed In Array", response);

//             $("#newHorseName").val(response["horsename"]);

//             var len = response.length;
//             for (var i = 0; i < len; i++) {

//                 var horsename = response[i].horsename;
//                 var totalbetting = response[i]['SUM(amountbet)'];
//                 var totalpayout = response[i]['SUM(payout)'];

//                 console.log("Horse Names", horsename);
//                 console.log("Horse Payouts", totalbetting);

//                 //$('#horsetableRace1 tbody').append('<tr><td>'+horsename+'</td><td>'+totalbetting+'</td><td>'+totalpayout+'</td></tr>');

//                 $('.horsetableRace1 tbody').append(

//                     '<tr>' +

//                     '<td>' +

//                     '<div class="input-group">' +

//                     '<input class="form-control NewHorseName" type="text" name="NewHorseName" value="' + horsename + '" readonly>' +

//                     '</div>' +

//                     '</td>' +

//                     '<td>' +

//                     '<div class="input-group">' +

//                     '<input class="form-control" type="text" name="NewTotalBetting" value="' + totalbetting + '" readonly>' +

//                     '</div>' +

//                     '</td>' +

//                     '<td>' +

//                     '<div class="input-group">' +

//                     '<input class="form-control" type="text" name="NewTotalPayout" value="' + totalpayout + '" readonly>' +

//                     '</div>' +

//                     '</td>' +

//                     '<td>' +

//                     '<div class="btn-group">' +

//                     '<button class="btn btn-warning btnSaveDatai1">Save Data</button>' +

//                     '</div>' +

//                     '</td>' +

//                     '</tr>');

//             }

//         }
//     })

// });


//$(".horsetableRace1 tbody").on("click", ".btnSaveData", function(){
// $(document).on("click", ".btnSaveData", function(){

//     console.log("Test");

//     // capture horsename
//     var horsingname = $(".NewHorseName").val();
//     console.log("horsenamee:",horsingname);


// });



$(".btnSaveHorses").click(function () {

    console.log("Test");

    // capture the value of what the button is returning, capture the attribute 
    var HorseName = $(this).attr("HorseNameAttr");
    var HorseAmountBet = $(this).attr("HorseAmountBetAttr");
    var HorsePayout = $(this).attr("HorsePayoutAttr");

    console.log("Requested Horse Name: ", HorseName);
    console.log("Requested Horse Amount Bet:", HorseAmountBet);
    console.log("Requested Horse Payout", HorsePayout);

    // var capturedval = $("NewHorseNamee").val();
    // console.log(capturedval);

    // after capturing those attributes, send them to php by $_GET Method to save into database 
    swal({
        title: 'Are You Sure to Save this Horse?',
        text: 'If You are not sure you can cancel the action',
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: 'green',
        cancelButtonColor: 'red',
        cancelButtonText: 'Cancel',
        confirmButtonText: 'Save Client!'

    }).then((result) => {

        if (result.value) {

            window.location = "index.php?route=horsebets&HorseNameAttr=" + HorseName + "&HorseAmountBetAttr=" + HorseAmountBet + "&HorsePayoutAttr=" + HorsePayout;
        }
    })

})

// $(".CreateForm").on("change", "input.NewRaceNum", function () {

//     console.log("race number:", $(this).val());  // capture prod quantity val 


//     var racingNum = $(".NewRaceNum").val();

//     console.log("race number:", racingNum);

//     $(".racenum").val(racingNum);

//     // $("#racenum1").val(racingNum);
//     // $("#racenum2").val(racingNum);


// });








