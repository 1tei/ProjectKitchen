<!DOCTYPE html>

<html lang="en">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta charset="utf-8" />
    <title>RM20004</title>
    <link rel="stylesheet" href="css/StyleSheet.css" />
    <link rel="stylesheet" href="css/reset.css" />
    <script src="js/Script.js"></script>

</head>
<body>
    <section class="header" id="header">
        <div class="header-bg">
            <header>
                <h2>P:K</h2>
                <ul class="main-menu">
                    <li class="upper-menu active"><a href="#header">HOME</a></li>
                    <li class="upper-menu"><a href="#gallery">GALLERY</a></li>
                    <li class="upper-menu image"><img id="logo-image" src="images/logowhite.png" alt="logo"></li>
                    <li class="upper-menu"><a href="#chefs">CHEFS</a></li>
                    <li class="upper-menu"><a href="#footer">CONTACT US</a></li>
                    <li class="upper-menu"><p id="clock"></p></li>
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

    <section class="video">
        <h2>N E W E S T * V I D E O & R E C I P E</h2>
        <div class="frame">
        </div>
        <div>
            <ol>
                <li><iframe title="video" width="560" height="315" src="https://www.youtube.com/embed/L8QDHEs25eE" allowfullscreen></iframe></li>
                <li><pre>
Chicken:
- 1.5 lbs (700g) boneless skinless chicken thighs cut into pieces
- 1 tablespoon (14g) shaoxing wine
- 1 tablespoon (14g) soy sauce
- pinch of salt
- 2 cloves garlic mined
- 1 inch knob ginger minced
- 1/2 cup (75g) all purpose flour
- 1/2 cup (60g) corn starch
- oil for frying

General Tso's sauce:
- 1 tablespoons (14g) shaoxing wine
- 1 tbsp (15g) corn starch
- 1/2 cup chicken stock (120ml)  (little bit of shirodashi mixed in)
- 3 tablespoons (50g) soy sauce
- 3 tablespoons (45g) granulated sugar
- 1.5 tablespoon (21g) vinegar
- 4 cloves garlic, minced
- 2 inch knob ginger, grated
- 1 teaspoon (4g) Chinese chili flakes
- 5 dried red chili peppers (chilies de arbol, korean chilies, etc.)
- toasted sesame seeds for garnish
- thinly sliced green onion for garnish</pre></li>
            </ol>
        </div>
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

    <section class="chefs" id="chefs">
        <div>
            <h2>C H E F S</h2>
            <ul class="hide" tabindex="0">
                <li onmouseover="hoverone()" onmouseout="hoverOff()" id="viens">
                    <a href="https://www.bingingwithbabish.com/about" target="_blank" title="Leonardo DiCaprio">
                        <img src="images/babish.jpg" alt="BINGING WITH BABISH">
                    </a>
                </li>
                <li onmouseover="hovertwo()" onmouseout="hoverOff()" id="divi">
                    <a href="https://www.thecookingguy.com/the-cooking-guy" target="_blank" title="Brad Pitt">
                        <img src="images/sam.jpg" alt="SAM THE COOKING GUY">
                    </a>
                </li>
                <li onmouseover="hoverthree()" onmouseout="hoverOff()" id="tris">
                    <a href="https://adamliaw.com/about-2/" target="_blank" title="Margot Robbie">
                        <img src="images/adam.jpg" alt="ADAM LIAW">
                    </a>
                </li>
                <li onmouseover="hoverfour()" onmouseout="hoverOff()" id="cetri">
                    <a href="https://www.ethanchlebowski.com/" target="_blank" title="Emile Hirsch">
                        <img src="images/ethan.jpg" alt="ETHAN CHLEBOWSKI">
                    </a>
                </li>
                <li onmouseover="hoverfive()" onmouseout="hoverOff()" id="pieci">
                    <a href="https://slimpalate.com/about-me/" target="_blank" title="Quentin Tarantino">
                        <img src="images/joshua.jpg" alt="JOSHUA WIESSMAN">
                    </a>
                </li>
            </ul>
            <div id="divpar">

            </div>
        </div>
    </section>

    <section id="footer" class="footer">
    <div class="footer-container">
      <div class="external">
        <h2 class="footer">LINKS</h2>
            <ol>
                <li><a href="https://www.bingingwithbabish.com/">ANDREW</a></li>
                <li><a href="https://www.thecookingguy.com/#tv-show-stcgo-show-recipe-homepage">SAM</a></li>
                <li><a href="https://adamliaw.com/">ADAM</a></li>
                <li><a href="https://www.ethanchlebowski.com/">ETHAN</a></li>
                <li><a href="https://slimpalate.com/">JOSHUA</a></li>
            </ol>
      </div>
      <div class="contacts">
        <h2 class="footer">CONTACTS</h2>
            <ul>
                <li><a class="link" href="https://www.gmail.com"><img src="images/gmailLogo.jpg" alt="bilde"><span></span><h3>REINIS.TEI@GMAIL.COM</h3></a></li>
                <li><a class="link" href="https://www.twitter.com"><img src="images/twitterLogo.jpg" alt="bilde"><span></span><h3>@REINISTEI</h3></a></li>
                <li><a class="link" href="https://www.instagram.com"><img src="images/instagramLogo.jpg" alt="bilde"><span></span><h3>REINISMOL</h3></a></li>
            </ul>
      </div>

      <div class="input-field">
          <h2 class="footer">SEND A MESSAGE</h2>
          <div class="container">
              <form id="myForm" onsubmit="return false">
                  <div class="row">
                      <div class="col-25">
                          <label for="fname">FIRST NAME</label>
                      </div>
                      <div class="col-75">
                          <input type="text" id="fname" name="firstname" placeholder="YOUR NAME.">
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-25">
                          <label for="lname">LAST NAME</label>
                      </div>
                      <div class="col-75">
                          <input type="text" id="lname" name="lastname" placeholder="YOUR LAST NAME.">
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-25">
                          <label for="country">COUNTRY</label>
                      </div>
                      <div class="col-75">
                          <select id="country" name="country">
                              <option value="latvia">LATVIA</option>
                              <option value="lithuania">LITHUANIA</option>
                              <option value="estonia">ESTONIA</option>
                          </select>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-25">
                          <label for="subject">SUBJECT</label>
                      </div>
                      <div class="col-75">
                          <textarea id="subject" name="subject" placeholder="WRITE SOMETHING.." style="height:50px"></textarea>
                      </div>
                  </div>
                  <div class="row">
                      <input type="submit" value="Submit" onclick="allLetter()">
                  </div>
              </form>
          </div>
          <span id="txtform"> </span>
      </div>
    </div>
    </section>

    <footer class="end">
        <h1>COPYRIGHT @ REINIS MOLODCOVS 2021</h1>
        <div class="mail">
            <h2>Input a valid date [dd/mm/yyyy]</h2>
            <form class="footer-form" name="form1" onsubmit="return false">
                    <input type='text' name='text1' />
                    <input type="submit" value="Submit" onclick="validatedate(document.form1.text1)">
            </form>
            <span id="footer-span"></span>
        </div>
    </footer>
</body>
</html>
