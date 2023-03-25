<?php include("header.html")?>
        <style>
            .overlay {
  position: fixed;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0,0,0,0.5);
  z-index: 10;
  opacity: 0;
  visibility: hidden;
  transition: all .5s ease;
}

.overlay.visible {
  opacity: 1;
  visibility: visible;
}

.main-popup {

  position: fixed;
  left: 0px;
  top: 70px;
  margin: 0;
  padding: 15px;
  max-width: 400px;
  height: 650px;
  background-color: #fff;
  border-radius: 5px;
  z-index: 9999999999;
  opacity: 0;
  visibility: hidden;
  transform: translate(-50%, -50%);
  transition: all .5s ease;
  /*overflow: hidden;*/
}

.main-popup.visible {
  opacity: 1;
  visibility: visible;
  transform: translateY(10px);
  transition: all .5s ease;
}

@media (min-width: 500px) {
  .main-popup {
    width: 500px;
    left: 50%;
    margin: 0 0 0 -250px;
  }
}

.popup-header {
  position: relative;
  padding: 0;
  margin: 0;
  height: 62px;
  width: 100%;
}

#popup-close-button i {
  position: fixed;
  right: 20px;
  padding:0 20px;
  top: 10px;
  width: 22px;
  height: 22px;
}



.popup-header ul {
  margin: 0;
  padding: 0;
}

.popup-header ul li {
  text-align: center;
  list-style: none;
  width: 50%;
  float: left;
}

.popup-header ul li a {
  display: block;
  padding: 20px 0;
  margin: 0;
  text-decoration: none;
  font-size: 1.2em;
}

#sign-in {
  font-size: 20px;
  color: black;
  border-radius: 5px 0 0 0;
  background-color: rgb(229,231,235);
}

#sign-in.active {
  border-bottom: 3px solid rgb(227,131,38);
  background-color: #fff;
  color:black;
}

#register {
  font-size: 20px;
  color: black;
  border-radius: 0 5px 0 0;
  background-color: rgb(229,231,235);
}

#register.active {
  border-bottom: 3px solid rgb(227,131,38);
  background-color: #fff;
  color: black;
}

.popup-content {
  height: 600px;
  overflow: auto;
}

form.sign-in {
  position: relative; 
  top: 40px;
  left: 0;
  font-size: 1em;
  opacity: 1;
  -webkit-transition: all .35s;
  -moz-transition: all .35s;
  -o-transition: all .35s;
  transition: all .35s;
}

form.sign-in.move-left {
  opacity: 0;
  transform: translateX(-450px);
}

form label {
  font-size: 1.1em;
  color: black;
  margin-left: 23px;
}

form.sign-in input {
  background-color: rgb(229,231,235);
  border-radius: 5px;
  width: 90%;
  height: 40px;
  margin: 5px 5% 30px 5%;
  padding: 10px;
  font-size: 1em;
  color: black;
  outline: none;
  border: none;
}


input#submit {
  background-color: rgb(227,131,38);
  color: #fff;
  height: 50px;
  width: 90%;
  margin-left: 5%;
  margin-right: 5%;
  margin-top: 25px;
  padding: 0;
  cursor: pointer;
  outline: none;
  border-radius: 5px;
  font-size: 1em;
  border: none;
}

form.register {
  position: relative; 
  top: -310px;
  left: 0;
  font-size: 1em;
  opacity: 0;
  transform: translateX(450px);
  -webkit-transition: all .35s;
  -moz-transition: all .35s;
  -o-transition: all .35s;
  transition: all .35s;
}
form.register p:first-child{
  text-decoration: underline;
}

form.register.move-left {
  opacity: 1;
  transform: translateX(0);
}
.warning{
  padding-left: 15px;
}
form.register input[type=text],
form.register input[type=email],
form.register input[type=password],
form.register select {
  background-color: rgb(229,231,235);
  border-radius: 5px;
  width: 90%;
  height: 40px;
  margin: 5px 5% 15px 5%;
  padding: 10px;
  font-size: 1em;
  color: black;
  outline: none;
  border: none;
}

p.check-mark {
  position: relative;
  left: 50%;
  width: 200px;
  margin: 0 0 0 -100px;
  padding: 0;
  text-align: center;
  color: black;
  font-size: .8em;
}
.radio{
  display: flex;
  align-items: center;
  justify-content: center;
  
}
.checked{
  display:flex;
  flex-direction: column;
  text-align: center;
}
.accept{
  padding: 15px;
  text-align: center;
  display:flex;

}
input[type=radio] {
    border: 0px;
    width: 100%;
    height: 2em;
    
}
.radio label{
  font-size: 15px;
}
p.check-mark a {
  color: #a48bb9;
}

p.check-mark input {
  border-radius: 0;
  width: auto;
  height: auto;
  margin: 0;
  padding: 0;
  font-size: 2em;
  color: #ceaee8;
  outline: none;
  border: none;
}

