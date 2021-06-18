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
                    <li class="upper-menu"><a href="#top">TOP RECIPES</a></li>
                    <li class="upper-menu image"><img id="logo-image" src="/images/logowhite.png" alt="logo"></li>
                    <li class="upper-menu"><a href="#chefs">CHEFS</a></li>
                    <li class="upper-menu"><a href="/recipes" >RECIPES</a></li>
                    <li class="upper-menu"><a href="#footer">VIDEOS</a></li>
                    <li class="upper-menu">LOGIN</a></li>
                </ul>
            </header>
        </div>
    </section>


    <section class="recipes centrs" id="recipes">
        @foreach ($Recipes as $recipe)
        <h4>{{$recipe->Title}} <br></h4>
        <div class="flex-container">
                <img src="{{$recipe->Photo}}" alt="picture">
                <h2>{{$recipe->Content}}
        </div>
        @endforeach
    </section>

    <section class="comments centrs" id="comments">
        @foreach ($Recipe_Comments as $recipe)
        <h2>{{$recipe->Message}}<br>
        {{$recipe->Username}}</h2>
        @endforeach
    </section>
    <footer class="end">
        <h1>COPYRIGHT @ REINIS MOLODCOVS 2021</h1>
    </footer>
</body>
</html>