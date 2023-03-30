<?php include("header.html")?>


  <!DOCTYPE html>
  <html>
  <head>
    <link rel="stylesheet" href="style.css">  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
  * {box-sizing: border-box}
  .mySlides1, .mySlides2 {display: none}
  img {vertical-align: middle;

  }
  html,body{
  scroll-behavior: smooth;
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
  .right{
    padding: 0;
    margin: 0;
    gap: 0;
  }
  .share{
    padding: 0;
  }
  #share{
    display: none;
  }
  #share#active{
    display: block !important;
  }

 
  .view-modal, .popup{
    position: absolute;
    left: 50%;
  }
  button{
    outline: none;
    cursor: pointer;
    font-weight: 500;
    border-radius: 4px;
    border: 2px solid transparent;
    transition: background 0.1s linear, border-color 0.1s linear, color 0.1s linear;
  }
  .view-modal{
    top: 10%;
    left: 90%;
    color: #e8e4ee;
    font-weight: bold;
    font-size: 18px;
    padding: 10px 25px;
    background: rgb(113, 5, 156);
    transform: translate(-50%, -50%);
  }
  .popup{
    z-index: 99999;
    background: rgb(255, 254, 254);
    padding: 25px;
    border-radius: 15px;
    top: 10%;
    position:fixed;
    max-width: 350px;
    width: 100%;
    opacity: 0;
    pointer-events: none;
    box-shadow: 0px 10px 15px rgba(0,0,0,0.1);
    transform: translate(-50%, -50%) scale(1.2);
    transition: top 0s 0.2s ease-in-out,
            opacity 0.2s 0s ease-in-out,
            transform 0.2s 0s ease-in-out;
  }
  .popup.show{
    top: 50%;
    left: 50%;
    opacity: 1;
    display: block !important;
    pointer-events: auto;
    transform:translate(-50%, -50%) scale(1);
    transition: top 0s 0s ease-in-out,
                opacity 0.2s 0s ease-in-out,
                transform 0.2s 0s ease-in-out;
  
  }
  .popup :is(.header, .icons, .field){
    display: flex;
    align-items: center;
    justify-content: space-between;
  }
  .popup .header{
    padding-bottom: 15px;
    border-bottom: 1px solid #ebedf9;
  }
  .header p{
    font-size: 20px;
  }
  .header span{
    font-size: 21px;
    font-weight: 600;
  }
  .header .close, .icons a{
    display: flex;
    align-items: center;
    border-radius: 50%;
    justify-content: center;
    transition: all 0.3s ease-in-out;
  } 
  .header .close{
    color: #878787;
    font-size: 17px;
    background: #f3f3f3;
    height: 33px;
    width: 33px;
    cursor: pointer;
  }
  .header .close:hover{
    background: #ebedf9;
  }
  .popup .content{
    margin: 20px 0;
  }
  .popup .icons{
    margin: 15px 0 20px 0;
  }
  .content p{
    font-size: 16px;
  }
  .content .icons a{
    height: 50px;
    width: 50px;
    font-size: 20px;
    text-decoration: none;
    border: 1px solid transparent;
  }
  .icons a i{
    transition: transform 0.3s ease-in-out;
  }
  .icons a:nth-child(1){
    color: #1877F2;
    border-color: #b7d4fb;
  }
  .icons a:nth-child(1):hover{
    background: #1877F2;
  }
  .icons a:nth-child(2){
    color: #46C1F6;
    border-color: #b6e7fc;
  }
  .icons a:nth-child(2):hover{
    background: #46C1F6;
  }
  .icons a:nth-child(3){
    color: #e1306c;
    border-color: #f5bccf;
  }
  .icons a:nth-child(3):hover{
    background: #e1306c;
  }
  .icons a:nth-child(4){
    color: #25D366;
    border-color: #bef4d2;
  }
  .icons a:nth-child(4):hover{
    background: #25D366;
  }
  .icons a:nth-child(5){
    color: #0088cc;
    border-color: #b3e6ff;
  }
  .icons a:nth-child(5):hover{
    background: #0088cc;
  }
  .icons a:hover{
    color: #fff;
    border-color: transparent;
  }
  .icons a:hover i{
    transform: scale(1.2);
  }
  
  .fa-share{
    color: rgb(239,68,68);
  }
  .fa-share:hover{
    color: darkblue;
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
    padding-top: 10px;
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
    padding: 10px;
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
    width: 270px;
    border: 1px solid gray;
    border-radius: 5px; 
    display: flex;
    flex-direction: column;
    padding:5px 20px ;
    gap: 15px;
    align-items: center;
    justify-content: center;
  }
  .coll-1{
    gap: 10px;
    margin: 0 auto;
    display: flex;
    align-items: center;
    font-size: 20px;
    justify-content: space-around;
  }
  .coll-1 p{
    text-decoration: line-through;
    display: inline-block;
  }
  .coll-1 i{
    margin-bottom:12px;
  }
  .coll-2{
    font-weight: bold;
    font-size: 40px;
    display: flex;
    align-items: center;
    justify-content: space-around;
  }
  .coll-3{
    display: flex;
    align-items: center;
    justify-content: space-around;
  }
  .coll-3 p{
    font-size: 20px;
  }
  .coll-3 span{
    font-weight: bold;

  }
  /* .discount span{
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
  } */
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
  max-width: 400px;
  padding:20px 0px;
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
  padding: 0;
}
.comment-us button{
  display: flex;
  text-align: right;
  margin-left: auto;
  margin-right: 0;
  background-color: rgb(16,66,112);
  padding-bottom: 10px;
}


