<?php include("header.html")?>



<form class="contact" action="" method="POST">
    <!-- <div class="title">
        <p style="text-align: center;">Bungalov Rehberi İletişim</p>
    </div> -->
    <h2 style="padding:20px">Bize Yazın</h2>
    <div class="name">
        <div class="first_n">
            <label for="">Ad
                <input type="text" name="ad" pattern="^[a-zA-Z]{2,30}$" required placeholder="Ad">
            </label>
        </div>
        <div class="last_n">
            <label for="">Soyad
                <input type="text" pattern="^[a-zA-Z]{2,30}$" name="soyad" required placeholder="Soyad">
            </label>
        </div>
    </div>
    <div class="phone-mail">
        <div class="phone">
            <label for="">Telefon
                <input type="text" pattern="^\d{10-11}$"  name="telefon" placeholder="Telefon">
            </label>
        </div>
        <div class="mail">
            <label for="">E-posta
                <input type="email" required name="mail" placeholder="E-posta">
            </label>
        </div>
    </div>
    <div class="message">
        <label for="">Mesajınız
            <textarea name="message" id="" cols="30" rows="5"></textarea>
        </label>   
    </div>
    <button id="submitBtn" type="submit" onclick="submitForm()" class=""><i class="fa-solid fa-paper-plane"></i> Gönder</button>
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