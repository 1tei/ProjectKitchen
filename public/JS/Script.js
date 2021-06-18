$(document).ready(function () {
    ///TITLE
    var header = document.querySelector('header');

    window.addEventListener("scroll", function () {
        header.classList.toggle("sticky", window.scrollY > 0);

                /*document.getElementById('logo-image').src = "images/logoblack.png";
                if (window.scrollY == 0) {
                    document.getElementById('logo-image').src = "images/logowhite.png";
                }*/
    })

    ///SLIDESHOW
    showSlides(slideIndex);
})


///SLIDESHOW
var slideIndex = 1;
function plusSlides(n) {
    showSlides(slideIndex += n);
}
function currentSlide(n) {
    showSlides(slideIndex = n);
}
function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
slides[slideIndex - 1].style.display = "block";
dots[slideIndex - 1].className += " active";
}


///CHEFS
function hoverone() {
document.getElementById("divi").classList.add('hide-item');
document.getElementById("tris").classList.add('hide-item');
document.getElementById("cetri").classList.add('hide-item');
document.getElementById("pieci").classList.add('hide-item');
document.getElementById("viens").classList.add('current');
var header = document.createElement("h3");
var name = document.createTextNode("ANDREW REA");
header.appendChild(name);
var text = document.createElement("p");
var babish = document.createTextNode("Andrew Rea is one part chef, one part filmmaker, and a generous dash of irreverent YouTube personality.  Self-taught both behind and in front of the camera, his cooking show, Binging with Babish, is enjoyed by millions of burgeoning chefs and foodies around the globe.  His passion for teaching and experimenting in the kitchen is rivaled only by his love of film and television, both of which he endeavors to share from his Brooklyn, NY kitchen.");
text.appendChild(babish);
var element = document.getElementById("divpar");
element.appendChild(header).appendChild(text);
}
function hovertwo() {
document.getElementById("divi").classList.add('current');
document.getElementById("viens").classList.add('hide-item');
document.getElementById("tris").classList.add('hide-item');
document.getElementById("cetri").classList.add('hide-item');
document.getElementById("pieci").classList.add('hide-item');
var header = document.createElement("h3");
var name = document.createTextNode("SAM THE COOKING GUY");
header.appendChild(name);
var text = document.createElement("p");
var sam = document.createTextNode("Sam the Cooking Guy is an everyday guy who has found a way to make cooking casually understandable. With no fancy equipment and by speaking English instead of chef-speak, Im sort of the everyman of cooking. I have two shows, the TV show SAM THE COOKING GUY airs on YUR VIEW with COX, and my online show, STCGO. Both are shot right in my house and I cook with my kids, dogs just like we all do. Theres no fois gras... no white truffle oil, no Peruvian mountain-raised squab in sesame-lime-soy marinade stuffed with braised forest turnips and wild enoki mushrooms in a hand pressed plum and raspberry glaze. Im just a regular guy, using regular words showing how to cook easy, great food... Food thats big in taste and small in effort. Its a handful of ingredients and a few steps thats it. This is a cooking show for the rest of us, I like to say. ");
text.appendChild(sam);
var element = document.getElementById("divpar");
element.appendChild(header).appendChild(text);
}
function hoverthree() {
document.getElementById("tris").classList.add('current');
document.getElementById("viens").classList.add('hide-item');
document.getElementById("divi").classList.add('hide-item');
document.getElementById("cetri").classList.add('hide-item');
document.getElementById("pieci").classList.add('hide-item');
var header = document.createElement("h3");
var name = document.createTextNode("ADAM LIAW");
header.appendChild(name);
var text = document.createElement("p");
var adam = document.createTextNode("Adam Liaw is a cook, writer and television presenter based in Sydney, Australia. He is the author of five cookbooks.His latest, The Zen Kitchen, is available in stores now. His television series, Destination Flavour, has travelled through Australia, New Zealand, Japan, Scandinavia and Singapore, and won the 2016 AACTA award for Best Lifestyle Television Program.. Adam is a regular columnist for Fairfax newspapers GoodFood, Sunday Life magazine and The Guardian. In 2010 Adam won MasterChef Australia.His victory is still the most watched non - sporting television event in Australian history.In 2016, the Japanese government appointed Adam as an official Goodwill Ambassador of Japanese Cuisine. With more than 300K followers, Adams social media presence is ranked by Klout as the most influential in the Australian food industry. Follow Adam on Facebook, Instagram, Youtube or Twitter. Adam is also UNICEF Australias National Ambassador for Nutrition.");
text.appendChild(adam);
var element = document.getElementById("divpar");
element.appendChild(header).appendChild(text);
}
function hoverfour() {
document.getElementById("cetri").classList.add('current');
document.getElementById("viens").classList.add('hide-item');
document.getElementById("tris").classList.add('hide-item');
document.getElementById("divi").classList.add('hide-item');
document.getElementById("pieci").classList.add('hide-item');
var header = document.createElement("h3");
var name = document.createTextNode("ETHAN CHLEBOWSKI");
header.appendChild(name);
var text = document.createElement("p");
var ethan = document.createTextNode("Hi, Im Ethan. I created a cooking show that focuses on techniques and the why behind cooking with plenty of food inspiration along the way. Coming from a family that likes to cook, food has always been a big part of my life, but it was never something I thought about pursuing. I graduated from NC State with an accounting degree and went to work for one of the big 4 accounting firms in finance and technology consulting.In that job, I traveled most weeks Mon - Thurs, and while the work was fine, I hated that I couldn't cook for myself for most of the week. In fact, one time I specifically booked a hotel with a kitchenette in NYC where some coworkers and I cooked up venison with a red wine reduction, brussels sprouts, and potatoes (I made sure to leave the a good tip for the maid!). About a year and a half into the real world , I started making cooking videos as a weekend hobby.I knew absolutely nothing about cameras, filming, lighting, sound or audio, but I loved learning about it and making these videos.As time went on, my skills as both a filmmaker and a cook got better and better.Though the growth of the show on YouTube was slow, questions slowly crept into my mind whether this is something I should pursue.At the same time, I was looking at schools to apply for my Master's in Analytics and I soon had to make the decision: Do I really want to go to school or should I look for something else? Ultimately, I decided I wanted to pursue this cooking show 100 % of the time. On June 14, 2019 I quit my job, took my belongings and the money I had saved up for grad school, and moved back in with my parents.Though I had not lived at home in over 7 years since graduating high school, I was excited for the opportunity ahead, no turning back.This website is the collection of my work.");
text.appendChild(ethan);
var element = document.getElementById("divpar");
element.appendChild(header).appendChild(text);
}
function hoverfive() {
document.getElementById("pieci").classList.add('current');
document.getElementById("viens").classList.add('hide-item');
document.getElementById("tris").classList.add('hide-item');
document.getElementById("cetri").classList.add('hide-item');
document.getElementById("divi").classList.add('hide-item');
var header = document.createElement("h3");
var name = document.createTextNode("JOSHUA WEISSMAN");
header.appendChild(name);
var text = document.createElement("p");
var joshua = document.createTextNode("My name is Joshua Weissman. I was born and raised in Los Angeles California; currently in Austin Texas. I started this blog when I was 16 years (currently 20). Ever since I was given the task of the designated cranberry crusher in my childhood I had developed an immense passion for cooking. Unfortunately life for me took a drastic turn in the wrong direction. At such a young age I lost my connection with food and drifted off into a negative eating cycle that drove me to an obese childhood. I struggled with my schooling and general well being. Receiving constant ridicule from my classmates and sometimes teachers. I was bullied, shunned from groups and a lot of the times physically harassed.");
text.appendChild(joshua);
var element = document.getElementById("divpar");
element.appendChild(header).appendChild(text);
}
function hoverOff() {
document.getElementById("viens").classList.remove('hide-item');
document.getElementById("divi").classList.remove('hide-item');
document.getElementById("tris").classList.remove('hide-item');
document.getElementById("cetri").classList.remove('hide-item');
document.getElementById("pieci").classList.remove('hide-item');
document.getElementById("viens").classList.remove('current');
document.getElementById("divi").classList.remove('current');
document.getElementById("tris").classList.remove('current');
document.getElementById("cetri").classList.remove('current');
document.getElementById("pieci").classList.remove('current');
var elmnt = document.getElementById("divpar");
while (elmnt.firstChild) {
    elmnt.removeChild(elmnt.firstChild).remove();
}
}

