<?php include("header.html")?>


  <!DOCTYPE html>
  <html>
  <head>
    
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
  * {box-sizing: border-box}
  .mySlides1, .mySlides2 {display: none}
  img {vertical-align: middle;

  }

  /* Slideshow container */
  .slideshow-container {
      padding-top: 10px;
    max-width: 1000px;
    position: static;
    margin: auto;
  }
  .s-slider span{
    color: red;
  }

  /* Next & previous buttons */
  .prev, .next {
    cursor: pointer;
    position: absolute;
    top: 50%;
    width: auto;
    padding: 20px;
    margin-top: -22px;
    color: white;
    font-weight: bold;
    font-size: 18px;
    transition: 0.6s ease;
    border-radius: 0 3px 3px 0;
    user-select: none;
  }
  
  /* Position the "next button" to the right */
  .next {
    right: 10px;
    border-radius: 3px 0 0 3px;
  }
  
  /* On hover, add a grey background color */
  .prev:hover, .next:hover {
    background-color: #f1f1f1;
    color: black;
  }
  .koti-detail{
    display: flex;
    justify-content: space-between;
    padding: 15px;
  }
  
  .koti-detail .left{
    display:flex;
    flex-direction: column;
  }
  .koti-detail .right{
    display: flex;
    gap: 15px;
    text-align:center;
    
  }
  
  .koti-detail a{
    text-decoration: none;
    
  }
  .res{
    border: 1px solid rgb(221,223,224);;
    border-radius: 15px;
    text-align: center;
    
  }
  .rate-num{
    background-color:rgb(21,128,61);
    color:white;
    padding: 5px 10px;
    border-radius: 5px;

  }
  .date, .person, .guest{
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 15px;
  }
  .person p, .guest p{
    margin-top: 15px;
  }
  .date input{
    border: 0;
    outline: none;
    width: 40vw;
  }
  .res-create{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
  }
  .res-detail{
    font-weight: bold;
    border-top-left-radius: 15px;
    display: flex;
    font-size: 20px;
    padding-top: 10px;
    align-items: center;
    gap: 15px;
    justify-content: space-around;
    border-top-right-radius: 15px;
    
    background-color: rgb(221,223,224);

  }
  .res-detail .left{
    font-size: 20px;
    display: flex;
    gap: 10px;
    justify-content: center;
    align-items: center;
  }
  .res-detail .right p{
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .res-detail .right{
    margin: 0 auto;
    color: white;
    margin:0;
    padding-top: 55px;
    padding: 5px 15px;
    margin: 0 0 10px  0;
    background-color: red;
    
    
  }
  select{
    border: 0;
    outline: none;
  }
  .money{
    max-width: 300px;
    border: 1px solid gray;
    border-radius: 5px;
    display: flex;
    padding:5px 20px ;
    gap: 15px;
    align-items: center;
    justify-content: center;
  }
  .discount span{
    font-size: 40px;
    font-weight: bold;
  }

  .money p:first-child{
    text-decoration: line-through;
    
  }
  .money span:last-child{
    font-weight: bold;
  }
  
  .money span:last-child, .money p:last-child{
    font-size: 20px;
  }
  .time{
    padding: 0 10px;
    padding-top:10px;
    border-radius: 5px;
    border: 1px solid gray;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 10px;
    gap: 10px;
  }
  .request{
    background-color:rgb(21,128,61);
    color:white;
    font-size:20px;
    border-radius:5px;
    padding:10px;
    margin:10px 0;

  }
  .time span{
    color: gray;
    font-size: 14px;
  }
  @import url("https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600&display=swap");

* {
  margin: 0;
  padding: 0;
}

body {
  font-family: "Manrope", sans-serif;
  background: #ededed;
}

.calendar {
  max-width: 420px;
  padding:20px 10px;
  box-sizing: border-box;
  background: #ffffff;
  border-radius: 12px;
  box-shadow: 0px 0px 3px #dadada;
}

.calendar .calendar-dates,
.calendar .calendar-day-name {
  display: grid;
  grid-template-columns: repeat(7, 1fr);
  grid-gap: 8px;
}

.calendar .calendar-dates-day {
  font-family: "Manrope", sans-serif;
  font-size: 13px;
  border: 1px solid #efefef;
  padding: 4px;
  box-sizing: border-box;
  background: #f8f8f8;
  border-radius: 4px;
  color: #333;
}

.calendar .calendar-dates-day-empty {
  background: none;
  border: 0;
  color: #dcdcdc;
  min-height: 28px;
}

.calendar .calendar-day-name div {
  text-align: center;
  margin-bottom: 12px;
  font-size: 13px;
  font-weight: 700;
}

.calendar .calendar-title {
  padding-bottom: 16px;
  text-align: center;
  font-weight: 500;
  display: flex;
  justify-content: space-between;
  border-bottom: 1px solid #ddd;
  margin-bottom: 12px;
}

.calendar .calendar-dates-day.today-date {
  background: #555;
  color: #fff;
}

.calendar #prevMonth,
.calendar #nextMonth,
.calendar #today {
  padding: 2px 6px;
  box-sizing: border-box;
  font-family: "Manrope", sans-serif;
  font-size: 20px;
  line-height: 20px;
  border: 1px solid #e0e0e0;
  border-radius: 4px;
  cursor: pointer;
  color: #333;
}

