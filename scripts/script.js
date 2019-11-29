  $(document).ready(function(){
    $('.materialboxed').materialbox();
    $('.modal').modal();
  });







console.log("Hello, since you came here, be kind enough to leave a comment and a rating");



var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}

$(document).ready(function(){
    $('.sidenav').sidenav();
  });

 $('.dropdown-trigger').dropdown();



 $(document).ready(function(){
    $('.carousel').carousel({fullWidth: true});
  });

 // $('.carousel.carousel-item').carousel({
 //    fullWidth: true
 //  });


