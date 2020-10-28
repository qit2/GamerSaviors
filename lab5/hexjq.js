//This file mainly focuses on jQuery/JavaScript
(function ( $ ) {
 
  $.fn.hexed = function( settings ) {
    //Super Global Variable
    var info = ["",0];
    //All Helper Functions

    function dectohex(num) {
      return num.toString(16).toUpperCase();
    }

    function hextodec(num) {
      return parseInt(num, 16);
    }

    function genandloadcolors(){
      //Initialization
      var output = [0,0,0,"rgb"];
      var comma = ",";
      var leftpar = "(";
      var rightpar = ")";
      output[0] = Math.floor(Math.random()*256);
      output[1] = Math.floor(Math.random()*256);
      output[2] = Math.floor(Math.random()*256);
      //Generate Color String
      output[3] += leftpar + output[0] + comma + output[1] + comma + output[2] + rightpar;
      //Return the rgb string array with numbers
      return output;
    }

    function dothescore(guessarr, actualarr, milliremain){
      var resultarr = [0,0,0];
      for(var k = 0; k < 3; k++){
        var temp = (Math.abs(actualarr[k] - hextodec(guessarr[k])) / 255) * 100;
        resultarr[k] = temp.toFixed(0);
      }
      $("#rgbpercentoff").text("Red: "+resultarr[0]+" % off     Green: "+resultarr[1]+" % off     Blue: "+resultarr[2]+" % off");
      resultscore = (300 - (parseInt(resultarr[0],10) + parseInt(resultarr[1],10) + parseInt(resultarr[2],10))) * ((20000 - milliremain) < 0 ? 0 : (20000 - milliremain)).toFixed(0);
      return resultscore;
    }

    function encryptedentry() {
      var playername = prompt("Please enter your name:", "");
      var rulenum = 3;
      if (playername == null || playername == "") {
        return encryptedentry();
      } 
      else {
        var turns = prompt("Please enter number of turns (1~5):", "3");
        if(parseInt(turns) < 1){
          rulenum = 1;
        }
        else if(parseInt(turns) > 5){
          rulenum = 5;
        }
        else if(parseInt(turns) >= 1 && parseInt(turns) <= 5){
          rulenum = parseInt(turns);
        }
        else if(turns == ""){}//Default # of turns = 3
        else{
          return encryptedentry();
        }
        info[0] = playername;
        info[1] = rulenum;
        alert("Information Recorded :P");
      } 
    }

    function stopgame(n, count){

        count = 100;
        myAudio.pause();
        $("h1").text("Hexed!");
        //Resetting buttons
        $("#get").css('display', 'block');
        $("#changeSettings").css('display', 'block');
        $("#guess").css('display', 'none');
        $("#colour").css('display', 'block');
        //Resetting colorboard
        $("#color").css('background', 'linear-gradient(45deg,#e66465, #9198e5)');
        //Resetting percentage off
        $("#rgbpercentoff").text("You've not made any guesses yet :(");
        $("#score").text("Final Score: ");
        
        //Resetting score calculation data
        colorgot = [0,0,0];
        colorguess = [0,0,0];
        resultarr = [0,0,0];
        //Resetting Turn Recorder
        n = info[1];
        //Resetting other settings
        $("#dispcheck").text("Game Mode: Normal");
        $("#sett").css('display', 'block');
        time = Date.now();

        //Resetting the sliders 
        $("#slider-horR").slider("value", 0);
        $("#slider-horG").slider("value", 0);
        $("#slider-horB").slider("value", 0);
        $( "#amountR" ).val( $( "#slider-horR" ).slider( "value" ) );
        $( "#amountG" ).val( $( "#slider-horR" ).slider( "value" ) );
        $( "#amountB" ).val( $( "#slider-horR" ).slider( "value" ) );
    }

//"Encrypted" Entry (have to fill in the prompt properly before playing)
    $(document).ready(function () {
      encryptedentry();
    });
    


//Gameplay Function Compilation
    $( function() {
      var colorgot = [0,0,0];
      var colorguess = [0,0,0];
      var myAudio;
      var countup = 0.0;
      var EasyMode = false;
      var time = Date.now();
      var timer, guessTime, guess;
      var resultscore = 0;
      var bestScore = 0;
      var numturns = info[1];
      //Settings before game begins
      $("#dispname").text("Player Name: "+info[0]);
      $("#dispnum").text("Number of turns: "+info[1]);
      $("#dispcheck").text("Game Mode: Normal");

      $("#EasyMode").click(function(){
        if($('#EasyMode').is(":checked")){
          $("#dispcheck").text("Game Mode: Easy");
        }
        else{
          $("#dispcheck").text("Game Mode: Normal");
        }
      });
      //Start a new Game
      $("#get").click(function(){
        //Sound
        EasyMode = $('#EasyMode').is(":checked");

        if(!EasyMode){//Normal mode music
          myAudio = new Audio("Jeopardy-theme-song.mp3");
          myAudio.addEventListener('ended', function() {
            this.currentTime = 0;
            this.play();
          }, false);
          myAudio.play();
        }
        else{//Easy mode music
          myAudio = new Audio("Diversion-Henry-Stickmin.mp3");
          myAudio.addEventListener('ended', function() {
            this.currentTime = 0;
            this.play();
          }, false);
          myAudio.play();
        }
        //TIMER
        countup = 0.0;
        if(!EasyMode){//Normal gameplay
          timer = setInterval(function(){
           
            $("h1").text("Time Left: " + (20.0-countup).toFixed(1)); countup+=.1;
          
            if(countup >= 20.05){
              $("h1").text("Times Up!");
              clearInterval(timer);
              myAudio.pause();
              $("#get").css('display', 'block');
              $("#guess").css('display', 'none');
              $("#sett").css('display', 'block');
            };
            guessTime = Date.now(); 
            guess= guessTime - time;
          }, 100);
        }
        else{//Easy mode gameplay
          timer = setInterval(function(){
           
            $("h1").text("Time Left: " + (45.0-countup).toFixed(1)); countup+=.1;
          
            if(countup >= 45.05){
              $("h1").text("Times Up!");
              clearInterval(timer);
              myAudio.pause();
              $("#get").css('display', 'block');
              $("#guess").css('display', 'none');
              $("#sett").css('display', 'block');
            };
            guessTime = Date.now(); 
            guess= ((guessTime - time)*4/9).toFixed(1);
          }, 100);
        }

        time = Date.now()

        $("#get").css('display', 'none');
        $("#sett").css('display', 'none');
        $("#guess").css('display', 'block');
        var colorstr = genandloadcolors()[3];
        for (var i = 0; i < 3; i++){
          colorgot[i] = genandloadcolors()[i];
        }
        $("#colour").css('display', 'none');
        $("#color").css('background', colorstr);

      });

      //Reset to default grid and clear data if theres any
      $("#reset").click(function(){

        /*Implementation Alert:
          ALL game data will be CLEARED and the page will literally RELOAD, but
          if RESET button is pressed, there will be a prompt for confirm though.
          Also all the code after this implementation here will become useless.*/

        var confirm = prompt("Are you sure you want to RESET the entire game('Y' to confirm, anything else to cancel)?\n(Pro Tip: If you confirm, data will be gone for a loooooong time!)");
          if(confirm == "Y"){
            location.reload();
          }
          else{}

      });

      //Make the guess and output the result accordingly
      $("#guess").click(function(){
        
        //Sound
        var snd = new Audio("super-jump.mp3");
        
        if (numturns == 0){
          //Terminating current run
          snd = null;
          myAudio.pause();
          countup = 100;
          
        
        //Resetting buttons
        $("#get").css('display', 'block');
        $("#changeSettings").css('display', 'block');
        $("#guess").css('display', 'none');
        $("#colour").css('display', 'block');
        //Resetting colorboard
        $("#color").css('background', 'linear-gradient(45deg,#e66465, #9198e5)');
        //Resetting percentage off
        $("#rgbpercentoff").text("You've not made any guesses yet :(");
        $("#score").text("Final Score: ");
        
        //Resetting score calculation data
        colorgot = [0,0,0];
        colorguess = [0,0,0];
        resultarr = [0,0,0];
        //Resetting Turn Recorder
        n = info[1];
        //Resetting other settings
        $("#dispcheck").text("Game Mode: Normal");
        $("#sett").css('display', 'block');
        time = Date.now();

        //Resetting the sliders 
        $("#slider-horR").slider("value", 0);
        $("#slider-horG").slider("value", 0);
        $("#slider-horB").slider("value", 0);
        $( "#amountR" ).val( $( "#slider-horR" ).slider( "value" ) );
        $( "#amountG" ).val( $( "#slider-horR" ).slider( "value" ) );
        $( "#amountB" ).val( $( "#slider-horR" ).slider( "value" ) );

        //Restore turn values
        numturns = info[1];
        $("#dispnum").text("Number of turns: "+info[1]);
        }
        if (numturns == info[1]){
          $("#guess").html("Guess");
        }

        //Actual Gameplay starts here
        snd.play();
        numturns--;
        if (numturns == 0){$("#guess").html("Out of Guesses");}
        
        $("#dispnum").text("Number of turns: "+numturns);
        //Percent Off
        if($("#colour").css('display') == "block"){}
        else{
          colorguess[0] = $("#amountR").val();
          colorguess[1] = $("#amountG").val();
          colorguess[2] = $("#amountB").val();
          resultscore = dothescore(colorguess, colorgot, guess);
          
          if (resultscore > bestScore) {
            bestScore = resultscore;
            $("#best").text("Best Score: " + bestScore);
          }
          
          $("#score").text("Final Score: " + resultscore);
        }
      });
      $("#changeSettings").click(function(){
        $("#dispname").text("Player Name: "+$("#playerName").val());
        $("#dispnum").text("Number of turns: "+$("#numturns").val());
      });
    });

    function is_hexadecimal(x){
      hex = /^[0-9a-fA-F]{1,2}$/;
      if (hex.test(x)){
        return true;
      }
      else{
        return false;
      }
    }

    $( function(){

    });

    //This function contains the three colored sliders for the game
    $( function() {
      
      //This is the red slider
      $( "#slider-horR" ).slider({
        orientation: "horizontal",
        range: "min",
        min: 0,
        max: 255,
        value: 0,
        slide: function( event, ui ) {
          $( "#amountR" ).val( dectohex(ui.value) );
        }
      });
      $('#amountR').change(function(){
        var value = this.value;
        console.log(value);
        if (value > 255 || value < 0 || !is_hexadecimal(value)) {
          $("#amountR").css("background-color", "rgba(255, 0, 0, .5)");
        }
        else{
          $("#slider-horR").slider("value", parseInt(hextodec(value)));
          $("#amountR").css("background-color", "white");
        }
      });

      $( "#slider-horR" ).css('background', 'rgb(255,204,203)');
      $( "#slider-horR .ui-slider-range" ).css('background', 'rgb(255,0,0)');
      $( "#amountR" ).val( $( "#slider-horR" ).slider( "value" ) );


      //This is the green slider
      $( "#slider-horG" ).slider({
        orientation: "horizontal",
        range: "min",
        min: 0,
        max: 255,
        value: 0,
        slide: function( event, ui ) {
          $( "#amountG" ).val( dectohex(ui.value) );
        }
      });
      

      $('#amountG').change(function(){
        var value = this.value;
        console.log(value);
        if (value > 255 || value < 0 || !is_hexadecimal(value)) {
          $("#amountG").css("background-color", "rgba(255, 0, 0, .3)");
        }
        else{
          $("#slider-horG").slider("value", parseInt(hextodec(value)));
          $("#amountG").css("background-color", "white");
        }
      });


      $( "#slider-horG" ).css('background', 'rgb(144,238,144)');
      $( "#slider-horG .ui-slider-range" ).css('background', 'rgb(11,140,35)');
      $( "#amountG" ).val( $( "#slider-horG" ).slider( "value" ) );


      //This is the blue slider
      $( "#slider-horB" ).slider({
        orientation: "horizontal",
        range: "min",
        min: 0,
        max: 255,
        value: 0,
        slide: function( event, ui ) {
          $( "#amountB" ).val( dectohex(ui.value) );
        }
      });

      $('#amountB').change(function(){
        var value = this.value;
        console.log(value);
        if (value > 255 || value < 0 || !is_hexadecimal(value)) {
          $("#amountB").css("background-color", "rgba(255, 0, 0, .5)");
        }
        else{
          $("#slider-horB").slider("value", parseInt(hextodec(value)));
          $("#amountB").css("background-color", "white");
        }

      });

      $( "#amountB" ).val( $( "#slider-horB" ).slider( "value" ) );
      $( "#slider-horB" ).css('background', '#03a9f4');
      $( "#slider-horB .ui-slider-range" ).css('background', 'rgb(0,32,255)');
    } );

    



  };

  return this;

}( jQuery ));

var settings = { name: "John", turns: 3 };
$("#game").hexed(settings);
