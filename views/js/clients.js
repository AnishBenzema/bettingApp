$(".BetForm").on("click", "button.AddMoreHorses", function () {

    console.log("testw");

    $(".NewProduct").append(

        '<div class="col-xs-12 col-sm-6">' +

        '<div class="input-group">' +

        '<span class="input-group-addon"><i class="fa fa-arrow-up"></i></span>' +

        '<input type="number" class="form-control" id="newBuyingPrice" name="newBuyingPrice" step="any" min="0" placeholder="Buying price" required>' +

        '</div>' +

        '</div>'
    )
});


// $(".BetForm").on("change","input.RaceNum", function(){

//     //console.log("Race Number Value:", $(this).val()); 

//     var racenum = $(".RaceNum").val();

//     console.log("Race Number Value:", racenum); 

//     $(".HorseName").val(racenum); // put race number value into HorseName class & TxtBox

//     var horsename = $(this).parent().children("HorseName")

// });

// Get RaceNumber For 1st Row FROM Create Betting 
$(".BetForm").ready(function () {
    $('#RaceNumber').on('change', function () {

        var racenumber = $(this).val();
        if (racenumber) {

            $.ajax({
                type: 'POST',
                url: 'ajax/ajaxData.php',
                data: 'racenumber=' + racenumber,
                success: function (html) {
                    $('#Horse').html(html);

                }
            });

        } else {
            $('#Horse').html('<option value="">Select country first</option>');
        }

    });

});

// Get RaceNumber For 2nd Row FROM Create Betting 
$(".BetForm").ready(function () {

    $('#RaceNumber2').on('change', function () {

        var racenumber = $(this).val();

        if (racenumber) {

            $.ajax({
                type: 'POST',
                url: 'ajax/ajaxData.php',
                data: 'racenumber=' + racenumber,
                success: function (html) {
                    $('#Horse2').html(html);
                }
            });

        } else {
            $('#Horse2').html('<option value="">Select Race first</option>');
        }

    });

});

// Get RaceNumber For 3rd Row FROM Create Betting 
$(".BetForm").ready(function () {

    $('#RaceNumber3').on('change', function () {
        
        var racenumber = $(this).val();
        if (racenumber) {

            $.ajax({
                type: 'POST',
                url: 'ajax/ajaxData.php',
                data: 'racenumber=' + racenumber,
                success: function (html) {

                    $('#Horse3').html(html);
                }
            });

        } else {
            $('#Horse3').html('<option value="">Select Race first</option>');
        }

    });

});

// Get RaceNumber For 4th Row FROM Create Betting 
$(".BetForm").ready(function () {

    $('#RaceNumber4').on('change', function () {
        
        var racenumber = $(this).val();
        if (racenumber) {

            $.ajax({
                type: 'POST',
                url: 'ajax/ajaxData.php',
                data: 'racenumber=' + racenumber,
                success: function (html) {
                    
                    $('#Horse4').html(html);
                }
            });

        } else {
            $('#Horse4').html('<option value="">Select Race first</option>');
        }

    });

});

$(".BetForm").on("change", "input#amountBet", function () {

    //console.log("Race Number Value:", $(this).val()); 

    // capture amount bet from textbox
    var amountBet = $("#amountBet").val();

    console.log("Amount Bet 1:", amountBet);

    //$(".price").val(amountBet); // this action put into textbox 

});

$(".BetForm").on("change", "input#amountBet2", function () {

    var amountBet = $("#amountBet2").val();
    console.log("Amount Bet 2:", amountBet);

});

$(".BetForm").on("change", "input#amountBet3", function () {

    var amountBet = $("#amountBet3").val();
    console.log("Amount Bet 3:", amountBet);

});

$(".BetForm").on("change", "input#amountBet4", function () {

    var amountBet = $("#amountBet4").val();
    console.log("Amount Bet 4:", amountBet);

});



$(".BetForm").on("change", "input#price", function () {

    var horseprice = $("#price").val();

    console.log("Horse Price 1:", horseprice);

    payoutfunc()

});

$(".BetForm").on("change", "input#price2", function () {

    var horseprice = $("#price2").val();

    console.log("Horse Price 2:", horseprice);

    payoutfunc2()

});

$(".BetForm").on("change", "input#price3", function () {

    var horseprice = $("#price3").val();

    console.log("Horse Price 3:", horseprice);

    payoutfunc3()

});

$(".BetForm").on("change", "input#price4", function () {

    var horseprice = $("#price4").val();

    console.log("Horse Price 4:", horseprice);

    payoutfunc4()

});

function payoutfunc() {

    var amountBet = $("#amountBet").val();

    var horseprice = $("#price").val();

    var payoutotal = Number(amountBet * horseprice / 100);

    $("#Betpayout").val(payoutotal);

}

function payoutfunc2() {

    var amountBet = $("#amountBet2").val();

    var horseprice = $("#price2").val();

    var payoutotal = Number(amountBet * horseprice / 100);

    $("#Betpayout2").val(payoutotal);

}

