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

  $('#menu').onclick=()=>{              $('#menu').classList.toggle('rotate')
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
    
    // Get the pop-up container element
    var popupContainer = document.querySelector('.popup-container');

    // Add a scroll event listener to the window object
    window.addEventListener('scroll', function() {
      // Calculate the scroll position of the user
      var scrollPosition = window.scrollY;

      // Show the pop-up when the user has scrolled 500 pixels or more
      // if (scrollPosition >= 500) {
      //   popup.classList.add('show');
      // } else {
      //   popup.classList.remove('show');
      // }
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
    
    

    
    
  

