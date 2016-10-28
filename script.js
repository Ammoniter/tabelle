var txt
var name = 'Julian';
var alter = 99;
var array = [];

function jQueryTest()
{
  //$('.radio').fadeOut(3000);
  var userdata = $('#myForm').serialize();
  console.log(userdata);
  /*var vorname = $('#vorname').val();
  var nachnamen = $('#nachnamen').val();
  var email = $('#email').val();
  var number = $('#number').val();
  var password = $('#password').val();
    console.log(vorname);
    console.log(nachnamen);
    console.log(email);
    console.log(number);
    console.log(password); */
}

function getConfirmation(parameter)
{
  var request = confirm("Drücke einen Button!");

  if(request == true)
  {
    jQueryTest();
  /*  txt = "You pressed " + parameter;*/
  }
  else {
    /*txt = " You pressed Cancel";*/
  }

}
