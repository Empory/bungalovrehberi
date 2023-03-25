<?php include("header.html")?>


<h2 style="padding:20px 0;" title="rezervasyon">Rezervasyon Oluştur</h2>

<div class="progresses">

    <div class="progres">
        <div class="home-choose-step">
            <i class="fa-solid fa-check"></i>
            <p>Bungalov Seçimi</p>
        </div>
        <hr>
        <div class="personal-info-step">
            <p class="step2">2</p>
            <p>Kişisel Bilgiler</p>
        </div>
        <hr size="20px">
        <div class="payment-step">
            <p class="step3">3</p>
            <p>Ödeme</p>
        </div>
        
    </div>    
    <!-- <div class="progress-bar-container">
        <div id="progress-bar"></div>
        <div class="circles-container">
            <div class="cir activ">
                <i style="color:white" class="fa-solid fa-check"></i>
                <p>Bungalov Seçimi</p>
            </div>
            <div class="circle active">
                <h3>2</h3>
                <p>Kişisel Bilgiler</p>
            </div>
            <div class="circle ">
                <h3>3</h3>
                <p>Ödeme</p>
            </div>
            
        </div>
    </div> -->
    <div class="white-koti">
        <div class="white-koti-title">
            <i class="fa-solid fa-home"></i>
            <p>White Koti</p>
        </div>
        <div class="white-koti-body">
            <img src="https://bungalovrehberi.com/storage/web/uploads/evler/97a3ad5b-2b46-4cbc-bd99-a04f316f7e6d-wshtg0.jpeg" alt="">
            <div class="date">
                
                <div style="text-align: left;" class="enter-date">
                    <p>Giriş Tarihi</p>
                    <p style="font-weight:bold">25 Nisan 2023</p>
                    <p>Salı 10:00</p>
                </div>

                <div style="text-align:right;" class="exit-date">
                    <p>Çıkış Tarihi</p>
                    <p style="font-weight: bold;">24 Mayıs 2023</p>
                    <p>Çarşamba 10:00</p>
                </div>
            </div>
            <hr>
            <div class="person">
                <div style="text-align: left;" class="person-guest">
                    <p>Kişi Sayısı</p>
                    <p>Ekstra Misafir</p>
                    
                </div>
                <div style="text-align: right;" class="count">
                    <p style="font-weight:bold">1 Kişi</p>
                    <p style="font-weight:bold">1 Kişi</p>
                </div>
                
            </div>
            <hr>
            <div class="total-price">
                <p style="font-weight:bold">Toplam Fiyat: </p>
                <p style="font-weight:bold">74,000 ₺</p>
            </div>
        </div>
        
    </div>
    <div class="contact-infos">
        <div class="contact-title">
            <i class="fa-solid fa-phone-alt"></i>
            <p>İletişim Bilgileri</p>
        </div>
        <div class="c-body">

            <div class="c-infos">
                <div class="phone">
                    <label for="">Telefon</label>
                    <input type="text" placeholder="Telefon">
                </div>
                <div class="email">
                    <label for="">Email</label>
                    <input type="email" placeholder="Email">
                </div>
            </div>
            <div class="offers">
                <input type="checkbox" checked name="" id="">
                <label for="">Kampanyalardan ve bana özel fırsatlardan haberdar olmak istiyorum. <a href="">(Kişisel Verilerin İşlenmesi)</a></label>
            </div>
        </div>
    </div>
    <div class="guest-infos">
        <div class="guest-title">
            <i class="fa-solid fa-users"></i>
            <p>Misafir Bilgileri</p>
        </div>
        <div class="g-body">

            <div class="first-person">
                <p>1. Kişi Bilgileri</p>
                <hr>
                <div class="g-infos-1">

                    <div class="first_name">
                        <label for="">Ad</label>
                        <input type="text" placeholder="Ad">
                    </div>
                    <div class="last_name">
                        <label for="">Soyad</label>
                        <input type="text" placeholder="Soyad">
                    </div>
                    <div class="id">
                        <label for="">TC Kimlik No</label>
                        <input type="text" placeholder="TC Kimlik No">
                    </div>
                </div>
            </div>
            <div class="second-person">
                <p>2. Kişi Bilgileri</p>
                <hr>
                <div class="g-infos-2">
                    <div class="first_name">
                        <label for="">Ad</label>
                        <input type="text" placeholder="Ad">
                    </div>
                    <div class="last_name">
                        <label for="">Soyad</label>
                        <input type="text" placeholder="Soyad">
                    </div>
                    <div class="id">
                        <label for="">TC Kimlik No</label>
                        <input type="text" placeholder="TC Kimlik No">
                    </div>
                    
                </div>
            </div>
        </div>
        
        
    </div>
    <div class="note">
        <div class="note-title">
            <i class="fa-solid fa-pen"></i>
            <p>Not <span style="color:gray; font-size:14px;">(İsteğe Bağlı)</span> </p>
        </div>
        <div class="note-body">
            <textarea name="" id="" cols="38" rows="6"></textarea>
            
        </div>
    </div>
    <div class="form-group">
        <button class="btn" id="prev" disabled>Geri</button>
        <button class="btn" id="next">Ödeme Seçimi İçin Devam Et</button>
    </div>

</div>

<?php include("footer.html")?>