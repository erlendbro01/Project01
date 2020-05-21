

var b = false;

if (!b) {

printTest();
}


function printTest () {

  alert('printTest');
 
}

function test(name) {




  var x = document.createElement("IMG");

  x.setAttribute("src", ("softwares/" + name + ".png"));


  x.setAttribute("alt", "The Pulpit Rock");

  document.body.appendChild(x);


}


function tryMe([x]) {
  document.write(x);




  for (let index = 0; index < x.length; index++) {

    test(x[index]);

  }
}

function imageLoader() {



  for (let index = 0; 2; index++) {

    test('unity');
  }
}



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

    deviceOrientation(event);

  }, false);

}


function deviceOrientation(event) {
  /*alert('gyro ' + event);*/
  window.removeEventListener('deviceorientation', deviceOrientation);
}
window.addEventListener('deviceorientation', deviceOrientation);