function payoutfunc3() {

    var amountBet = $("#amountBet3").val();

    var horseprice = $("#price3").val();

    var payoutotal = Number(amountBet * horseprice / 100);

    $("#Betpayout3").val(payoutotal);

}

function payoutfunc4() {

    var amountBet = $("#amountBet4").val();

    var horseprice = $("#price4").val();

    var payoutotal = Number(amountBet * horseprice / 100);

    $("#Betpayout4").val(payoutotal);

}

// ----------------------------- BUTTON TO CREATE A BET -------------------------------------------------------------------
$(document).on("click", ".btnEditClient", function () {

    // create a variable to store the value of this attribute in idClient from html
    var idClient = $(this).attr("idClient");

    var data = new FormData();

    data.append("idClient", idClient);  // send ID to the AJAX for the SQL Query 

    $.ajax({
        url: "ajax/customers.ajax.php",
        method: "POST",
        data: data,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",            // ajax has made the request to fetch data from database and prints it on the console 
        success: function (request) {

            console.log("Request", request);
            // bring the data from db to textbox
            $("#idClient").val(request["id"]); // request id 
            $("#newClientName").val(request["name"]);

        }
    })
});

$(document).on("click", ".btnViewBetInfo", function () {

    var ClientName = $(this).attr("ClientName");

    console.log(ClientName);

    setTimeout(function () {

        $("input[name='NewClientName']").val(ClientName);

    }, 500);


    var data = new FormData();

    data.append("ClientName", ClientName);

    $.ajax({

        url: "ajax/customers.ajax.php",
        method: "POST",
        data: data,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function (request) {

            console.log("answers from horse table", request);

            $('#horseRacetable tbody').empty();
            // send this horse info request to the view of test.php
            var amountbetsum = 0;
            for (i = 0; i < request.length; i++) {

                var count = i + 1;

                $('#horseRacetable tbody').append('<tr><td>' + count + '</td><td>' + request[i].horseName + '</td><td>' + request[i].amountbet + '</td><td>' + request[i].payout + '</td></tr>');

                amountbetsum += parseInt(request[i].amountbet);
            }

            $('#horseRacetable tbody').append('<tr><td></td><td></td><td>Total: ' + amountbetsum + '</td><td></td></tr>');

            $("#NewClientName").val(request["clientname"]);
            $("#NewHorseName").val(request["horseName"]);


        }

    });

});

// VIEW CLIENT'S BET INFO 
$(document).on("click", ".btnViewBetInfo", function () {

    var ClientName = $(this).attr("ClientName");

    console.log(ClientName);

    setTimeout(function () {

        $("input[name='NewClientName']").val(ClientName);

    }, 500);


    var data = new FormData();

    data.append("ClientName", ClientName);

    $.ajax({

        url: "ajax/customers.ajax.php",
        method: "POST",
        data: data,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function (request) {

            console.log("whole Information from horsesales table", request);

            $('#horseRacetable tbody').empty();
            // send this horse info request to the view of test.php
            var amountbetsum = 0;
            for (i = 0; i < request.length; i++) {

                var count = i + 1;

                $('#horseRacetable tbody').append('<tr><td>' + count + '</td><td>' + request[i].horseName + '</td><td>' + request[i].amountbet + '</td><td>' + request[i].payout + '</td></tr>');

                amountbetsum += parseInt(request[i].amountbet);
            }

            $('#horseRacetable tbody').append('<tr><td></td><td></td><td>Total: ' + amountbetsum + '</td><td></td></tr>');

            $("#NewClientName").val(request["clientname"]);
            $("#NewHorseName").val(request["horseName"]);


        }

    });

});



// NEW ONE FOR BOOKMAKER BETTING FORM
$(document).ready(function () {
  
    // var RaceNumber = $(this).attr("RaceNumber");
    var RaceNumber = $("#Race1TxtBoxID").val();
    console.log("Race Number Value:", RaceNumber);
    // if RaceNumber isset 
    if (RaceNumber) 
        {
            $.ajax({
                type: 'POST',
                url: 'ajax/ajaxData.php',
                data: 'racenumber=' + RaceNumber,
                success: function (html) {
                    
                    $('#newHorseTextBox').html(html);
                    // display values from Database in html format by ID 
                }
            });

        } else {
            $('#newHorseTextBox').html('<option value="">Select Race first</option>');
        }
});

// Calculate Betting Payout for bookmaker
$(document).on("change", "input#AmountBetID", function () {

    var amountBet = $("#AmountBetID").val();
    console.log("Amount Bet 4:", amountBet);

});

$(document).on("change", "input#HorsePriceID", function () {

    var horseprice = $("#HorsePriceID").val();

    console.log("Horse Price 4:", horseprice);

    payoutfuncforBookMakerBetting()

});

function payoutfuncforBookMakerBetting() {

    var amountBet = $("#AmountBetID").val();

    var horseprice = $("#HorsePriceID").val();

    var payoutotal = Number(amountBet * horseprice / 100);

    $("#PayoutID").val(payoutotal);

}