.underline {
  position: absolute;
  height: 4px;
  background-color: #ceaee8;
  transition: all 0.5s ease;
}



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
  height: 550px;
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
  position: absolute;
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
      <a href="#comment-section">
        <p>(1 Yorum)</p>
      </a>
      <p>Sakarya/Sapanca</p>
    </div>
    <div class="right">
      
      <div class="reply">
        <a href="index.php" style="color:black;">
          <i class="fas fa-reply"></i>
          Geri Dön
        </a>
      </div>
      <div class="save">
        <i class="fav_ikon_19 far fa-heart "></i>
        <p>Kaydet</p>
      </div>
      <div class="share" id="share8">
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
  <div class="res" style="margin:10px 0">
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
              <input type = "date" >
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
          <div class="coll-1">
            <i class="fa-solid fa-money-bill-wave fa-xl"></i>
            <p>2,350 ₺</p>
          </div>
          <div class="coll-2">
            <span>2,100 ₺</span>
          </div>
          <div class="coll-3">
            <p>1 gece <span>için<span></p>
          </div>
        </div>
        <div class="time">
          <div class="enter-time">
            <p>Giriş Saati: <span>10:00</span> </p>
          </div>
          <div class="exit-time">
            <p>Çıkış Saati: <span>14:00</span> </p>
          </div>
        </div>
        <a href="rezervation.php">
          <button class="request">Rezervasyon Talebi Oluştur</button>
        </a>  
      </div> 
      
      
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
  <div class="ad">
    <img style="max-width: 300px;  display:flex; margin: 0 auto;padding:10px" class="" src="https://radyonet.net/cdn/reklam/2b97fbfe860c3dc1b0257c3dea90ff21.jpg" alt="">
    
  </div> 
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
  <div class="comments" id="comment-section">
    <p>White Koti Yorumları</p>
    <div class="comment">
      <i style="color: #fbb315;" class="fa-solid fa-xl fa-user-circle "></i>
      <p style="font-size:12px;">Pak Ajans</p>
      <div class="stars">
        <i style="color: #fbb315;" class="fas fa-star"></i>
        <i style="color: #fbb315;" class="fas fa-star"></i>
        <i style="color: #fbb315;" class="fas fa-star"></i>
        <i style="color: #fbb315;" class="fas fa-star"></i>
        <i style="color: #fbb315; " class="fas fa-light fa-star"></i>
      </div>  
      <p>20.03.2023</p>
    </div>
  </div>
  
  
  <div class="comment-us">
    
    <button data-modul-id="girisUyelikForm" data-modul="giris" data-href="https://bungalovrehberi.com/giris-yap-ajax" class="modalDiv log cursor-pointer inline-flex items-stretch bg-primary-light font-bold hover:bg-primary-400 rounded px-5 py-1 text-white"> <div class="w-4 h-4 mr-2"><i class="fa-solid fa-pencil"></i> </div> <span class="log">Yorum yaz</span> </button>

  </div>
  <iframe style="margin: 15px 0 15px 0; border: none;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12083.119364844546!2d30.405954000000005!3d40.788854!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x409df633dbfb5ae7%3A0x9dab4f3c21ca722a!2sAdapazar%C4%B1%2C%20Karaosman%2C%2054100%20Adapazar%C4%B1%2FSakarya!5e0!3m2!1str!2str!4v1679408324079!5m2!1str!2str" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  
  <div class="overlay">
  </div>
  <div class="main-popup">
    <div class="popup-header">
      <div id="popup-close-button"><i class="fa-sharp
      fa-2xl fa-solid fa-circle-xmark" style="color: #e38326;"></i>
      </div>
      <ul>
        <li><a  id="sign-in">Giriş Yap</a></li>
        <li><a  id="register">Üye Ol</a></li>
      </ul>
    </div><!--.popup-header-->
    <div class="popup-content">
      <form action="#" class="sign-in">
        <label for="email">E-Posta</label>
        <input type="text" placeholder="E-posta" id="email">
        <label for="password">Şifre:</label>
        <input type="password" placeholder="Şifre" id="password">
        <p class="check-mark">
          <input type="checkbox" id="remember-me">
          <label for="remember-me">Şifremi Unuttum</label>
        </p>
        <input type="submit" id="submit" value="Giriş Yap">
      </form>
    
      <form action="#" class="register">
        <label for="name-register">Ad</label>
        <input type="text" placeholder="Ad" id="first-name-register">
        <label for="last-name-register">Soyad</label>
        <input type="text" placeholder="Soyad" id="last-name-register">
        <label for="phone-register">Cep Telefonu</label>
        <input type="text" placeholder="Cep Telefonu" id="phone-register">
        <label for="city-register">İl</label>
        <select name="uyelik_il" id="uyelik_il" class="block appearance-none w-full bg-gray-100 border border-gray-300 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none" required=""> 
          <option value="">Seçiniz</option> <option value="1">Adana</option> <option value="2">Adıyaman</option> <option value="3">Afyon</option> <option value="4">Ağrı</option> <option value="68">Aksaray</option> <option value="5">Amasya</option> <option value="6">Ankara</option> <option value="7">Antalya</option> <option value="75">Ardahan</option> <option value="8">Artvi̇n</option> <option value="9">Aydın</option> <option value="10">Balıkesi̇r</option> <option value="74">Bartın</option> <option value="72">Batman</option> <option value="69">Bayburt</option> <option value="11">Bi̇leci̇k</option> <option value="12">Bi̇ngöl</option> <option value="13">Bi̇tli̇s</option> <option value="14">Bolu</option> <option value="15">Burdur</option> <option value="16">Bursa</option> <option value="17">Çanakkale</option> <option value="18">Çankırı</option> <option value="19">Çorum</option> <option value="20">Deni̇zli̇</option> <option value="21">Di̇yarbakır</option> <option value="81">Düzce</option> <option value="22">Edi̇rne</option> <option value="23">Elazığ</option> <option value="24">Erzi̇ncan</option> <option value="25">Erzurum</option> <option value="26">Eski̇şehi̇r</option> <option value="27">Gazi̇antep</option> <option value="28">Gi̇resun</option> <option value="29">Gümüşhane</option> <option value="30">Hakkari̇</option> <option value="31">Hatay</option> <option value="33">İçel</option> <option value="76">Iğdır</option> <option value="32">Isparta</option> <option value="34">İstanbul</option> <option value="35">İzmi̇r</option> <option value="46">Kahramanmaraş</option> <option value="78">Karabük</option> <option value="70">Karaman</option> <option value="36">Kars</option> <option value="37">Kastamonu</option> <option value="38">Kayseri̇</option> <option value="79">Ki̇li̇s</option> <option value="71">Kırıkkale</option> <option value="39">Kırklareli̇</option> <option value="40">Kırşehi̇r</option> <option value="41">Kocaeli̇</option> <option value="42">Konya</option> <option value="43">Kütahya</option> <option value="44">Malatya</option> <option value="45">Mani̇sa</option> <option value="47">Mardi̇n</option> <option value="48">Muğla</option> <option value="49">Muş</option> <option value="50">Nevşehi̇r</option> <option value="51">Ni̇ğde</option> <option value="52">Ordu</option> <option value="80">Osmani̇ye</option> <option value="53">Ri̇ze</option> <option value="54">Sakarya</option> <option value="55">Samsun</option> <option value="63">Şanlıurfa</option> <option value="56">Si̇i̇rt</option> <option value="57">Si̇nop</option> <option value="58">Si̇vas</option> <option value="73">Şırnak</option> <option value="59">Teki̇rdağ</option> <option value="60">Tokat</option> <option value="61">Trabzon</option> <option value="62">Tunceli̇</option> <option value="64">Uşak</option> <option value="65">Van</option> <option value="77">Yalova</option> <option value="66">Yozgat</option> <option value="67">Zonguldak</option> 
        </select>
        <label for="email">E-Posta</label>
        <input type="text" placeholder="E-posta" id="email">
        <label for="password">Şifre:</label>
        <input type="password" placeholder="Şifre" id="password">
        <p class="warning">Şifreniz en az 6 karakter olmalıdır.</p>
        <div class="radio">
          <div class="bireysel">
            <input type="radio" name="radio" id="">
            <label for="">Bireysel Üye</label>
          </div>
          <div class="kurumsal">
            <input type="radio" name="radio" id="">
            <label for="">Kurumsal Üye</label>
          </div>
        </div>
        <!-- <p class="check-mark">
          <input type="checkbox" id="accept-terms">
          <label for="accept-terms">I agree to the <a href="#">Terms</a></label>
        </p> -->
        <input type="submit" id="submit" value="Üye Ol">
        <div class="checked">
          <p>Üye ol'a basarak Üyelik koşullarını kabul ediyorum.</p>
          <p class="accept">
            <input type="checkbox" name="terms&conditions" id="">
            <label for="">
              Kampanyalardan haberdar olabilmem için kişisel verilerimin işlenmesini ve tarafıma elektronik ileti gönderilmesini kabul ediyorum.
            </label>
          </p>
          <p class="accept">
            <input type="checkbox" name="news" id="">
            <label for="">
              Kişisel verilerimin işlenmesine yönelik aydınlatma metnini okudum ve anladım.
            </label>
          </p>
        </div>

      </form>
    </div>
  </div>
  <script text="javascript" src="script.js"></script>
  <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.24.1/feather.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


  
  <script>
   

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
    

   

    const viewBtn = document.querySelector(".share"),
      share1 = document.getElementById("share1"),
      share2 = document.getElementById("share2"),
      share3 = document.getElementById("share3"),
      share4 = document.getElementById("share4"),
      share5 = document.getElementById("share5"),
      share6 = document.getElementById("share6"),
      share7 = document.getElementById("share7"),
      share8 = document.getElementById("share8"),
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
    share8.onclick = ()=>{ 
      popup.classList.toggle("show");
    }
    close.onclick = ()=>{
      share8.click();
    }
    
            
            
            
            
            
  </script>
	

		
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

      $('#menu').onclick=()=>{              
        $('#menu').classList.toggle('rotate')
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
    
      for (let p = 1; p < firstDayPosition; p++) {
        prevMonthDateArray.push(prevMonthLastDate--);
      }
      prevMonthDateArray.reverse().forEach(function (day) {
        dateElement.innerHTML += `<button style="padding:10px"; class="calendar-dates-day-empty">${day} </button>`;
      });
    
      for (let i = 0; i < daysInMonth; i++) {
        dateElement.innerHTML += `<button style="font-size:18px; font-weight:bold"  class="calendar-dates-day">${count++}<br> <span style="font-size:10px;">2400 ₺</span></button>`;
      }
    
      let diff =
        42 - Number(document.querySelector(".calendar-dates").children.length);
      let nextMonthDates = 1;
      for (let d = 0; d < diff; d++) {
        document.querySelector(
          ".calendar-dates"
        ).innerHTML += `<button class="calendar-dates-day-empty">${nextMonthDates++}</button>`;
      }
    
      calendarTitle.innerHTML =`<h4>  ${
        monthNames[currentDate.month()]
      } - ${currentDate.year()}</h4>`;
    }
    
    function highlightCurrentDate() {
      dateItems = document.querySelectorAll(".calendar-dates-day");
      if (dateElement && dateItems[currentDate.$D - 1]) {
        dateItems[currentDate.$D - 1].classList.add("today-date");
      }
    }
    
    nextMonthButton.addEventListener("click", function () {
      newMonth = currentDate.add(1, "month").startOf("month");
      setSelectedMonth();
    });
    
    prevMonthButton.addEventListener("click", function () {
      newMonth = currentDate.subtract(1, "month").startOf("month");
      setSelectedMonth();
    });
    
    todayButton.addEventListener("click", function () {
      newMonth = dayjs();
      setSelectedMonth();
      setTimeout(function () {
        highlightCurrentDate();
      }, 50);
    });
    
    function setSelectedMonth() {
      daysInMonth = newMonth.daysInMonth();
      firstDayPosition = newMonth.startOf("month").day();
      currentDate = newMonth;
      plotDays();
    }
    
    plotDays();
    setTimeout(function () {
      highlightCurrentDate();
    }, 50);
        
    
  </script>
  </body>
  </html>  


    
<?php include("footer.html")?>