p.check-mark label {
  margin-left: 5px;
}
        </style>
        <main>
            <div class="banner">
                <img style="max-width: 70wv;" src="https://bungalovrehberi.com/web/assets/images/ust_resim.jpg" alt="">
            </div>
            <div class="bungalov">
                <div class="bungalov-img">
                    <img src="https://bungalovrehberi.com/storage/web/uploads/evler/97a3ad5b-2b46-4cbc-bd99-a04f316f7e6d-wshtg0.jpeg" alt="">
                </div>
                <div class="bungalov-details">
                    <div class="rate">
                        <div class="left">
                            <p>White Koti</p>
                            <div class="location">
                                <p>Sakarya / Sapanca</p>
                                <i class="fa fa-map-marker-alt"></i>
                            </div>
                        </div>
                        <div class="right" >
                            <p class="rate-num">4.0</p>
                            <p>Keyifli</p>
                            <div class="share" id="share1">
                                <i class="fas fa-share"></i>
                                <p>Paylaş</p>
                            </div>    
                            <div class="popup">
                                <header class="header">
                                    <p>Sosyal medyada paylaşın</p>
                                    <i class="fas close fa-times"></i>
                                </header>
                                <div class="content">
                                    <ul class="icons">
                                        <a href="https://www.facebook.com/login.php?skip_api_login=1&api_key=966242223397117&signed_next=1&next=https%3A%2F%2Fwww.facebook.com%2Fshare.php%3Fu%3Dhttps%253A%252F%252Fbungalovrehberi.com%252F19%252Fkoti-sapanca%252Fwhite-koti%26title%3DWhite%2BKoti&cancel_url=https%3A%2F%2Fwww.facebook.com%2Fdialog%2Fclose_window%2F%3Fapp_id%3D966242223397117%26connect%3D0%23_%3D_&display=popup&locale=tr_TR" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                        <a href="https://twitter.com/intent/tweet?text=https://bungalovrehberi.com/19/koti-sapanca%2Fwhite-koti" target="_blank"><i class="fab fa-twitter"></i></a>
                                        <a href="https://tr.pinterest.com/pin/create/bookmarklet/?description=White%20Koti&is_video=false&url=https://bungalovrehberi.com/19/koti-sapanca%2Fwhite-koti"
                                        target="_blank"><i class="fab fa-pinterest"></i></a>
                                        <a href="https://api.whatsapp.com/send?text=https://bungalovrehberi.com/19/koti-sapanca%2Fwhite-koti"
                                        target="_blank"><i class="fab fa-whatsapp"></i></a>
                                        <a href="mailto:?subject=White Koti&amp;body=https://bungalovrehberi.com/19/koti-sapanca%2Fwhite-koti"
                                        target="_blank"><i class="fa-solid fa-envelope"></i></a>
                                    </ul>
                                    
                                </div>
                            </div>
                                   
                        </div>
                        <div id="share" >

                            <!-- facebook -->
                            <a class="facebook" href="https://www.facebook.com/share.php?u={{url}}&title={{title}}" target="blank"><i class="fab fa-facebook-f"></i></a>

                            <!-- twitter -->
                            <a class="twitter" href="https://twitter.com/intent/tweet?status={{title}}+{{url}}" target="blank"><i class="fab fa-twitter"></i></a>

                            <!-- google plus -->
                            <a class="googleplus" href="https://plus.google.com/share?url={{url}}" target="blank"><i class="fab fa-pinterest"></i></a>

                            <!-- linkedin -->
                            <a class="linkedin" href="https://www.linkedin.com/shareArticle?mini=true&url={{url}}&title={{title}}&source={{source}}" target="blank"><i class="fab fa-whatsapp"></i></a>
                            
                            <!-- pinterest -->
                            <a class="pinterest" href="https://pinterest.com/pin/create/bookmarklet/?media={{media}}&url={{url}}&is_video=false&description={{title}}" target="blank"><i class="fas fa-envelope"></i></a>
  
                        </div>

                        
                    </div>
                    
                    <section class="s-slider">
                        <div class="slider-container">
                            <ul class="slider-items">
                                <div class="icon-slider">
                                    <i class="slider-item fa-solid fa-user-friends">
                                    </i>
                                    <span style>2 kişi + 1 misafir</span>
                                </div>

                                <div class="icon-slider">
                                    <i class="slider-item fa-solid fa-bed">
                                    </i>
                                    <span>1 çift + 2 yatak</span>
                                </div>
                                <div class="icon-slider">
                                    <i class="slider-item fas fa-utensils">
                                    </i>
                                    <span class="ic">Kahvaltı</span>
                                </div>
                                <div class="icon-slider">
                                    <i class="slider-item fas fa-swimming-pool">
                                    </i>
                                    <span >Özel Havuz</span>
                                </div>
                                <div style="opacity: 0.4;" class="icon-slider">
                                    <i  class="slider-item fas fa-hot-tub">
                                    </i>
                                    <span class="ic">Jakuzi</span>
                                </div>
                                <div class="icon-slider">
                                    <i class="slider-item fab fa-gripfire">
                                    </i>
                                    <span class="ic">Şömine</span>
                                </div>
                            </ul>
                        </div>
                        
                    </section>
                    <div class="check">
                        <div class="checked1">
                            <div class="checked">
                                <i class="fa-solid fa-check"></i>
                                <p>Klima</p>
                            </div>
                            <div class="checked">
                                <i class="fa-solid fa-check"></i>
                                <p>Duş</p>
                            </div>
                            <div class="checked">
                                <i class="fa-solid fa-check"></i>
                                <p>Çalışma Alanı</p>
                            </div>
                        </div>
                        <div class="checked2">
                            <div class="checked">
                                <i class="fa-solid fa-check"></i>
                                <p>İnternet (Wi-Fi)</p>
                            </div>
                            <div class="checked">
                                <i class="fa-solid fa-check"></i>
                                <p>Banyo</p>
                            </div>
                            <div class="checked">
                                <i class="fa-solid fa-check"></i>
                                <p>Sigara İçilebilir</p>
                            </div>
                        </div>
                        <div class="checked3">
                            <div class="checked">
                                <i class="fa-solid fa-check"></i>
                                <p>Televizyon</p>
                            </div>
                            <div class="checked">
                                <i class="fa-solid fa-check"></i>
                                <p>Mutfak</p>
                            </div>
                            <div class="checked">
                                <i class="fa-solid fa-check"></i>
                                <p>Projeksiyon</p>
                            </div>
                        </div>
                    </div>
                    <div class="price">
                        <span>2,350 ₺</span>
                        <span>%4 İNDİRİM</span>
                        <span>2,250 ₺</span>

                    </div>
                    <a href="white-koti.php">
                        <button class="inspect">İncele
                            <i class="fa-solid fa-angle-right"></i>
                        </button>
                    </a>    
                </div>
            </div>
            
            <div class="bungalov">
                <div class="bungalov-img">
                    <img src="https://bungalovrehberi.com/storage/web/uploads/evler/97a3ad5b-2b46-4cbc-bd99-a04f316f7e6d-wshtg0.jpeg" alt="">
                </div>
                <div class="bungalov-details">
                    <div class="rate">
                        <div class="left">
                            <p>Navy Blue Koti</p>
                            <div class="location">
                                <p>Sakarya / Sapanca</p>
                                <i class="fa fa-map-marker-alt"></i>
                            </div>
                        </div>
                        <div class="right" >
                            
                            <div class="share" id="share2">
                                <i class="fas fa-share"></i>
                                <p>Paylaş</p>
                            </div>    
                            <div class="popup">
                                <header class="header">
                                    <p>Sosyal medyada paylaşın</p>
                                    <i class="fas close fa-times"></i>
                                </header>
                                <div class="content">
                                    <ul class="icons">
                                        <a href="https://www.facebook.com/login.php?skip_api_login=1&api_key=966242223397117&signed_next=1&next=https%3A%2F%2Fwww.facebook.com%2Fshare.php%3Fu%3Dhttps%253A%252F%252Fbungalovrehberi.com%252F19%252Fkoti-sapanca%252Fwhite-koti%26title%3DWhite%2BKoti&cancel_url=https%3A%2F%2Fwww.facebook.com%2Fdialog%2Fclose_window%2F%3Fapp_id%3D966242223397117%26connect%3D0%23_%3D_&display=popup&locale=tr_TR" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                        <a href="https://twitter.com/intent/tweet?text=https://bungalovrehberi.com/19/koti-sapanca%2Fwhite-koti" target="_blank"><i class="fab fa-twitter"></i></a>
                                        <a href="https://tr.pinterest.com/pin/create/bookmarklet/?description=White%20Koti&is_video=false&url=https://bungalovrehberi.com/19/koti-sapanca%2Fwhite-koti"
                                        target="_blank"><i class="fab fa-pinterest"></i></a>
                                        <a href="https://api.whatsapp.com/send?text=https://bungalovrehberi.com/19/koti-sapanca%2Fwhite-koti"
                                        target="_blank"><i class="fab fa-whatsapp"></i></a>
                                        <a href="mailto:?subject=White Koti&amp;body=https://bungalovrehberi.com/19/koti-sapanca%2Fwhite-koti"
                                        target="_blank"><i class="fa-solid fa-envelope"></i></a>
                                    </ul>
                                    
                                </div>
                            </div>
                                   
                        </div>
                        <div id="share" >

                            <!-- facebook -->
                            <a class="facebook" href="https://www.facebook.com/share.php?u={{url}}&title={{title}}" target="blank"><i class="fab fa-facebook-f"></i></a>

                            <!-- twitter -->
                            <a class="twitter" href="https://twitter.com/intent/tweet?status={{title}}+{{url}}" target="blank"><i class="fab fa-twitter"></i></a>

                            <!-- google plus -->
                            <a class="googleplus" href="https://plus.google.com/share?url={{url}}" target="blank"><i class="fab fa-pinterest"></i></a>

                            <!-- linkedin -->
                            <a class="linkedin" href="https://www.linkedin.com/shareArticle?mini=true&url={{url}}&title={{title}}&source={{source}}" target="blank"><i class="fab fa-whatsapp"></i></a>
                            
                            <!-- pinterest -->
                            <a class="pinterest" href="https://pinterest.com/pin/create/bookmarklet/?media={{media}}&url={{url}}&is_video=false&description={{title}}" target="blank"><i class="fas fa-envelope"></i></a>
  
                        </div>

                        
                    </div>
                    
                    <section class="s-slider">
                        <div class="slider-container">
                            <ul class="slider-items">
                                <div class="icon-slider">
                                    <i class="slider-item fa-solid fa-user-friends">
                                    </i>
                                    <span>2 kişi + 1 misafir</span>
                                </div>

                                <div class="icon-slider">
                                    <i class="slider-item fa-solid fa-bed">
                                    </i>
                                    <span>1 çift + 2 yatak</span>
                                </div>
                                <div class="icon-slider">
                                    <i class="slider-item fas fa-utensils">
                                    </i>
                                    <span class="ic">Kahvaltı</span>
                                </div>
                                <div class="icon-slider">
                                    <i class="slider-item fas fa-swimming-pool">
                                    </i>
                                    <span >Özel Havuz</span>
                                </div>
                                <div style="opacity:0.4" class="icon-slider">
                                    <i class="slider-item fas fa-hot-tub">
                                    </i>
                                    <span class="ic">Jakuzi</span>
                                </div>
                                <div class="icon-slider">
                                    <i class="slider-item fab fa-gripfire">
                                    </i>
                                    <span class="ic">Şömine</span>
                                </div>
                            </ul>
                        </div>
                        
                    </section>
                    <div class="check">
                        <div class="checked1">
                            <div class="checked">
                                <i class="fa-solid fa-check"></i>
                                <p>Klima</p>
                            </div>
                            <div class="checked">
                                <i class="fa-solid fa-check"></i>
                                <p>Duş</p>
                            </div>
                            <div class="checked">
                                <i class="fa-solid fa-check"></i>
                                <p>Çalışma Alanı</p>
                            </div>
                        </div>
                        <div class="checked2">
                            <div class="checked">
                                <i class="fa-solid fa-check"></i>
                                <p>İnternet (Wi-Fi)</p>
                            </div>
                            <div class="checked">
                                <i class="fa-solid fa-check"></i>
                                <p>Banyo</p>
                            </div>
                            <div class="checked">
                                <i class="fa-solid fa-check"></i>
                                <p>Sigara İçilebilir</p>
                            </div>
                        </div>
                        <div class="checked3">
                            <div class="checked">
                                <i class="fa-solid fa-check"></i>
                                <p>Televizyon</p>
                            </div>
                            <div class="checked">
                                <i class="fa-solid fa-check"></i>
                                <p>Mutfak</p>
                            </div>
                            <div class="checked">
                                <i class="fa-solid fa-check"></i>
                                <p>Projeksiyon</p>
                            </div>
                        </div>
                    </div>
                    <div class="price">
                        <span>2,350 ₺</span>
                        <span>%4 İNDİRİM</span>
                        <span>2,250 ₺</span>

                    </div>
                    <a href="white-koti.php">
                        <button class="inspect">İncele
                            <i class="fa-solid fa-angle-right"></i>
                        </button>
                    </a>   
                </div>
            </div>
            
            <div class="bungalov">
                <div class="bungalov-img">
                    <img src="https://bungalovrehberi.com/storage/web/uploads/evler/97a3ad5b-2b46-4cbc-bd99-a04f316f7e6d-wshtg0.jpeg" alt="">
                </div>
                <div class="bungalov-details">
                    <div class="rate">
                        <div class="left">
                            <p>Brown Koti</p>
                            <div class="location">
                                <p>Sakarya / Sapanca</p>
                                <i class="fa fa-map-marker-alt"></i>
                            </div>
                        </div>
                        <div class="right" >
                            
                            <div class="share" id="share3">
                                <i class="fas fa-share"></i>
                                <p>Paylaş</p>
                            </div>    
                            <div class="popup">
                                <header class="header">
                                    <p>Sosyal medyada paylaşın</p>
                                    <i class="fas close fa-times"></i>
                                </header>
                                <div class="content">
                                    <ul class="icons">
                                        <a href="https://www.facebook.com/login.php?skip_api_login=1&api_key=966242223397117&signed_next=1&next=https%3A%2F%2Fwww.facebook.com%2Fshare.php%3Fu%3Dhttps%253A%252F%252Fbungalovrehberi.com%252F19%252Fkoti-sapanca%252Fwhite-koti%26title%3DWhite%2BKoti&cancel_url=https%3A%2F%2Fwww.facebook.com%2Fdialog%2Fclose_window%2F%3Fapp_id%3D966242223397117%26connect%3D0%23_%3D_&display=popup&locale=tr_TR" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                        <a href="https://twitter.com/intent/tweet?text=https://bungalovrehberi.com/19/koti-sapanca%2Fwhite-koti" target="_blank"><i class="fab fa-twitter"></i></a>
                                        <a href="https://tr.pinterest.com/pin/create/bookmarklet/?description=White%20Koti&is_video=false&url=https://bungalovrehberi.com/19/koti-sapanca%2Fwhite-koti"
                                        target="_blank"><i class="fab fa-pinterest"></i></a>
                                        <a href="https://api.whatsapp.com/send?text=https://bungalovrehberi.com/19/koti-sapanca%2Fwhite-koti"
                                        target="_blank"><i class="fab fa-whatsapp"></i></a>
                                        <a href="mailto:?subject=White Koti&amp;body=https://bungalovrehberi.com/19/koti-sapanca%2Fwhite-koti"
                                        target="_blank"><i class="fa-solid fa-envelope"></i></a>
                                    </ul>
                                    
                                </div>
                            </div>
                                   
                        </div>
                        <div id="share" >

                            <!-- facebook -->
                            <a class="facebook" href="https://www.facebook.com/share.php?u={{url}}&title={{title}}" target="blank"><i class="fab fa-facebook-f"></i></a>

                            <!-- twitter -->
                            <a class="twitter" href="https://twitter.com/intent/tweet?status={{title}}+{{url}}" target="blank"><i class="fab fa-twitter"></i></a>

                            <!-- google plus -->
                            <a class="googleplus" href="https://plus.google.com/share?url={{url}}" target="blank"><i class="fab fa-pinterest"></i></a>

                            <!-- linkedin -->
                            <a class="linkedin" href="https://www.linkedin.com/shareArticle?mini=true&url={{url}}&title={{title}}&source={{source}}" target="blank"><i class="fab fa-whatsapp"></i></a>
                            
                            <!-- pinterest -->
                            <a class="pinterest" href="https://pinterest.com/pin/create/bookmarklet/?media={{media}}&url={{url}}&is_video=false&description={{title}}" target="blank"><i class="fas fa-envelope"></i></a>
  
                        </div>

                        
                    </div>
                    
                    <section class="s-slider">
                        <div class="slider-container">
                            <ul class="slider-items">
                                <div class="icon-slider">
                                    <i class="slider-item fa-solid fa-user-friends">
                                    </i>
                                    <span>2 kişi + 1 misafir</span>
                                </div>

                                <div class="icon-slider">
                                    <i class="slider-item fa-solid fa-bed">
                                    </i>
                                    <span>1 çift + 2 yatak</span>
                                </div>
                                <div class="icon-slider">
                                    <i class="slider-item fas fa-utensils">
                                    </i>
                                    <span class="ic">Kahvaltı</span>
                                </div>
                                <div class="icon-slider">
                                    <i class="slider-item fas fa-swimming-pool">
                                    </i>
                                    <span >Özel Havuz</span>
                                </div>
                                <div style="opacity:0.4" class="icon-slider">
                                    <i class="slider-item fas fa-hot-tub">
                                    </i>
                                    <span class="ic">Jakuzi</span>
                                </div>
                                <div class="icon-slider">
                                    <i class="slider-item fab fa-gripfire">
                                    </i>
                                    <span class="ic">Şömine</span>
                                </div>
                            </ul>
                        </div>
                        
                    </section>
                    <div class="check">
                        <div class="checked1">
                            <div class="checked">
                                <i class="fa-solid fa-check"></i>
                                <p>Klima</p>
                            </div>
                            <div class="checked">
                                <i class="fa-solid fa-check"></i>
                                <p>Duş</p>
                            </div>
                            <div class="checked">
                                <i class="fa-solid fa-check"></i>
                                <p>Çalışma Alanı</p>
                            </div>
                        </div>
                        <div class="checked2">
                            <div class="checked">
                                <i class="fa-solid fa-check"></i>
                                <p>İnternet (Wi-Fi)</p>
                            </div>
                            <div class="checked">
                                <i class="fa-solid fa-check"></i>
                                <p>Banyo</p>
                            </div>
                            <div class="checked">
                                <i class="fa-solid fa-check"></i>
                                <p>Sigara İçilebilir</p>
                            </div>
                        </div>
                        <div class="checked3">
                            <div class="checked">
                                <i class="fa-solid fa-check"></i>
                                <p>Televizyon</p>
                            </div>
                            <div class="checked">
                                <i class="fa-solid fa-check"></i>
                                <p>Mutfak</p>
                            </div>
                            <div class="checked">
                                <i class="fa-solid fa-check"></i>
                                <p>Projeksiyon</p>
                            </div>
                        </div>
                    </div>
                    <div class="price">
                        <span>2,350 ₺</span>
                        <span>%4 İNDİRİM</span>
                        <span>2,250 ₺</span>

                    </div>
                    <a href="white-koti.php">
                        <button class="inspect">İncele
                            <i class="fa-solid fa-angle-right"></i>
                        </button>
                    </a>   
                </div>
            </div>
            
            <div class="bungalov">
                <div class="bungalov-img">
                    <img src="https://bungalovrehberi.com/storage/web/uploads/evler/97a3ad5b-2b46-4cbc-bd99-a04f316f7e6d-wshtg0.jpeg" alt="">
                </div>
                <div class="bungalov-details">
                    <div class="rate">
                        <div class="left">
                            <p>Tiny House Country</p>
                            <div class="location">
                                <p>Sakarya / Sapanca</p>
                                <i class="fa fa-map-marker-alt"></i>
                            </div>
                        </div>
                        <div class="right" >
                            <p class="rate-num">4.0</p>
                            <p>Keyifli</p>
                            <div class="share" id="share4">
                                <i class="fas fa-share"></i>
                                <p>Paylaş</p>
                            </div>    
                            <div class="popup">
                                <header class="header">
                                    <p>Sosyal medyada paylaşın</p>
                                    <i class="fas close fa-times"></i>
                                </header>
                                <div class="content">
                                    <ul class="icons">
                                        <a href="https://www.facebook.com/login.php?skip_api_login=1&api_key=966242223397117&signed_next=1&next=https%3A%2F%2Fwww.facebook.com%2Fshare.php%3Fu%3Dhttps%253A%252F%252Fbungalovrehberi.com%252F19%252Fkoti-sapanca%252Fwhite-koti%26title%3DWhite%2BKoti&cancel_url=https%3A%2F%2Fwww.facebook.com%2Fdialog%2Fclose_window%2F%3Fapp_id%3D966242223397117%26connect%3D0%23_%3D_&display=popup&locale=tr_TR" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                        <a href="https://twitter.com/intent/tweet?text=https://bungalovrehberi.com/19/koti-sapanca%2Fwhite-koti" target="_blank"><i class="fab fa-twitter"></i></a>
                                        <a href="https://tr.pinterest.com/pin/create/bookmarklet/?description=White%20Koti&is_video=false&url=https://bungalovrehberi.com/19/koti-sapanca%2Fwhite-koti"
                                        target="_blank"><i class="fab fa-pinterest"></i></a>
                                        <a href="https://api.whatsapp.com/send?text=https://bungalovrehberi.com/19/koti-sapanca%2Fwhite-koti"
                                        target="_blank"><i class="fab fa-whatsapp"></i></a>
                                        <a href="mailto:?subject=White Koti&amp;body=https://bungalovrehberi.com/19/koti-sapanca%2Fwhite-koti"
                                        target="_blank"><i class="fa-solid fa-envelope"></i></a>
                                    </ul>
                                    
                                </div>
                            </div>
                                   
                        </div>
                        <div id="share" >

                            <!-- facebook -->
                            <a class="facebook" href="https://www.facebook.com/share.php?u={{url}}&title={{title}}" target="blank"><i class="fab fa-facebook-f"></i></a>

                            <!-- twitter -->
                            <a class="twitter" href="https://twitter.com/intent/tweet?status={{title}}+{{url}}" target="blank"><i class="fab fa-twitter"></i></a>

                            <!-- google plus -->
                            <a class="googleplus" href="https://plus.google.com/share?url={{url}}" target="blank"><i class="fab fa-pinterest"></i></a>

                            <!-- linkedin -->
                            <a class="linkedin" href="https://www.linkedin.com/shareArticle?mini=true&url={{url}}&title={{title}}&source={{source}}" target="blank"><i class="fab fa-whatsapp"></i></a>
                            
                            <!-- pinterest -->
                            <a class="pinterest" href="https://pinterest.com/pin/create/bookmarklet/?media={{media}}&url={{url}}&is_video=false&description={{title}}" target="blank"><i class="fas fa-envelope"></i></a>
  
                        </div>

                        
                    </div>
                    
                    <section class="s-slider">
                        <div class="slider-container">
                            <ul class="slider-items">
                                <div class="icon-slider">
                                    <i class="slider-item fa-solid fa-user-friends">
                                    </i>
                                    <span>2 kişi + 1 misafir</span>
                                </div>

                                <div class="icon-slider">
                                    <i class="slider-item fa-solid fa-bed">
                                    </i>
                                    <span>1 çift + 2 yatak</span>
                                </div>
                                <div class="icon-slider">
                                    <i class="slider-item fas fa-utensils">
                                    </i>
                                    <span class="ic">Kahvaltı</span>
                                </div>
                                <div class="icon-slider">
                                    <i class="slider-item fas fa-swimming-pool">
                                    </i>
                                    <span >Özel Havuz</span>
                                </div>
                                <div style="opacity:0.4" class="icon-slider">
                                    <i class="slider-item fas fa-hot-tub">
                                    </i>
                                    <span class="ic">Jakuzi</span>
                                </div>
                                <div style="opacity:0.4" class="icon-slider">
                                    <i class="slider-item fab fa-gripfire">
                                    </i>
                                    <span class="ic">Şömine</span>
                                </div>
                            </ul>
                        </div>
                        
                    </section>
                    <div class="check">
                        <div class="checked1">
                            <div class="checked">
                                <i class="fa-solid fa-check"></i>
                                <p>Klima</p>
                            </div>
                            <div class="checked">
                                <i class="fa-solid fa-check"></i>
                                <p>Duş</p>
                            </div>
                            <div class="checked">
                                <i class="fa-solid fa-check"></i>
                                <p>Çalışma Alanı</p>
                            </div>
                        </div>
                        <div class="checked2">
                            <div class="checked">
                                <i class="fa-solid fa-check"></i>
                                <p>İnternet (Wi-Fi)</p>
                            </div>
                            <div class="checked">
                                <i class="fa-solid fa-check"></i>
                                <p>Banyo</p>
                            </div>
                            <div class="checked">
                                <i class="fa-solid fa-check"></i>
                                <p>Sigara İçilebilir</p>
                            </div>
                        </div>
                        <div class="checked3">
                            <div class="checked">
                                <i class="fa-solid fa-check"></i>
                                <p>Televizyon</p>
                            </div>
                            <div class="checked">
                                <i class="fa-solid fa-check"></i>
                                <p>Mutfak</p>
                            </div>
                            
                        </div>
                    </div>
                    <div class="price">
                        <span>2,350 ₺</span>
                        <span>%4 İNDİRİM</span>
                        <span>2,250 ₺</span>

                    </div>
                    <button class="inspect">İncele
                        <i class="fa-solid fa-angle-right"></i>
                    </button>
                </div>
            </div>
            
            <div class="bungalov">
                <div class="bungalov-img">
                    <img src="https://bungalovrehberi.com/storage/web/uploads/evler/97a3ad5b-2b46-4cbc-bd99-a04f316f7e6d-wshtg0.jpeg" alt="">
                </div>
                <div class="bungalov-details">
                    <div class="rate">
                        <div class="left">
                            <p>White Koti</p>
                            <div class="location">
                                <p>Sakarya / Sapanca</p>
                                <i class="fa fa-map-marker-alt"></i>
                            </div>
                        </div>
                        <div class="right" >
                            <p class="rate-num">4.0</p>
                            <p>Keyifli</p>
                            <div class="share" id="share5">
                                <i class="fas fa-share"></i>
                                <p>Paylaş</p>
                            </div>    
                            <div class="popup">
                                <header class="header">
                                    <p>Sosyal medyada paylaşın</p>
                                    <i class="fas close fa-times"></i>
                                </header>
                                <div class="content">
                                    <ul class="icons">
                                        <a href="https://www.facebook.com/login.php?skip_api_login=1&api_key=966242223397117&signed_next=1&next=https%3A%2F%2Fwww.facebook.com%2Fshare.php%3Fu%3Dhttps%253A%252F%252Fbungalovrehberi.com%252F19%252Fkoti-sapanca%252Fwhite-koti%26title%3DWhite%2BKoti&cancel_url=https%3A%2F%2Fwww.facebook.com%2Fdialog%2Fclose_window%2F%3Fapp_id%3D966242223397117%26connect%3D0%23_%3D_&display=popup&locale=tr_TR" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                        <a href="https://twitter.com/intent/tweet?text=https://bungalovrehberi.com/19/koti-sapanca%2Fwhite-koti" target="_blank"><i class="fab fa-twitter"></i></a>
                                        <a href="https://tr.pinterest.com/pin/create/bookmarklet/?description=White%20Koti&is_video=false&url=https://bungalovrehberi.com/19/koti-sapanca%2Fwhite-koti"
                                        target="_blank"><i class="fab fa-pinterest"></i></a>
                                        <a href="https://api.whatsapp.com/send?text=https://bungalovrehberi.com/19/koti-sapanca%2Fwhite-koti"
                                        target="_blank"><i class="fab fa-whatsapp"></i></a>
                                        <a href="mailto:?subject=White Koti&amp;body=https://bungalovrehberi.com/19/koti-sapanca%2Fwhite-koti"
                                        target="_blank"><i class="fa-solid fa-envelope"></i></a>
                                    </ul>
                                    
                                </div>
                            </div>
                                   
                        </div>
                        <div id="share" >

                            <!-- facebook -->
                            <a class="facebook" href="https://www.facebook.com/share.php?u={{url}}&title={{title}}" target="blank"><i class="fab fa-facebook-f"></i></a>

                            <!-- twitter -->
                            <a class="twitter" href="https://twitter.com/intent/tweet?status={{title}}+{{url}}" target="blank"><i class="fab fa-twitter"></i></a>

                            <!-- google plus -->
                            <a class="googleplus" href="https://plus.google.com/share?url={{url}}" target="blank"><i class="fab fa-pinterest"></i></a>

                            <!-- linkedin -->
                            <a class="linkedin" href="https://www.linkedin.com/shareArticle?mini=true&url={{url}}&title={{title}}&source={{source}}" target="blank"><i class="fab fa-whatsapp"></i></a>
                            
                            <!-- pinterest -->
                            <a class="pinterest" href="https://pinterest.com/pin/create/bookmarklet/?media={{media}}&url={{url}}&is_video=false&description={{title}}" target="blank"><i class="fas fa-envelope"></i></a>
  
                        </div>

                        
                    </div>
                    
                    <section class="s-slider">
                        <div class="slider-container">
                            <ul class="slider-items">
                                <div class="icon-slider">
                                    <i class="slider-item fa-solid fa-user-friends">
                                    </i>
                                    <span>2 kişi + 1 misafir</span>
                                </div>

                                <div class="icon-slider">
                                    <i class="slider-item fa-solid fa-bed">
                                    </i>
                                    <span>1 çift + 2 yatak</span>
                                </div>
                                <div class="icon-slider">
                                    <i class="slider-item fas fa-utensils">
                                    </i>
                                    <span class="ic">Kahvaltı</span>
                                </div>
                                <div class="icon-slider">
                                    <i class="slider-item fas fa-swimming-pool">
                                    </i>
                                    <span >Özel Havuz</span>
                                </div>
                                <div class="icon-slider">
                                    <i class="slider-item fas fa-hot-tub">
                                    </i>
                                    <span class="ic">Jakuzi</span>
                                </div>
                                <div class="icon-slider">
                                    <i class="slider-item fab fa-gripfire">
                                    </i>
                                    <span class="ic">Şömine</span>
                                </div>
                            </ul>
                        </div>
                        
                    </section>
                    <div class="check">
                        <div class="checked1">
                            <div class="checked">
                                <i class="fa-solid fa-check"></i>
                                <p>Klima</p>
                            </div>
                            <div class="checked">
                                <i class="fa-solid fa-check"></i>
                                <p>Duş</p>
                            </div>
                            <div class="checked">
                                <i class="fa-solid fa-check"></i>
                                <p>Çalışma Alanı</p>
                            </div>
                        </div>
                        <div class="checked2">
                            <div class="checked">
                                <i class="fa-solid fa-check"></i>
                                <p>İnternet (Wi-Fi)</p>
                            </div>
                            <div class="checked">
                                <i class="fa-solid fa-check"></i>
                                <p>Banyo</p>
                            </div>
                            <div class="checked">
                                <i class="fa-solid fa-check"></i>
                                <p>Sigara İçilebilir</p>
                            </div>
                        </div>
                        <div class="checked3">
                            <div class="checked">
                                <i class="fa-solid fa-check"></i>
                                <p>Televizyon</p>
                            </div>
                            <div class="checked">
                                <i class="fa-solid fa-check"></i>
                                <p>Mutfak</p>
                            </div>
                            <div class="checked">
                                <i class="fa-solid fa-check"></i>
                                <p>Projeksiyon</p>
                            </div>
                        </div>
                    </div>
                    <div class="price">
                        <span>2,350 ₺</span>
                        <span>%4 İNDİRİM</span>
                        <span>2,250 ₺</span>

                    </div>
                    <button class="inspect">İncele
                        <i class="fa-solid fa-angle-right"></i>
                    </button>
                </div>
            </div>
            
            <div class="bungalov">
                <div class="bungalov-img">
                    <img src="https://bungalovrehberi.com/storage/web/uploads/evler/97a3ad5b-2b46-4cbc-bd99-a04f316f7e6d-wshtg0.jpeg" alt="">
                </div>
                <div class="bungalov-details">
                    <div class="rate">
                        <div class="left">
                            <p>White Koti</p>
                            <div class="location">
                                <p>Sakarya / Sapanca</p>
                                <i class="fa fa-map-marker-alt"></i>
                            </div>
                        </div>
                        <div class="right" >
                            <p class="rate-num">4.0</p>
                            <p>Keyifli</p>
                            <div class="share" id="share6">
                                <i class="fas fa-share"></i>
                                <p>Paylaş</p>
                            </div>    
                            <div class="popup">
                                <header class="header">
                                    <p>Sosyal medyada paylaşın</p>
                                    <i class="fas close fa-times"></i>
                                </header>
                                <div class="content">
                                    <ul class="icons">
                                        <a href="https://www.facebook.com/login.php?skip_api_login=1&api_key=966242223397117&signed_next=1&next=https%3A%2F%2Fwww.facebook.com%2Fshare.php%3Fu%3Dhttps%253A%252F%252Fbungalovrehberi.com%252F19%252Fkoti-sapanca%252Fwhite-koti%26title%3DWhite%2BKoti&cancel_url=https%3A%2F%2Fwww.facebook.com%2Fdialog%2Fclose_window%2F%3Fapp_id%3D966242223397117%26connect%3D0%23_%3D_&display=popup&locale=tr_TR" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                        <a href="https://twitter.com/intent/tweet?text=https://bungalovrehberi.com/19/koti-sapanca%2Fwhite-koti" target="_blank"><i class="fab fa-twitter"></i></a>
                                        <a href="https://tr.pinterest.com/pin/create/bookmarklet/?description=White%20Koti&is_video=false&url=https://bungalovrehberi.com/19/koti-sapanca%2Fwhite-koti"
                                        target="_blank"><i class="fab fa-pinterest"></i></a>
                                        <a href="https://api.whatsapp.com/send?text=https://bungalovrehberi.com/19/koti-sapanca%2Fwhite-koti"
                                        target="_blank"><i class="fab fa-whatsapp"></i></a>
                                        <a href="mailto:?subject=White Koti&amp;body=https://bungalovrehberi.com/19/koti-sapanca%2Fwhite-koti"
                                        target="_blank"><i class="fa-solid fa-envelope"></i></a>
                                    </ul>
                                    
                                </div>
                            </div>
                                   
                        </div>
                        <div id="share" >

                            <!-- facebook -->
                            <a class="facebook" href="https://www.facebook.com/share.php?u={{url}}&title={{title}}" target="blank"><i class="fab fa-facebook-f"></i></a>

                            <!-- twitter -->
                            <a class="twitter" href="https://twitter.com/intent/tweet?status={{title}}+{{url}}" target="blank"><i class="fab fa-twitter"></i></a>

                            <!-- google plus -->
                            <a class="googleplus" href="https://plus.google.com/share?url={{url}}" target="blank"><i class="fab fa-pinterest"></i></a>

                            <!-- linkedin -->
                            <a class="linkedin" href="https://www.linkedin.com/shareArticle?mini=true&url={{url}}&title={{title}}&source={{source}}" target="blank"><i class="fab fa-whatsapp"></i></a>
                            
                            <!-- pinterest -->
                            <a class="pinterest" href="https://pinterest.com/pin/create/bookmarklet/?media={{media}}&url={{url}}&is_video=false&description={{title}}" target="blank"><i class="fas fa-envelope"></i></a>
  
                        </div>

                        
                    </div>
                    
                    <section class="s-slider">
                        <div class="slider-container">
                            <ul class="slider-items">
                                <div class="icon-slider">
                                    <i class="slider-item fa-solid fa-user-friends">
                                    </i>
                                    <span>2 kişi + 1 misafir</span>
                                </div>

                                <div class="icon-slider">
                                    <i class="slider-item fa-solid fa-bed">
                                    </i>
                                    <span>1 çift + 2 yatak</span>
                                </div>
                                <div class="icon-slider">
                                    <i class="slider-item fas fa-utensils">
                                    </i>
                                    <span class="ic">Kahvaltı</span>
                                </div>
                                <div class="icon-slider">
                                    <i class="slider-item fas fa-swimming-pool">
                                    </i>
                                    <span >Özel Havuz</span>
                                </div>
                                <div class="icon-slider">
                                    <i class="slider-item fas fa-hot-tub">
                                    </i>
                                    <span class="ic">Jakuzi</span>
                                </div>
                                <div class="icon-slider">
                                    <i class="slider-item fab fa-gripfire">
                                    </i>
                                    <span class="ic">Şömine</span>
                                </div>
                            </ul>
                        </div>
                        
                    </section>
                    <div class="check">
                        <div class="checked1">
                            <div class="checked">
                                <i class="fa-solid fa-check"></i>
                                <p>Klima</p>
                            </div>
                            <div class="checked">
                                <i class="fa-solid fa-check"></i>
                                <p>Duş</p>
                            </div>
                            <div class="checked">
                                <i class="fa-solid fa-check"></i>
                                <p>Çalışma Alanı</p>
                            </div>
                        </div>
                        <div class="checked2">
                            <div class="checked">
                                <i class="fa-solid fa-check"></i>
                                <p>İnternet (Wi-Fi)</p>
                            </div>
                            <div class="checked">
                                <i class="fa-solid fa-check"></i>
                                <p>Banyo</p>
                            </div>
                            <div class="checked">
                                <i class="fa-solid fa-check"></i>
                                <p>Sigara İçilebilir</p>
                            </div>
                        </div>
                        <div class="checked3">
                            <div class="checked">
                                <i class="fa-solid fa-check"></i>
                                <p>Televizyon</p>
                            </div>
                            <div class="checked">
                                <i class="fa-solid fa-check"></i>
                                <p>Mutfak</p>
                            </div>
                            <div class="checked">
                                <i class="fa-solid fa-check"></i>
                                <p>Projeksiyon</p>
                            </div>
                        </div>
                    </div>
                    <div class="price">
                        <span>2,350 ₺</span>
                        <span>%4 İNDİRİM</span>
                        <span>2,250 ₺</span>

                    </div>
                    <button class="inspect">İncele
                        <i class="fa-solid fa-angle-right"></i>
                    </button>
                </div>
            </div>
            
            <div class="bungalov" id="bung">
                <div class="bungalov-img">
                    <img src="https://bungalovrehberi.com/storage/web/uploads/evler/97a3ad5b-2b46-4cbc-bd99-a04f316f7e6d-wshtg0.jpeg" alt="">
                </div>
                <div class="bungalov-details">
                    <div class="rate">
                        <div class="left">
                            <p>White Koti</p>
                            <div class="location">
                                <p>Sakarya / Sapanca</p>
                                <i class="fa fa-map-marker-alt"></i>
                            </div>
                        </div>
                        <div class="right">
                            <p class="rate-num">4.0</p>
                            <p>Keyifli</p>
                            <div class="share" id="share7">
                                <i class="fas fa-share"></i>
                                <p>Paylaş</p>
                            </div>    
                            <div class="popup">
                                <header class="header">
                                    <p>Sosyal medyada paylaşın</p>
                                    <i class="fas close fa-times"></i>
                                </header>
                                <div class="content">
                                    <ul class="icons">
                                        <a href="https://www.facebook.com/login.php?skip_api_login=1&api_key=966242223397117&signed_next=1&next=https%3A%2F%2Fwww.facebook.com%2Fshare.php%3Fu%3Dhttps%253A%252F%252Fbungalovrehberi.com%252F19%252Fkoti-sapanca%252Fwhite-koti%26title%3DWhite%2BKoti&cancel_url=https%3A%2F%2Fwww.facebook.com%2Fdialog%2Fclose_window%2F%3Fapp_id%3D966242223397117%26connect%3D0%23_%3D_&display=popup&locale=tr_TR" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                        <a href="https://twitter.com/intent/tweet?text=https://bungalovrehberi.com/19/koti-sapanca%2Fwhite-koti" target="_blank"><i class="fab fa-twitter"></i></a>
                                        <a href="https://tr.pinterest.com/pin/create/bookmarklet/?description=White%20Koti&is_video=false&url=https://bungalovrehberi.com/19/koti-sapanca%2Fwhite-koti"
                                        target="_blank"><i class="fab fa-pinterest"></i></a>
                                        <a href="https://api.whatsapp.com/send?text=https://bungalovrehberi.com/19/koti-sapanca%2Fwhite-koti"
                                        target="_blank"><i class="fab fa-whatsapp"></i></a>
                                        <a href="mailto:?subject=White Koti&amp;body=https://bungalovrehberi.com/19/koti-sapanca%2Fwhite-koti"
                                        target="_blank"><i class="fa-solid fa-envelope"></i></a>
                                    </ul>
                                    
                                </div>
                            </div>
                                   
                        </div>
                        <div id="share" >

                            <!-- facebook -->
                            <a class="facebook" href="https://www.facebook.com/share.php?u={{url}}&title={{title}}" target="blank"><i class="fab fa-facebook-f"></i></a>

                            <!-- twitter -->
                            <a class="twitter" href="https://twitter.com/intent/tweet?status={{title}}+{{url}}" target="blank"><i class="fab fa-twitter"></i></a>

                            <!-- google plus -->
                            <a class="googleplus" href="https://plus.google.com/share?url={{url}}" target="blank"><i class="fab fa-pinterest"></i></a>

                            <!-- linkedin -->
                            <a class="linkedin" href="https://www.linkedin.com/shareArticle?mini=true&url={{url}}&title={{title}}&source={{source}}" target="blank"><i class="fab fa-whatsapp"></i></a>
                            
                            <!-- pinterest -->
                            <a class="pinterest" href="https://pinterest.com/pin/create/bookmarklet/?media={{media}}&url={{url}}&is_video=false&description={{title}}" target="blank"><i class="fas fa-envelope"></i></a>
  
                        </div>

                        
                    </div>
                    
                    <section class="s-slider">
                        <div class="slider-container">
                            <ul class="slider-items">
                                <div class="icon-slider">
                                    <i class="slider-item fa-solid fa-user-friends">
                                    </i>
                                    <span>2 kişi + 1 misafir</span>
                                </div>

                                <div class="icon-slider">
                                    <i class="slider-item fa-solid fa-bed">
                                    </i>
                                    <span>1 çift + 2 yatak</span>
                                </div>
                                <div class="icon-slider">
                                    <i class="slider-item fas fa-utensils">
                                    </i>
                                    <span class="ic">Kahvaltı</span>
                                </div>
                                <div class="icon-slider">
                                    <i class="slider-item fas fa-swimming-pool">
                                    </i>
                                    <span >Özel Havuz</span>
                                </div>
                                <div class="icon-slider">
                                    <i class="slider-item fas fa-hot-tub">
                                    </i>
                                    <span class="ic">Jakuzi</span>
                                </div>
                                <div class="icon-slider">
                                    <i class="slider-item fab fa-gripfire">
                                    </i>
                                    <span class="ic">Şömine</span>
                                </div>
                            </ul>
                        </div>
                        
                    </section>
                    <div class="check">
                        <div class="checked1">
                            <div class="checked">
                                <i class="fa-solid fa-check"></i>
                                <p>Klima</p>
                            </div>
                            <div class="checked">
                                <i class="fa-solid fa-check"></i>
                                <p>Duş</p>
                            </div>
                            <div class="checked">
                                <i class="fa-solid fa-check"></i>
                                <p>Çalışma Alanı</p>
                            </div>
                        </div>
                        <div class="checked2">
                            <div class="checked">
                                <i class="fa-solid fa-check"></i>
                                <p>İnternet (Wi-Fi)</p>
                            </div>
                            <div class="checked">
                                <i class="fa-solid fa-check"></i>
                                <p>Banyo</p>
                            </div>
                            <div class="checked">
                                <i class="fa-solid fa-check"></i>
                                <p>Sigara İçilebilir</p>
                            </div>
                        </div>
                        <div class="checked3">
                            <div class="checked">
                                <i class="fa-solid fa-check"></i>
                                <p>Televizyon</p>
                            </div>
                            <div class="checked">
                                <i class="fa-solid fa-check"></i>
                                <p>Mutfak</p>
                            </div>
                            <div class="checked">
                                <i class="fa-solid fa-check"></i>
                                <p>Projeksiyon</p>
                            </div>
                        </div>
                    </div>
                    <div class="price">
                        <span>2,350 ₺</span>
                        <span>%4 İNDİRİM</span>
                        <span>2,250 ₺</span>

                    </div>
                    <button class="inspect">İncele
                        <i class="fa-solid fa-angle-right"></i>
                    </button>
                </div>
            </div>
            
           
            
        </main> 
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.24.1/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script>
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
                
            
            }
            $(function() {
                //defining all needed variables
                var $overlay = $('.overlay');
                var $mainPopUp = $('.main-popup')
                var $signIn = $('#sign-in');
                var $register = $('#register');
                var $formSignIn = $('form.sign-in');
                var $formRegister = $('form.register');
                
                var $firstChild = $('nav ul li:first-child');
                var $secondChild = $('nav ul li:nth-child(2)');
                var $thirdChild = $('nav ul li:nth-child(3)');
                
                //defining function to create underline initial state on document load
                function initialState() {
                    $('.underline').css({
                    "width": $firstChild.width(),
                    "left": $firstChild.position().left,
                    "top": $firstChild.position().top + $firstChild.outerHeight(true) + 'px'
                    });
                }
                initialState(); //() used after calling function to call function immediately on doc load
                
                //defining function to change underline depending on which li is active
                function changeUnderline(el) {
                    $('.underline').css({
                    "width": el.width(),
                    "left": el.position().left,
                    "top": el.position().top + el.outerHeight(true) + 'px'
                    });
                } //note: have not called the function...don't want it called immediately
                
                $firstChild.on('click', function(){
                    var el = $firstChild;
                    changeUnderline(el); //call the changeUnderline function with el as the perameter within the called function
                    $secondChild.removeClass('active');
                    $thirdChild.removeClass('active');
                    $(this).addClass('active');
                });
                
                $secondChild.on('click', function(){
                    var el = $secondChild;
                    changeUnderline(el); //call the changeUnderline function with el as the perameter within the called function
                    $firstChild.removeClass('active');
                    $thirdChild.removeClass('active');
                    $(this).addClass('active');
                });
                
                $thirdChild.on('click', function(){
                    var el = $thirdChild;
                    changeUnderline(el); //call the changeUnderline function with el as the perameter within the called function
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
                    e.preventDefault(); //used to prevent submission of form...remove for real use
                });
            });
        </script>
<?php include("footer.html")?>
    
