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

// function share(){
//   if(icons.style.display === "block"){
//     icons.style.display === "none";
//   }
//   else{
//     icons.style.display === "block";
//   }
  
// }
// $(document).ready(function(){
//   $('.share').click(function(){
//     $('#share').show();
//     $('html, body').animate({scrollTop: 0}, 'fast'); // scroll to top of page
//   });
// });

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
// Références aux éléments importants
let sliderContainer = document.querySelector('.slider-container');
let slider = document.querySelector('.slider-items');
let items = slider.querySelectorAll('.slider-item');

// Variables globales
let initialDragOffset;
let currentDragOffset;

// Écouteur délégué des événements de clic
// document.querySelector('.slider-arrows').addEventListener('click', (event) => {
//   let clickEventPath = event.composedPath().slice(0, -2);
  
//   console.log("Coucou");
  
//   for (let element of clickEventPath) {
//     if ('previous' in element.dataset) {
//       previousSlideClickHandler(element, sliderContainer);
//       break;
//     } else if ('next' in element.dataset) {
//       nextSlideClickHandler(element, sliderContainer);
//       break;
//     }
//   }
// });

// // Gestionnaire du bouton précédent
// function previousSlideClickHandler(element, section) {
//   scrollToSlide('previous');
// }

// // Gestionnaire du bouton suivant
// function nextSlideClickHandler(element, section) {
//   scrollToSlide('next');
// }

// Écouteur d'événements liés au drag du slider
sliderContainer.addEventListener('mousedown', (event) => desktopScrollMouseDownHandler(event));

document.addEventListener('mousemove', (event) => desktopScrollMouseMoveHandler(event));

document.addEventListener('mouseup', (event) => desktopScrollMouseUpHandler(event));

// Gestionnaire de l'initiation d'un drag slider
function desktopScrollMouseDownHandler(event) {
  if (event.target.classList.contains('slider-arrow')) return false;
  
  event.preventDefault();
  
  document.querySelector('.bungalov').setAttribute('data-sliding', '');
  
  initialDragOffset = event.clientX - sliderContainer.offsetLeft;
}

// Gestionnaire du drag slider
function desktopScrollMouseMoveHandler(event) {
 if (!document.querySelector('.bungalov').hasAttribute('data-sliding')) return false;
  
  currentDragOffset = event.clientX;
  
  let sliderScrollOffset = slider.scrollLeft;
  let nextSliderOffset = sliderScrollOffset - (currentDragOffset - initialDragOffset);
  
  slider.scroll({ left: nextSliderOffset, behavior: 'auto' });
  
  initialDragOffset = currentDragOffset;
}

// Gestionnaire de la fin d'un drag slider
async function desktopScrollMouseUpHandler(event) {
  if (!document.querySelector('.bungalov').hasAttribute('data-sliding')) return false;
  
  document.querySelector('.bungalov').removeAttribute('data-sliding');
  
  slider.style.scrollSnapType = "none";
  
  scrollToSlide();
  
  setTimeout(() => slider.style.scrollSnapType = null, 800)
}

// Gestionnaire du scroll
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




const viewBtn = document.querySelector(".share"),
    share1 = document.getElementById("share1")
    share2 = document.getElementById("share2")
    share3 = document.getElementById("share3")
    share4 = document.getElementById("share4")
    share5 = document.getElementById("share5")
    share6 = document.getElementById("share6")
    share7 = document.getElementById("share7")
    body = document.querySelector("body");
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
    if (popup.classList === "show") {
      body.style.background = rgba(0,0,0,.153);
    } else {
      
      
    }

    
    
    
  

