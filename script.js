const share = document.querySelector(".share");
const icons = document.querySelector("#share");

function myFunction() {
    var x = document.getElementById("myLinks");
    if (x.style.display === "block") {
      x.style.display = "none";
    } else {
      x.style.display = "block";
    }
}

function share(){
  if(icons.style.display === "block"){
    icons.style.display === "none";
  }
  else{
    icons.style.display === "block";
  }
  
}
$(document).ready(function(){
  $('.share').click(function(){
    $('#share').show();
    $('html, body').animate({scrollTop: 0}, 'fast'); // scroll to top of page
  });
});


window.onload=()=>{
  const $ = document.querySelector.bind(document);
  const $All = document.querySelectorAll.bind(document);

  $('#menu').onclick=()=>{  
             
    $('#menu').classList.toggle('rotate')
    $('.nav-page1').classList.toggle('transform')
    $('.nav-page2').classList.toggle('transform')
    $('.menu-line1').classList.toggle('rotate1')
    $('.menu-line2').classList.toggle('rotate2')
  }
}

let sliderContainer = document.querySelector('.slider-container');
let slider = document.querySelector('.slider-items');
let items = slider.querySelectorAll('.slider-item');


let initialDragOffset;
let currentDragOffset;


sliderContainer.addEventListener('mousedown', (event) => desktopScrollMouseDownHandler(event));

document.addEventListener('mousemove', (event) => desktopScrollMouseMoveHandler(event));

document.addEventListener('mouseup', (event) => desktopScrollMouseUpHandler(event));


function desktopScrollMouseDownHandler(event) {
  if (event.target.classList.contains('slider-arrow')) return false;
  
  event.preventDefault();
  
  document.querySelector('.bungalov').setAttribute('data-sliding', '');
  
  initialDragOffset = event.clientX - sliderContainer.offsetLeft;
}


function desktopScrollMouseMoveHandler(event) {
 if (!document.querySelector('.bungalov').hasAttribute('data-sliding')) return false;
  
  currentDragOffset = event.clientX;
  
  let sliderScrollOffset = slider.scrollLeft;
  let nextSliderOffset = sliderScrollOffset - (currentDragOffset - initialDragOffset);
  
  slider.scroll({ left: nextSliderOffset, behavior: 'auto' });
  
  initialDragOffset = currentDragOffset;
}


async function desktopScrollMouseUpHandler(event) {
  if (!document.querySelector('.bungalov').hasAttribute('data-sliding')) return false;
  
  document.querySelector('.bungalov').removeAttribute('data-sliding');
  
  slider.style.scrollSnapType = "none";
  
  scrollToSlide();
  
  setTimeout(() => slider.style.scrollSnapType = null, 800)
}


