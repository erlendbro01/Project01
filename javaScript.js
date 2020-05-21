
// Move image by mouse pos
$(window).mousemove(function(e){
  var change;
  var xpos = e.clientX;
  var ypos = e.clientY;

  var left = change*20; // Needed?
  var xpos = xpos*2;
  var ypos = ypos*2;

  //console.log(xpos);
  //console.log(ypos);
  
  // Change ouput based on mouse pos
  $("#demo-box").css('top', ((0+(ypos/100))+"px"));
  $("#demo-box").css('left', ((0+(xpos/100))+"px"));
});






// MOBILE GYRO
//Check for API browser support
if (window.DeviceOrientationEvent) { console.log("Device Orientation Events API Supported") } else { console.log("Device Orientation Events API Not Supported") }
if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
  console.log("Device Is Mobile");
  //Acess orientation data
  window.addEventListener('deviceorientation', function (event) {
    var alpha = event.alpha;
    var beta = event.beta;
    var gamma = event.gamma;

    console.log(event.alpha);
    console.log(event);
    deviceOrientation(event);

  }, false);

}


function deviceOrientation(event) {
  
  /*alert('gyro ' + event);*/
  window.removeEventListener('deviceorientation', deviceOrientation);
}
window.addEventListener('deviceorientation', deviceOrientation);
























function printTest () {

  alert('printTest');
 
}










function tryMe([x]) {
  document.write(x);




  for (let index = 0; index < x.length; index++) {

    test(x[index]);

  }
}

function test(name) {




  var x = document.createElement("IMG");

  x.setAttribute("src", ("softwares/" + name + ".png"));


  x.setAttribute("alt", "The Pulpit Rock");

  document.body.appendChild(x);


}





