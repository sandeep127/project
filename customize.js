function change_right()
  {
    var x=document.getElementById("pic").src;
    var y=x.substring(22, 24);
    var z=parseInt(y);
    if(z<32)
    z++;
    else
      z=10;
    document.getElementById("pic").src=z+'.jpg';
  }
    
function make()
  {
    i= Math.floor((Math.random() * 10000) + 1);
    document.getElementById("secure1").value =i;
   }

function confirm()
  {
    var x=document.getElementById("secure").value;
    if (x==i)
    window.alert("correct");
  }

function change_left()
  {
    var x=document.getElementById("pic").src;
    var y=x.substring(22, 24);
    var z=parseInt(y);
    if(z>10)
    z--;
    else
      z=32;
      document.getElementById("pic").src=z+'.jpg';
  }
 