.calendar #today {
  font-size: 13px;
}

.calendar .calendar-title-text {
  display: flex;
  align-items: center;
  font-size: 14px;
  font-weight: 700;
}

.calendar .calendar-button-group {
  display: flex;
  align-items: center;
  gap: 8px;
}
.suitability{
  padding:10px;
}
.status{
  
  display:flex;
  align-items: center;
  justify-content: space-between;
}
.status .right{
  gap:5px;
  display: flex;
  align-items: center;
  justify-content: center;
  
}
.status .right p:first-child{
  background-color: #f9c3c3;
  border: 1px solid #bcbcbc;
  border-radius: 15px;
  height: 15px;
  margin-right: 5px;
  width: 15px;
}
.status .right p:nth-child(3){
  background-color: #fff;
  border: 1px solid #bcbcbc;
  border-radius: 15px;
  height: 15px;
  margin-right: 5px;
  width: 15px;
}
.should-know{
  
  padding: 25px 0;
 
}
.should-know p{
  text-align: center;
  
  font-size: 20px;
  font-weight: bold;
}
.should-know ul{
  display: flex;
  flex-direction: column;
}
.should-know li{
  padding: 5px;
}
.info p:first-child{
  font-size: 20px;
  font-weight: bold;
}
.koti-other-homes img{
  max-width: 300px;
  max-height: 300px;
}
.koti-other-homes p:first-child, .comments p:first-child{
  font-size: 19px;
  font-weight: bold;
}
.navy-blue-koti p, .brown-koti p,.comments p{
  margin-top: 15px;
  font-size: 16px;
  color: rgb(16,66,112);
  font-weight: bold;
}

