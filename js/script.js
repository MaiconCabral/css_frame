$(function () {
/*==================================================
 *  MODAL
 * ===============================================*/
///fecha e atualiza modal
  $('.j_close_edituser').click(function(){
    window.location.reload();
    return false;
  });
  
//abrindo modal para criar classificado
    $( ".j_modal-two" ).click(function() {
      $('.dialog-two').fadeIn().css('display','block').find('.modal-two').fadeIn();
  }); 

  //Modais do sistema
  $('.j_modal-one').click(function(){
    $('.dialog').fadeIn('fast',function(){
      $('.modal-one').fadeIn('slow');
    });
    return false;
  });

 //Modais do sistema
  $('.j_modal-three').click(function(){
    $('.dialog-three').fadeIn('fast',function(){
      $('.modal-three').fadeIn('slow');
    });
    return false;
  });

/*==================================================
 * Menus Mobile
 * ===============================================*/
/* menu defaul*/
$('.mobile_action').click(function () {
      if (!$(this).hasClass('active')) {
            $(this).addClass('active');
            $(this).toggleClass("toggle");
            $('.main_header_nav').animate({'left': '0px'}, 300);
        } else {
            $(this).removeClass('active');
            $(this).toggleClass("toggle");
            $('.main_header_nav').animate({'left': '-100%'}, 300);
        }      
});

//OPEN NAV ON HAMBURGUER CLICK
//menu mobile 1
$(".hamburguer").click(function(){
  $(this).toggleClass("toggle");
  //$('.dialog-menu').fadeIn();
  $("nav").toggleClass("open");
});


//Menu Mobile-2
/*const navBar2 = document.querySelector('.mobile-menu-two');
const navBtn2 = document.querySelector('.nav-btn-two');
navBtn2.addEventListener('click', function() {
  this.classList.toggle('open');
  navBar2.classList.toggle('nav--open-two');
});*/

  //Menu Mobile-3
/*  $('.mobile-nav-button').on('click', function() {
     //alert("oiiii")
    // Toggles a class on the menu button to transform the burger menu into a cross
    $( ".mobile-nav-button .mobile-nav-button__line:nth-of-type(1)" ).toggleClass( "mobile-nav-button__line--1");
    $( ".mobile-nav-button .mobile-nav-button__line:nth-of-type(2)" ).toggleClass( "mobile-nav-button__line--2");  
    $( ".mobile-nav-button .mobile-nav-button__line:nth-of-type(3)" ).toggleClass( "mobile-nav-button__line--3");  
    
    // Toggles a class that slides the menu into view on the screen
    $('.mobile-menu-three').toggleClass('mobile-menu--open');
    return false;
  });*/


//Menu Mobile-4
const navBar4 = document.querySelector('.mobile-menu-four');
const navBtn4 = document.querySelector('.nav-btn');
navBtn4.addEventListener('click', function() {
  this.classList.toggle('open');
  navBar4.classList.toggle('nav--open');
});


});