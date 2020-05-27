






function addIcons([x]) {

for (let i= 0; i < x.length; i++) {

  spawnImage(x[i]);
  console.log('Yo');
  }
}

 
function spawnImage(name) {




  var x = document.createElement("IMG");

  x.setAttribute("src", ("softwares/" + name + ".png"));


  x.setAttribute("alt", "The Pulpit Rock");

 

  
  document.getElementById("placehere").appendChild(x);

}




/*Burger Menu*/
$('#burger-menu').mousedown(function(e){

    $('.sidenav').toggleClass('burger-active');
    $('.sidebar').toggleClass('burger-active');

});






// Move image by mouse pos
$(window).mousemove(function(e){
  var change;
  var xpos = e.clientX;
  var ypos = e.clientY;

  var left = change*20; // Needed?
  var xpos = xpos*2;
  var ypos = ypos*2;

 
  //console.log(ypos);
  /*
  // Change ouput based on mouse pos
  $("#demo-box").css('background-position-y', ((0 + (ypos/100))+"%"));
  $("#demo-box").css('background-position-x', ((0 + (xpos/100))+"%"));
*/
 /* $("#demo-box2").css('size', ((2 + (ypos/100))+"%"));
  $("#demo-box2").css('size', ((2 + (xpos/100))+"%"));*/
});






// MOBILE GYRO
	
if(window.DeviceOrientationEvent) { 

 
 
}
else {

//  alert('Device Orientation NOT Supported');
}




/*Gyro*/ 
window.addEventListener('deviceorientation', function(event) {
 
  var alpha = event.alpha;
  var beta = event.beta;
  var gamma = event.gamma;

  {
    
   /* $("#demo-box").css('top', ((5*(gamma/18))+"px"));
    $("#demo-box").css('left', ((5*(alpha/18))+"px"));*/
  
  }
  
}, false);



