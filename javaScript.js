








 
function spawnImage(name) {




  var x = document.createElement("IMG");

  x.setAttribute("src", ("softwares/" + name + ".png"));


  x.setAttribute("alt", "The Pulpit Rock");

  document.body.appendChild(x);


}





$('#burger-menu').mousedown(function(e){

  $('.sidenav').toggleClass('burger-active');

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
  
  // Change ouput based on mouse pos
 /* $("#demo-box").css('top', ((0+(ypos/100))+"px"));
  $("#demo-box").css('left', ((0+(xpos/100))+"px"));*/
});






// MOBILE GYRO
	
if(window.DeviceOrientationEvent) { 

 
 
}
else {

  alert('Device Orientation NOT Supported');
}




window.addEventListener('deviceorientation', function(event) {
 
  var alpha = event.alpha;
  var beta = event.beta;
  var gamma = event.gamma;

  {
    
    $("#demo-box").css('top', ((5*(gamma/18))+"px"));
    $("#demo-box").css('left', ((5*(alpha/18))+"px"));
  
  }
  
}, false);



