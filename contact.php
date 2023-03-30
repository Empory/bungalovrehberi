<?php include("header.html")?>



<form onsubmit="return false;" class="contact" action="" method="POST">
    <!-- <div class="title">
        <p style="text-align: center;">Bungalov Rehberi İletişim</p>
    </div> -->
    <h2 style="padding:20px">Bize Yazın</h2>
    <div class="name">
        <div class="first_n">
            <label for="">Ad 
                <input class="valid" type="text"  name="ad" min="3" max="35"  required placeholder="Ad">
                
            </label>
        </div>
        <div class="last_n">
            <label for="">Soyad
                 <input class="valid" type="text"  name="soyad" required placeholder="Soyad">
                 
                  
            </label>
        </div>
    </div>
    <div class="phone-mail">
        <div class="phone">
            <label for="">Telefon
                <input class="tel" id="phone" type="tel"  required pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"  name="telefon" placeholder="Telefon">
                
                
            </label>
        </div>
        <div class="mail">
            <label for="">E-posta
                <input class="valid" type="email" required name="mail" id="mail" placeholder="E-posta">
                
                
            </label>
        </div>
    </div>
    <div class="message">
        <label for="">Mesajınız
            <textarea required class="valid" name="message" id="" cols="30" rows="5"></textarea>
            
        </label>   
    </div>
    <button id="submitBtn"  type=""  class=""><i class="fa-solid fa-paper-plane"></i> Gönder</button>
    <div class="iletisim">
        <h2 style="padding:20px">İletişim</h2>
        <div class="adres">
            <h5>Adres</h5>
            <p>Çark Cd. Değirmenci Apt. Kat : 3 No : 74 Pk: 54100 Adapazarı / Sakarya</p>
        </div>
        <div class="e-posta">
            <h5>E-posta</h5>
            <p>pakajanstr@gmail.com</p>
        </div>
        <div class="telefon">
            <h5>Telefon</h5>
            <p>+90 542 254 99 44</p>
        </div>
    </div>
</form>
    



<?php include("footer.html")?>