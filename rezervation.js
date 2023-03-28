window.onload=()=>{
  const $ = document.querySelector.bind(document);
  const $All = document.querySelectorAll.bind(document);
  
  $('#menu').onclick=()=>{  
      $(".next").classList.toggle("disabled")           
      $('#menu').classList.toggle('rotate')
      $('.nav-page1').classList.toggle('transform')
      $('.nav-page2').classList.toggle('transform')
      $('.menu-line1').classList.toggle('rotate1')
      $('.menu-line2').classList.toggle('rotate2')
  }
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
    
    
    $('.log').on('click', function(){
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