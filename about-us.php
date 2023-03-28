<?php include("header.html")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div class="about-us">
        <h1 style="font-size: 25px; text-align: center;">Hakkımızda</h1>
        <p>Türkiye’nin bungalov rehberi sloganı ile çıktığımız yolda; Bilinmeyen bungalov tesislerini tanıtmayı ve herkesin gitmek isteyeceği ve bilmediği yerleri keşfederek sizlere, ülkemizde bulunan bungalovları tanıtmaya amaç edindik.</p>
        
        <p>Bungalov Rehberi olarak; her kesimin bütçesini göz önünde bulundurarak bungalov kataloğu oluşturduk. Oluşturduğumuz bu katalog sayesinde uygun fiyatlı bungalov evlerini Bungalov Rehberi sitesi üzerinden takipçilerimize sunarak hızlı, kolay ve güvenilir bir şekilde rezervasyon yapmalarına aracı oluyoruz. Tatil ve gezi amaçlı yapacağınız seyahatler öncesinde bakmadan geçmemeniz gereken Bungalov Rehberi’nde farklı bungalov seçeneklerimiz ile oldukça geniş bir portföy sunuyoruz.</p>
        
        <p>www.bungalovrehberi.com ile müşterilerimize; bungalov, glamping, dağ evi, tiny house, villa gibi çeşitli konaklama seçeneklerinin yanı sıra güvenilir ve maksimum memnu niyetli bir tatil deneyimi vaat ediyoruz. Bu alanda gündemi takip ederek teknolojiyi kullanarak hızlı bir gelişme kaydederek seyahat sektöründe akla gelen ilk isimlerden biri olmayı başaran Bungalov Rehberi ile takipçilerimize en güncel ve akılda kalıcı deneyimleri sunmayı hedefliyoruz. </p>
    </div>
    <script>
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
        
    </script>
<script text="javascript" src="script.js"></script>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.24.1/feather.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>
<?php include("footer.html")?>