function scrollToSlide(command) {
  let numberOfItems = items.length;
  let itemWidth = items[0].offsetWidth;
  let sliderGap = parseInt(window.getComputedStyle(slider).rowGap);
  let numberOfItemsOnScreen = parseFloat((window.innerWidth / (itemWidth + sliderGap)).toFixed(2));
  let sliderScrollOffset = slider.scrollLeft;
  let activeItemIndex = Math.ceil(sliderScrollOffset / (itemWidth + sliderGap));
  let nextItemIndex;
  
  switch(command) {
    case 'previous':
      nextItemIndex = activeItemIndex - 1;      
      if (nextItemIndex < 0) {
        nextItemIndex = numberOfItems - Math.floor(numberOfItemsOnScreen);
      }
      break;
    case 'next':
      nextItemIndex = activeItemIndex + 1;
      if (nextItemIndex > numberOfItems - Math.floor(numberOfItemsOnScreen)) {
        nextItemIndex = 0;
      }
      break;
    default:
      nextItemIndex = Math.floor(sliderScrollOffset / (itemWidth + sliderGap));
  }
    
  let nextSliderOffset = nextItemIndex * (itemWidth + sliderGap);
  
  slider.scroll({ left: nextSliderOffset, behavior: 'smooth' });
}
let slideIndex = [1,1];
    let slideId = [[document.querySelectorAll(".mySlides1")], [document.querySelectorAll(".mySlides2")]];
    showSlides(1, 0);
    showSlides(1, 1);

    function plusSlides(n, no) {
      showSlides(slideIndex[no] += n, no);
    }

    function showSlides(n, no) {
      let i;
      let x = document.getElementsByClassName(slideId[no]);
      if (n > x.length) {slideIndex[no] = 1}    
      if (n < 1) {slideIndex[no] = x.length}
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
      }
      x[slideIndex[no]-1].style.display = "block";  
    }

    

    const viewBtn = document.querySelector(".share"),
      share1 = document.getElementById("share1"),
      share2 = document.getElementById("share2"),
      share3 = document.getElementById("share3"),
      share4 = document.getElementById("share4"),
      share5 = document.getElementById("share5"),
      share6 = document.getElementById("share6"),
      share7 = document.getElementById("share7"),
      body = document.querySelector("body")
      popup = document.querySelector(".popup"),
      close = document.querySelector(".fa-times")
      
      
      var popupContainer = document.querySelector('.popup-container');

    
    window.addEventListener('scroll', function() {

      var scrollPosition = window.scrollY;

      
    });
    share1.onclick = ()=>{ 
      popup.classList.toggle("show");
    }
    close.onclick = ()=>{
      share1.click();
    }
    share2.onclick = ()=>{ 
      popup.classList.toggle("show");
    }
    close.onclick = ()=>{
      share2.click();
    }
    share3.onclick = ()=>{ 
      popup.classList.toggle("show");
    }
    close.onclick = ()=>{
      share3.click();
    }
    share4.onclick = ()=>{ 
      popup.classList.toggle("show");
    }
    close.onclick = ()=>{
      share4.click();
    }
    share5.onclick = ()=>{ 
      popup.classList.toggle("show");
    }
    close.onclick = ()=>{
      share5.click();
    }
    share6.onclick = ()=>{ 
      popup.classList.toggle("show");
    }
    close.onclick = ()=>{
      share6.click();
    }
    share7.onclick = ()=>{ 
      popup.classList.toggle("show");
    }
    close.onclick = ()=>{
      share7.click();
    }
    
    
    $(function() {
      
      var $overlay = $('.overlay');
      var $mainPopUp = $('.main-popup')
      var $signIn = $('#sign-in');
      var $register = $('#register');
      var $formSignIn = $('form.sign-in');
      var $formRegister = $('form.register');
      
      var $firstChild = $('nav ul li:first-child');
      var $secondChild = $('nav ul li:nth-child(2)');
      var $thirdChild = $('nav ul li:nth-child(3)');
      
      
      function initialState() {
        $('.underline').css({
          "width": $firstChild.width(),
          "left": $firstChild.position().left,
          "top": $firstChild.position().top + $firstChild.outerHeight(true) + 'px'
        });
      }
      initialState(); 
      
      
      function changeUnderline(el) {
        $('.underline').css({
          "width": el.width(),
          "left": el.position().left,
          "top": el.position().top + el.outerHeight(true) + 'px'
        });
      } 
      
      $firstChild.on('click', function(){
        var el = $firstChild;
        changeUnderline(el);
        $secondChild.removeClass('active');
        $thirdChild.removeClass('active');
        $(this).addClass('active');
      });
      
      $secondChild.on('click', function(){
        var el = $secondChild;
        changeUnderline(el); 
        $firstChild.removeClass('active');
        $thirdChild.removeClass('active');
        $(this).addClass('active');
      });
      
      $thirdChild.on('click', function(){
        var el = $thirdChild;
        changeUnderline(el); 
        $firstChild.removeClass('active');
        $secondChild.removeClass('active');
        $(this).addClass('active');
      });
      
      
      $('.log-in').on('click', function(){
        $overlay.addClass('visible');
        $mainPopUp.addClass('visible');
        $signIn.addClass('active');
        $register.removeClass('active');
        $formRegister.removeClass('move-left');
        $formSignIn.removeClass('move-left');
      });
      $overlay.on('click', function(){
        $(this).removeClass('visible');
        $mainPopUp.removeClass('visible');
      });
      $('#popup-close-button i').on('click', function(e){
        e.preventDefault();
        $overlay.removeClass('visible');
        $mainPopUp.removeClass('visible');
      });
      
      $signIn.on('click', function(){
        $signIn.addClass('active');
        $register.removeClass('active');
        $formSignIn.removeClass('move-left');
        $formRegister.removeClass('move-left');
      });
      
      $register.on('click', function(){
        $signIn.removeClass('active');
        $register.addClass('active');
        $formSignIn.addClass('move-left');
        $formRegister.addClass('move-left');
      });
      
      $('input').on('submit', function(e){
        e.preventDefault(); 
      });
    });
    $(function() {
      
      var $overlayy = $('.overlayy');
      var $mainpopupp = $('.main-popupp')
      var $signinn = $('#sign-inn');
      var $registerr = $('#registerr');
      var $formsigninn = $('form.sign-inn');
      var $formregisterr = $('form.registerr');
      
      var $firstChild = $('nav ul li:first-child');
      var $secondChild = $('nav ul li:nth-child(2)');
      var $thirdChild = $('nav ul li:nth-child(3)');
      
      
      function initialState() {
        $('.underline').css({
          "width": $firstChild.width(),
          "left": $firstChild.position().left,
          "top": $firstChild.position().top + $firstChild.outerHeight(true) + 'px'
        });
      }
      initialState(); 
      
      
      function changeUnderline(el) {
        $('.underline').css({
          "width": el.width(),
          "left": el.position().left,
          "top": el.position().top + el.outerHeight(true) + 'px'
        });
      } 
      
      $firstChild.on('click', function(){
        var el = $firstChild;
        changeUnderline(el);
        $secondChild.removeClass('active');
        $thirdChild.removeClass('active');
        $(this).addClass('active');
      });
      
      $secondChild.on('click', function(){
        var el = $secondChild;
        changeUnderline(el); 
        $firstChild.removeClass('active');
        $thirdChild.removeClass('active');
        $(this).addClass('active');
      });
      
      $thirdChild.on('click', function(){
        var el = $thirdChild;
        changeUnderline(el); 
        $firstChild.removeClass('active');
        $secondChild.removeClass('active');
        $(this).addClass('active');
      });
      
      
      $('.add-bungalov').on('click', function(){
        $overlayy.addClass('visible');
        $mainpopupp.addClass('visible');
        $signinn.addClass('active');
        $registerr.removeClass('active');
        $formregisterr.removeClass('move-left');
        $formsigninn.removeClass('move-left');
      });
      $overlayy.on('click', function(){
        $(this).removeClass('visible');
        $mainPopUp.removeClass('visible');
      });
      $('#popupp-close-button i').on('click', function(e){
        e.preventDefault();
        $overlayy.removeClass('visible');
        $mainpopupp.removeClass('visible');
      });
      
      $signinn.on('click', function(){
        $signinn.addClass('active');
        $registerr.removeClass('active');
        $formsigninn.removeClass('move-left');
        $formregisterr.removeClass('move-left');
      });
      
      $registerr.on('click', function(){
        $signinn.removeClass('active');
        $registerr.addClass('active');
        $formsigninn.addClass('move-left');
        $formregisterr.addClass('move-left');
      });
      
      $('input').on('submit', function(e){
        e.preventDefault(); 
      });
    });
    window.onload = function(){

      let pricebefore = document.querySelector(".price-before").textContent;
      document.querySelector(".disc").innerHTML = pricebefore;
    }

    // $(function() {
      
    //   var $overlayy = $('.overlayy');
    //   var $add = $('.add-popup')
      
    //   var $register = $('#register');
    //   var $formSignIn = $('form.sign-in');
    //   var $formRegister = $('form.register');
      
    //   var $firstChild = $('nav ul li:first-child');
    //   var $secondChild = $('nav ul li:nth-child(2)');
    //   var $thirdChild = $('nav ul li:nth-child(3)');
      
      
    //   function initialState() {
    //     $('.underline').css({
    //       "width": $firstChild.width(),
    //       "left": $firstChild.position().left,
    //       "top": $firstChild.position().top + $firstChild.outerHeight(true) + 'px'
    //     });
    //   }
    //   initialState(); 
      
      
    //   function changeUnderline(el) {
    //     $('.underline').css({
    //       "width": el.width(),
    //       "left": el.position().left,
    //       "top": el.position().top + el.outerHeight(true) + 'px'
    //     });
    //   } 
      
    //   $firstChild.on('click', function(){
    //     var el = $firstChild;
    //     changeUnderline(el);
    //     $secondChild.removeClass('active');
    //     $thirdChild.removeClass('active');
    //     $(this).addClass('active');
    //   });
      
    //   $secondChild.on('click', function(){
    //     var el = $secondChild;
    //     changeUnderline(el); 
    //     $firstChild.removeClass('active');
    //     $thirdChild.removeClass('active');
    //     $(this).addClass('active');
    //   });
      
    //   $thirdChild.on('click', function(){
    //     var el = $thirdChild;
    //     changeUnderline(el); 
    //     $firstChild.removeClass('active');
    //     $secondChild.removeClass('active');
    //     $(this).addClass('active');
    //   });
      
      
    //   $('.add-bungalov').on('click', function(){
    //     $overlayy.addClass('visible');
    //     $add.addClass('visible');
    //     $signIn.addClass('active');
    //     $register.removeClass('active');
    //     $formRegister.removeClass('move-left');
    //     $formSignIn.removeClass('move-left');
    //   });
    //   $overlayy.on('click', function(){
    //     $(this).removeClass('visible');
    //     $add.removeClass('visible');
    //   });
    //   $('.popupp-close-button i').on('click', function(e){
    //     e.preventDefault();
    //     $overlayy.removeClass('visible');
    //     $add.removeClass('visible');
    //   });
      
    //   $signIn.on('click', function(){
    //     $signIn.addClass('active');
    //     $register.removeClass('active');
    //     $formSignIn.removeClass('move-left');
    //     $formRegister.removeClass('move-left');
    //   });
      
    //   $register.on('click', function(){
    //     $signIn.removeClass('active');
    //     $register.addClass('active');
    //     $formSignIn.addClass('move-left');
    //     $formRegister.addClass('move-left');
    //   });
      
    //   $('input').on('submit', function(e){
    //     e.preventDefault(); 
    //   });
    // });
    
    
  

