






function addIcons([x], id) {

for (let i= 0; i < x.length; i++) {

  spawnImage(x[i],id);
  console.log('Yo');
  }
}

 
function spawnImage(name,id) {




  var x = document.createElement("IMG");

  x.setAttribute("src", ("softwares/" + name + ".png"));


  x.setAttribute("alt", name);

 

  
  document.getElementById(id).appendChild(x);

}




/*Burger Menu*/
$('#burger-menu').mousedown(function(e){

    $('.sidenav').toggleClass('burger-active');
    $('.sidebar').toggleClass('burger-active');

});


