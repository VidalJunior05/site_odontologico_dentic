$(function() {
    $(".back-to-top").hide();
    
    $(window).scroll(function() {
        if($(this).scrollTop() > 100){
            $(".back-to-top").fadeIn();
        }else{
            $(".back-to-top").fadeOut();
        }
    });
    $(".back-to-top").click(function() {
        $('html, body').animate({
            scrollTop: 0
        }, 1000);
    });
});
$('.depoiments .center').slick({
    autoplay: false,
    autoplaySpeed: 3000,
    centerMode:false,
    slidesToShow:1,
    speed:500,
    dots:true,
    arrows:false,
    infinite:false,
});
var menuBar = document.querySelector('.menu-mobile i');
menuBar.addEventListener('click',(e)=>{
    e.preventDefault();
    let menuMobile = document.querySelector('.menu-mobile ul');
    if(menuMobile.classList.contains('show-menu')){
        menuMobile.classList.remove('show-menu');
        var icone = $('.button-menu-mobile').find('i');
        icone.removeClass('fa-times');
        icone.addClass('fa-bars');
    }else{
        menuMobile.classList.add('show-menu'); 
        var icone = $('.button-menu-mobile').find('i');
        icone.removeClass('fa-bars');
        icone.addClass('fa-times');
    }    
});
var btnTodasCategorias = document.querySelector('.btn-todas-categorias');
btnTodasCategorias.addEventListener("click", function(){
    var div = document.querySelector(".clareamento-dental");
    var div2 = document.querySelector(".ortodontia");
    var div3 = document.querySelector(".implantes");
    if(div.style.display === "none" || div2.style.display === "none" || div3.style.display === "none"){
        div.style.display = "block";
        div2.style.display = "block";
        div3.style.display = "block";
    }else{
        div.style.display = "none";
        div2.style.display = "none";
        div3.style.display = "none";
  } 
});
var btnClareamentoDental = document.querySelector(".btn-clareamento-dental");
btnClareamentoDental.addEventListener("click", function () {
    var div = document.querySelector(".clareamento-dental");
    var div2 = document.querySelector(".ortodontia");
    var div3 = document.querySelector(".implantes");
    if(div.style.display === "none" || div2.style.display === "block" || div3.style.display === "block"){
        div.style.display = "block";
        div2.style.display = "none";
        div3.style.display = "none";
    }else{
        div.style.display = "none";
  } 
});
var btnOrtodontia = document.querySelector(".btn-ortodontia");
btnOrtodontia.addEventListener("click", function () {
    var div = document.querySelector(".clareamento-dental");
    var div2 = document.querySelector(".ortodontia");
    var div3 = document.querySelector(".implantes");
    if(div.style.display === "block" || div2.style.display === "none" || div3.style.display === "block"){
        div2.style.display = "block";
        div.style.display = "none";
        div3.style.display = "none";
    }else{
        div2.style.display = "none";
    }
});
var btnImplantes = document.querySelector(".btn-implantes");
btnImplantes.addEventListener("click", function () {
    var div = document.querySelector(".clareamento-dental");
    var div2 = document.querySelector(".ortodontia");
    var div3 = document.querySelector(".implantes");
    if(div.style.display === "block" || div2.style.display === "block" || div3.style.display === "none"){
        div.style.display = "none";
        div2.style.display = "none";
        div3.style.display = "block";
    }else{
        div3.style.display = "none";
    }
});
