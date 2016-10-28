var txt
var name = 'Julian';
var alter = 99;
var array = [];

function getConfirmation()
{
  var request = confirm("Drücke einen Button!");

  if(request == true)
  {
    txt = "You pressed okey";
  }
  else {
    txt = " You pressed Cancel";
  }
  alert(txt);
  console.log(txt);
  //console.warn(txt);
}
