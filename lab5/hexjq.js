//This file mainly focuses on jQuery
(function ( $ ) {
 
  $.fn.hexed = function( settings ) {

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
      //Return the rgb String array with numbers
      return output;
    }

    function dothecalc(guessarr, actualarr){

      return resultarr;
    }
    
    //Gameplay Function Compilation
    $( function() {
      var counturns = 0;
      var colorgot = [0,0,0];
      var colorguess = [0,0,0];
      var resultarr = [0,0,0];
      //Get a random color and change the background
      $("#get").click(function(){
        var colorstr = genandloadcolors()[3];
        for (var i = 0; i < 3; i++){
          colorgot[i] = genandloadcolors()[i];
        }
        $("#colour").css('display', 'none');
        $("#color").css('background', colorstr);
      });
      //Reset to default grid and clear data if any
      $("#reset").click(function resetting(){
        $("#colour").css('display', 'block');
        $("#color").css('background', 'rgb(255,255,255)');//Default color here
        colorgot = [0,0,0];
        colorguess = [0,0,0];
        resultarr = [0,0,0];
      });
      //Make the guess and output the result accordingly
      $("#guess").click(function(){
        if($("#colour").css('display') == "block"){}
        else{
          alert("The actual color has rgb values: ("+colorgot[0]+", "+colorgot[1]+", "+colorgot[2]+").");
          resultarr = dothecalc(colorgot, colorguess);
        }
        counturns++;
        if(counturns == settings.turns){
          resetting();
        }
      });
    });



    //This function is the three colored sliders for the game
    $( function() {
      
      //This is the red slider
      $( "#slider-horR" ).slider({
        orientation: "horizontal",
        range: "min",
        min: 0,
        max: 255,
        value: 0,
        slide: function( event, ui ) {
          $( "#amountR" ).val( ui.value );
        }
      });
      $('#amountR').change(function(){
        var value = this.value.substring(0);
        console.log(value);
        $("#slider-horR").slider("value", parseInt(value));
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
          $( "#amountG" ).val( ui.value );
        }
      });

      $('#amountG').change(function(){
        var value = this.value.substring(0);
        console.log(value);
        $("#slider-horG").slider("value", parseInt(value));
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
          $( "#amountB" ).val( ui.value );
        }
      });

      $('#amountB').change(function(){
        var value = this.value.substring(0);
        console.log(value);
        $("#slider-horB").slider("value", parseInt(value));
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
