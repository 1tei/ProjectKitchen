<!DOCTYPE html>

<html lang="en">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta charset="utf-8" />
    <title>Project Kitchen</title>
    <link rel="stylesheet" href="css/StyleSheet.css" />
    <link rel="stylesheet" href="css/reset.css" />
    <script src="js/Script.js"></script>
    <link href="/CSS/main.css" rel="stylesheet">
    <link href="/CSS/stylesheet.css" rel="stylesheet">
    <link href="/JS/Script.js">
</head>
<body>
    <section class="header" id="header">
        <div class="header-bg">
            <header>
                <ul class="main-menu">
                    <li class="upper-menu active"><a href="/">HOME</a></li>
                    <li class="upper-menu"><a href="#gallery">GALLERY</a></li>
                    <li class="upper-menu image"><img id="logo-image" src="/images/logowhite.png" alt="logo"></li>
                    <li class="upper-menu"><a href="/recipes" >RECIPES</a></li>
                    <li class="upper-menu"><a href="#footer">VIDEOS</a></li>
                    <li class="upper-menu"><a href="/login">LOGIN</a></li>
                </ul>
            </header>
        </div>
    </section>

    <section class="banner">
        <div class="banner-bg">
        </div>
        <div class="title">
            <h2 class="reveal-text">PROJECT:</h2>
        </div>
        <div class="title-below">
            <h2 class="reveal-text">KITCHEN</h2>
        </div>
        <script>

        </script>
    </section>


    <section class="gallery" id="gallery">
        <h2>GALLERY</h2>
        <div class="slideshow-container">

            <div class="mySlides fade content">
                <div class="numbertext">1 / 5</div>
                <img src="images/gallery1.jpg" alt="bilde" style="width:100%">
                <div class="text"><a class="gallery-video" href="https://www.youtube.com/watch?v=4wORLNNsZc8">BIRRIA QUESA TACOS</a></div>
            </div>

            <div class="mySlides fade content">
                <div class="numbertext">2 / 5</div>
                <img src="images/gallery2.jpg" alt="bilde" style="width:100%">
                <div class="text"><a class="gallery-video" href="https://www.youtube.com/watch?v=SdHE2zgSaxU">BUTTER BASED STEAK</a></div>
            </div>

            <div class="mySlides fade content">
                <div class="numbertext">3 / 5</div>
                <img src="images/gallery3.jpg" alt="bilde" style="width:100%">
                <div class="text"><a class="gallery-video" href="https://www.youtube.com/watch?v=tuczaAVBur4">FRIED CHICKEN BURGER</a></div>
            </div>

            <div class="mySlides fade content">
                <div class="numbertext">4 / 5</div>
                <img src="images/gallery4.jpg" alt="bilde" style="width:100%">
                <div class="text"><a class="gallery-video" href="https://www.youtube.com/watch?v=Qyb_x5_f7nU">CHOW MEIN NOODLES</a></div>
            </div>

            <div class="mySlides fade content">
                <div class="numbertext">5 / 5</div>
                <img src="images/gallery5.jpg" alt="bilde" style="width:100%">
                <div class="text"><a class="gallery-video" href="https://www.youtube.com/watch?v=dzu6E19sXSg">SWEET AND SOUR PORK</a></div>
            </div>

            <a class="prev" onclick="setTimeout(plusSlides(-1), 2000)">&#10094;</a>
            <a class="next" onclick="setTimeout(plusSlides(1), 2000)">&#10095;</a>
        </div>
        <br>

        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
            <span class="dot" onclick="currentSlide(5)"></span>
        </div>
    </section>

    <footer class="end">
        <h1>COPYRIGHT @ REINIS MOLODCOVS 2021</h1>
    </footer>
</body>
</html>
