<?php include("header.html")?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
.mySlides1, .mySlides2 {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
    padding-top: 10px;
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
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
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a grey background color */
.prev:hover, .next:hover {
  background-color: #f1f1f1;
  color: black;
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
</script>

</body>
</html> 







    
<?php include("footer.html")?>