.comment{
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 15px;
  
  
}
.stars{
  display: flex;
  align-items: center;
  justify-content: center;
}
.comments{
  padding: 15px;
}
.comments button{
  display: flex;
  text-align: right;
  margin-left: auto;
  margin-right: 0;
  background-color: rgb(16,66,112);
}
/* .popup-modal{
    background-color: #000;
    background-color: rgba(0,0,0,.75);
    box-sizing: border-box;
    height: 100%;
    overflow: auto;
    padding: 20px;
    position: fixed;
    text-align: center;
    top: 0;
    width: 100%;
    z-index: 1;
}

.sign-popup{
  background: #fff;
  border-radius: 8px;
  -o-box-shadow: 0 0 10px #000;
  -ms-box-shadow: 0 0 10px #000;
  box-shadow: 0 0 10px #000;
  box-sizing: border-box;
  display: none;
  max-width: 500px;
  padding: 15px 30px;
  position: relative;
  text-align: left;
  vertical-align: middle;
  width: 90%;
  z-index: 2;


} */

  </style>
  </head>
  <body>


  <div class="slideshow-container" style="display:none;">
    <div class="mySlides1">
      <img src="img_nature_wide.jpg" style="width:100%">
    </div>

    <div class="mySlides1">
      <img src="img_snow_wide.jpg" style="width:100%">
    </div>

    <div class="mySlides1">
      <img src="img_mountains_wide.jpg" style="width:100%">
    </div>

    <a class="prev" onclick="plusSlides(-1, 0)">&#10094;</a>
    <a class="next" onclick="plusSlides(1, 0)">&#10095;</a>
  </div>

  <div class="slideshow-container">
    <div class="mySlides2">
      <img src="https://bungalovrehberi.com/storage/web/uploads/evler/97a3ad5b-2b46-4cbc-bd99-a04f316f7e6d-wshtg0.jpeg" style="width:100%">
    </div>

    <div class="mySlides2">
      <img src="https://bungalovrehberi.com/storage/web/uploads/evler/97a3ad53-1d5a-4438-9405-4446393de9ea-gjkhzg.jpeg" style="width:100%">
    </div>

    <div class="mySlides2">
      <img src="https://bungalovrehberi.com/storage/web/uploads/evler/97a3ad4b-5ba2-4bdd-aa21-6a1c64799dc4-xcamy0.jpeg" style="width:100%">
    </div>
    <div class="mySlides2">
      <img src="https://bungalovrehberi.com/storage/web/uploads/evler/97a3ad51-5ac3-4774-a7dc-185268013b60-1-n0eq.jpeg" style="width:100%">
    </div>
    <div class="mySlides2">
      <img src="https://bungalovrehberi.com/storage/web/uploads/evler/97a3ad46-9a09-4ebd-9dbf-fd956fee888f-ggj4lp.jpeg" style="width:100%">
    </div>
    <div class="mySlides2">
      <img src="https://bungalovrehberi.com/storage/web/uploads/evler/97a3ad3f-550d-43fa-8ec4-ccc4d6d7fc42-l7ygtd.jpeg" style="width:100%">
    </div>
    <div class="mySlides2">
      <img src="https://bungalovrehberi.com/storage/web/uploads/evler/97a3ad3d-5594-425e-ba30-27a1ae8bd7dc-7ducza.jpeg" style="width:100%">
    </div>
    <div class="mySlides2">
      <img src="https://bungalovrehberi.com/storage/web/uploads/evler/97a3ad58-51e4-4ce1-be93-ffd43d13ef94-xqyokg.jpeg" style="width:100%">
    </div>
    <div class="mySlides2">
      <img src="https://bungalovrehberi.com/storage/web/uploads/evler/97a3ad5c-6470-477c-96c9-2a3e339ed4b0-kctk1g.jpeg" style="width:100%">
    </div>
    <div class="mySlides2">
      <img src="https://bungalovrehberi.com/storage/web/uploads/evler/97a3ad55-526c-413f-af5e-57e522d51d62-z9pqio.jpeg" style="width:100%">
    </div>
    <div class="mySlides2">
      <img src="https://bungalovrehberi.com/storage/web/uploads/evler/97a3ad54-3020-4146-9b19-a1aca32d79a2-sp4zcz.jpeg" style="width:100%">
    </div>
    <div class="mySlides2">
      <img src="https://bungalovrehberi.com/storage/web/uploads/evler/97a3ad4e-61aa-4cfb-84c6-95f6aa14ec82-gyq1rs.jpeg" style="width:100%">
    </div>
    <div class="mySlides2">
      <img src="https://bungalovrehberi.com/storage/web/uploads/evler/97a3ad44-d5a6-42eb-9bab-b2c5637d2e46-f53tdh.jpeg" style="width:100%">
    </div>
    <div class="mySlides2">
      <img src="https://bungalovrehberi.com/storage/web/uploads/evler/97a3ad43-c0d0-498d-89eb-97446a6585ba-50vyce.jpeg" style="width:100%">
    </div>
    <div class="mySlides2">
      <img src="https://bungalovrehberi.com/storage/web/uploads/evler/97a3ad41-ae89-4038-9263-9681bfdee561-fxjhyd.jpeg" style="width:100%">
    </div>
    <div class="mySlides2">
      <img src="https://bungalovrehberi.com/storage/web/uploads/evler/97a3ad47-c880-4d03-98af-ab95ee65e499-sdjyuw.jpeg" style="width:100%">
    </div>
    <div class="mySlides2">
      <img src="https://bungalovrehberi.com/storage/web/uploads/evler/97a3ad4f-882c-4e85-855a-af40e87da405-5bhi-k.jpeg" style="width:100%">
    </div>
    <div class="mySlides2">
      <img src="https://bungalovrehberi.com/storage/web/uploads/evler/97a3ad40-8857-4cb4-86ab-dfb5af0a137b-x1ree9.jpeg" style="width:100%">
    </div>
    <div class="mySlides2">
      <img src="https://bungalovrehberi.com/storage/web/uploads/evler/97a3ad59-79c0-4695-ba56-e5302cfb54bd-fth70.jpeg" style="width:100%">
    </div>
    <div class="mySlides2">
      <img src="https://bungalovrehberi.com/storage/web/uploads/evler/97a3ad42-b924-4eaf-a995-8b473644fd96-hrql9d.jpeg" style="width:100%">
    </div>
    <div class="mySlides2">
      <img src="https://bungalovrehberi.com/storage/web/uploads/evler/97a3ad56-7bb3-4cfc-8871-c87613c190c1-rmgttp.jpeg" style="width:100%">
    </div>

    <a class="prev" onclick="plusSlides(-1, 1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1, 1)">&#10095;</a>
  </div>
  <div class="koti-detail">
    <div class="left">
      <p>White Koti</p>
      <p>(1 Yorum)</p>
      <p>Sakarya/Sapanca</p>
    </div>
    <div class="right">
      
      <div class="reply">
        <i class="fas fa-reply"></i>
        <a href="index.php" style="color:black;">Geri Dön</a>
      </div>
      <div class="save">
        <i class="fav_ikon_19 far fa-heart "></i>
        <p>Kaydet</p>
      </div>
      <div class="share">
        <i class="fas fa-share"></i>
        <p>Paylaş</p>
      </div>
    </div>
  </div>
  <section  class="s-slider">
                        <div style="text-align:center" class="slider-container">
                            <ul class="slider-items">
                                <div style="margin-bottom:40px" class="icon-slider">
                                    <i class="slider-item fa-solid fa-user-friends">
                                    </i>
                                    <span>2 kişi </span>
                                </div>

                                <div style="margin-bottom:20px" class="icon-slider">
                                    <i class="slider-item fa-solid fa-bed">
                                    </i>
                                    <span>1 çift kişilik</span>
                                </div>
                                <div class="icon-slider">
                                    <i class="slider-item fas fa-utensils">
                                    </i>
                                    <span class="ic">Kahvaltı Var</span>
                                </div>
                                <div class="icon-slider">
                                    <i class="slider-item fas fa-swimming-pool">
                                    </i>
                                    <span >Özel Havuz Var</span>
                                </div>
                                <div style="opacity: 0.4;" class="icon-slider">
                                    <i  class="slider-item fas fa-hot-tub">
                                    </i>
                                    <span class="ic">Jakuzi Yok</span>
                                </div>
                                <div class="icon-slider">
                                    <i class="slider-item fab fa-gripfire">
                                    </i>
                                    <span class="ic">Şömine Var</span>
                                </div>
                            </ul>
                        </div>
  </section>
  <div class="info">
    <p>Bu Mekan Size Neler Sunuyor?</p>
    <p>Koti Sapanca, yeni nesil minimalist mekanlarda konaklamayı sevenler için özenle tasarlandı. Geniş ve ferah iç mekan, yemyeşil büyük bir bahçe, tüm olanaklara yakın konumu ile bütün ihtiyaçlarınıza ve beklentilerinize hızlıca çözüm buluyor. Kuş cıvıltılarının eksik olmadığı, cennet gibi bir bahçeye konumlandırılmış yüzme havuzu ve modern şöminesi ile birlikte unutulmaz bir tatil deneyimi vaadediyor. Evlerimiz 30 metre kare taban alanına oturtulmuş, tamamen ahşap yapı üzerine, modern çizgilerle dekora edilmiş minik bir villadır. Asma katı ile birlikte 45 metre kare yaşam alanı sunan evimizin Tavan yüksekliği 5.70 metredir. Evlerimizin 180 metre kare yemyeşil ve tamamen size ait geniş bahçeleri bulunmaktadır.</p>
  </div>
  <hr>
  <p style="font-size:20px; font-weight:bold">Genel Özellikler</p>
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
  <hr>
  <div class="res">
      <div class="res-detail">
        <div class="left">
          <p class="rate-num">4.0</p>
          <p>Keyifli</p>

        </div>
        <div class="right">
          <p>%11 İNDİRİM</p>

        </div>
      </div>
      <div class="res-create">
        <div class="res-pick">
          <p>Fiyatı görmek için tarih seçmelisin</p>
          <div class="date">
            <div class="enter">
              <p>Giriş Tarihi</p>
              <input type="date">
            </div>
            <div class="exit">
              <p>Çıkış Tarihi</p>
              <input type="date">
            </div>
          
          </div>
        </div>
        <div class="person">
          <i class="fa-solid fa-user text-xl"></i>
          <p>Kişi Sayısı</p>
          <select>
            <option value="0">Seçiniz</option>
            <option value="1">1 Yetişkin</option>
            <option value="2">2 Yetişkin</option>
          </select>  
        </div>
        <div class="guest">
          <i class="fas fa-user-plus text-xl"></i>
          <p>Ekstra Misafir</p>
          <select>
            <option value="0">Seçiniz</option>
            <option value="1">1 Kişi</option>
            
          </select>  
        </div>
        <div class="money">
          <i class="fa-solid fa-money-bill-wave fa-xl"></i>
          <div class="discount">
            <p>2,350 ₺</p>
            <span>2,100 ₺</span>
          </div>
          <p>1 gece <span>için<span></p>
        </div>
        <div class="time">
          <div class="enter-time">
            <p>Giriş Saati: <span>10:00</span> </p>
          </div>
          <div class="exit-time">
            <p>Çıkış Saati: <span>14:00</span> </p>
          </div>
        </div>
        <a href="index.php">
          <button class="request">Rezervasyon Talebi Oluştur</button>
        </a>  
      </div> 
      
      
    </div>                     
    <div class="ad">
      <img style="max-width: 300px;  display:flex; margin: 0 auto;padding:10px" class="" src="https://radyonet.net/cdn/reklam/2b97fbfe860c3dc1b0257c3dea90ff21.jpg" alt="">
      
    </div> 
    <hr>
    <div class="suitability">
      <div class="status">
        <div class="left">
          <p>Uygunluk Durumu</p>
        </div>
        <div class="right">
          <p></p>
          <p>Dolu</p>
          <p></p>
          <p>Müsait</p>
        </div>
        
      </div>
      
      <div id="calendar" class="calendar">
        <div class="calendar-title">
          <div class="calendar-title-text"></div>
          <div class="calendar-button-group">
            <button id="prevMonth">&lt;</button>
            <button id="today">Bugün</button>
            <button id="nextMonth">&gt;</button>
          </div>
        </div>
        <div class="calendar-day-name"></div>
        <div class="calendar-dates"></div>
      </div>
      <div class="should-know">
          <p>Bilinmesi Gerekenler</p>
          <ul>
            <li>Parti ve etkinlik düzenlenemez</li>
            <li>Sigara içmek yasaktır</li>
            <li>Bebekler için uygun değil</li>
          </ul>
      </div>
      
      
    </div>
    <hr>
    <div class="koti-other-homes">
      <p>Koti Sapanca Firmasının Diğer Evleri</p>
      <div class="brown-koti">
        <img src="https://bungalovrehberi.com/storage/web/uploads/evler/97a39ad4-6d73-41ca-a718-2b9fc15f90e9-bvhqiu.jpeg" alt="">
        <p>Brown Koti</p>
      </div>
      <div class="navy-blue-koti">
        <img src="https://bungalovrehberi.com/storage/web/uploads/evler/97a3a190-2aab-4360-8739-245bb1b8913b-iu1vlm.jpeg" alt="">
        <p>Navy Blue Koti</p>
      </div>
      
    </div>
    <hr>
    <div class="comments">
      <p>White Koti Yorumları</p>
      <div class="comment">
        <i style="color: #fbb315;" class="fa-solid fa-xl fa-user-circle "></i>
        <p>Pak Ajans</p>
        <div class="stars">
          <i style="color: #fbb315;" class="fas fa-star"></i>
          <i style="color: #fbb315;" class="fas fa-star"></i>
          <i style="color: #fbb315;" class="fas fa-star"></i>
          <i style="color: #fbb315;" class="fas fa-star"></i>
          <i style="color: #fbb315; " class="fas fa-light fa-star"></i>
        </div>  
        <p>20.03.2023</p>
      </div>
      <button data-modul-id="girisUyelikForm" data-modul="giris" data-href="https://bungalovrehberi.com/giris-yap-ajax" class="modalDiv cursor-pointer inline-flex items-stretch bg-primary-light font-bold hover:bg-primary-400 rounded px-5 py-1 text-white"> <div class="w-4 h-4 mr-2"><i class="fa-solid fa-pencil"></i> </div> <span class="">Yorum yaz</span> </button>
    </div>
    <div class="popup-modal">
      <div class="sign-popup active">
        <h1>Merhaba,</h1>
        <p>Bungalov rehberine giriş yap veya hesap oluştur</p>
        <div class="login-signup">
          <h4>Giriş Yap</h4>
          <h4>Üye Ol</h4>
          <form action="">
            <label for="">E-Posta</label>
            <input type="email" name="email" placeholder="E-posta">
            <label for="">Şifre</label>
            <input type="password" name="password" placeholder="Şifre">
            <span>Şifremi unuttum</span>
            <button>Giriş Yap</button>
  
          </form>
        </div>
  
      </div>
    </div>

    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12083.119364844546!2d30.405954000000005!3d40.788854!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x409df633dbfb5ae7%3A0x9dab4f3c21ca722a!2sAdapazar%C4%B1%2C%20Karaosman%2C%2054100%20Adapazar%C4%B1%2FSakarya!5e0!3m2!1str!2str!4v1679408324079!5m2!1str!2str" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  <script>
    let slideIndex = [1,1];
    let slideId = ["mySlides1", "mySlides2"]
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
  </script>
  <script src="https://unpkg.com/dayjs@1.8.21/dayjs.min.js"></script>
  <script>
    let currentDate = dayjs();
    let daysInMonth = dayjs().daysInMonth();
    let firstDayPosition = dayjs().startOf("month").day();
    let monthNames = [
      "Ocak",
      "Şubat",
      "Mart",
      "Nisan",
      "Mayıs",
      "Haziran",
      "Temmuz",
      "Ağustos",
      "Eylül",
      "Ekim",
      "Kasım",
      "Aralık"
    ];
    let weekNames = ["Pzt", "Salı", "Çarş", "Perş", "Cuma", "Cmt", "Pazar"];
    let dateElement = document.querySelector("#calendar .calendar-dates");
    let calendarTitle = document.querySelector(".calendar-title-text");
    let nextMonthButton = document.querySelector("#nextMonth");
    let prevMonthButton = document.querySelector("#prevMonth");
    let dayNamesElement = document.querySelector(".calendar-day-name");
    let todayButton = document.querySelector("#today");
    let dateItems = null;
    let newMonth = null;
    
    weekNames.forEach(function (item) {
      dayNamesElement.innerHTML += `<div>${item}</div>`;
    });
    
    function plotDays() {
      let count = 1;
      dateElement.innerHTML = "";
    
      let prevMonthLastDate = currentDate.subtract(1, "month").endOf("month").$D;
      let prevMonthDateArray = [];
    
      //plot prev month array
      for (let p = 1; p < firstDayPosition; p++) {
        prevMonthDateArray.push(prevMonthLastDate--);
      }
      prevMonthDateArray.reverse().forEach(function (day) {
        dateElement.innerHTML += `<button style="padding:10px"; class="calendar-dates-day-empty">${day} </button>`;
      });
    
      //plot current month dates
      for (let i = 0; i < daysInMonth; i++) {
        dateElement.innerHTML += `<button style="font-size:18px; font-weight:bold"  class="calendar-dates-day">${count++}<br> <span style="font-size:10px;">2400 ₺</span></button>`;
      }
    
      //next month dates
      let diff =
        42 - Number(document.querySelector(".calendar-dates").children.length);
      let nextMonthDates = 1;
      for (let d = 0; d < diff; d++) {
        document.querySelector(
          ".calendar-dates"
        ).innerHTML += `<button class="calendar-dates-day-empty">${nextMonthDates++}</button>`;
      }
    
      //month name and year
      calendarTitle.innerHTML =`<h4>  ${
        monthNames[currentDate.month()]
      } - ${currentDate.year()}</h4>`;
    }
    
    //highlight current date
    function highlightCurrentDate() {
      dateItems = document.querySelectorAll(".calendar-dates-day");
      if (dateElement && dateItems[currentDate.$D - 1]) {
        dateItems[currentDate.$D - 1].classList.add("today-date");
      }
    }
    
    //next month button event
    nextMonthButton.addEventListener("click", function () {
      newMonth = currentDate.add(1, "month").startOf("month");
      setSelectedMonth();
    });
    
    //prev month button event
    prevMonthButton.addEventListener("click", function () {
      newMonth = currentDate.subtract(1, "month").startOf("month");
      setSelectedMonth();
    });
    
    //today button event
    todayButton.addEventListener("click", function () {
      newMonth = dayjs();
      setSelectedMonth();
      setTimeout(function () {
        highlightCurrentDate();
      }, 50);
    });
    
    //set next and prev month
    function setSelectedMonth() {
      daysInMonth = newMonth.daysInMonth();
      firstDayPosition = newMonth.startOf("month").day();
      currentDate = newMonth;
      plotDays();
    }
    
    //init
    plotDays();
    setTimeout(function () {
      highlightCurrentDate();
    }, 50);
        
    
  </script>



    
<?php include("footer.html")?>