function allLetter() {
var letters = /^[A-Za-z]+$/;
var vards = document.getElementById('fname').value;
var uzvards = document.getElementById('lname').value;
var subject = document.getElementById('subject').value;

    if (vards == "" || uzvards == "" || subject== "") {
        document.getElementById("txtform").innerHTML = "EMPTY FIELDS";
        return false;
    }
    else if (vards.match(letters) && uzvards.match(letters)) {
        document.getElementById("myForm").action = "https://www.w3schools.com/action_page.php";
        document.getElementById("myForm").submit();
        document.getElementById("txtform").innerHTML = "";
        return true;
    }
    else {
        document.getElementById("txtform").innerHTML = "WRONG INPUT DATA";
        return false;
    }
}

function validatedate(inputText){
var dateformat = /^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$/;
var parbaude = 1;
if(inputText.value.match(dateformat)) {
     document.form1.text1.focus();
    var opera1 = inputText.value.split('/').length;

    if (opera1>1){
        var pdate = inputText.value.split('/');
    }

    var dd = parseInt(pdate[0]);
    var mm = parseInt(pdate[1]);
    var yy = parseInt(pdate[2]);
    var ListofDays = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];

    if (mm==1 || mm>2){
        if (dd>ListofDays[mm-1]){
            document.getElementById("footer-span").innerHTML = "WRONG INPUT DATA";
            parbaude = 0;
            return false;
            }
    }
    if (mm==2){
    var lyear = false;
        if ( (!(yy % 4) && yy % 100) || !(yy % 400)) {
            lyear = true;
        }
        if ((lyear==false) && (dd>=29)){
            document.getElementById("footer-span").innerHTML = "WRONG INPUT DATA";
            parbaude = 0;
            return false;
        }
        if ((lyear==true) && (dd>29)){
            document.getElementById("footer-span").innerHTML = "WRONG INPUT DATA";
            parbaude = 0;
            return false;
        }
    }
}

else{
    document.getElementById("footer-span").innerHTML = "WRONG INPUT DATA";
    parbaude = 0;
    return false;
}

if (parbaude == 1) {
    document.getElementById("footer-span").innerHTML = "CORRECT DATE";
}
else {
    document.getElementById("footer-span").innerHTML = "WRONG INPUT DATA";
}
}
