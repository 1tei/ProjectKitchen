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
                    <li class="upper-menu"><a href="/#gallery">GALLERY</a></li>
                    <li class="upper-menu image"><img id="logo-image" src="/images/logowhite.png" alt="logo"></li>
                    <li class="upper-menu"><a href="/recipes" >RECIPES</a></li>
                    <li class="upper-menu"><a href="/video">VIDEOS</a></li>
                    @if (!Auth::check())
                        <li class="upper-menu"><a href="/login">LOGIN</a></li>
                    @endif
                    @if (Auth::check())
                        <li class="upper-menu"><a href="/profile">PROFILE</a></li>
                    @endif
                </ul>
            </header>
        </div>
    </section>


    <section class="recipes centrs " id="recipes">
        @if (Auth::user()->role == 'Editor' or Auth::user()->role == 'Admin')
            <a class="sptext" href="/recipes/create"> CREATE A NEW RECIPE </a>
        @endif
            @foreach ($Recipes as $recipe)

            <div class="flex-container">
                <div class="square-image">
                    <img src="{{$recipe->Photo}}" alt="picture">
                </div>
                <div class="flex-child">
                    <h4>{{$recipe->Title}} <br></h4>
                    <h2>{{$recipe->Description}}<br></h2>

                <br><br><a href="/recipe/{{$recipe->id}}">View Recipe</a>
                @if (Auth::user()->role == 'Editor' or Auth::user()->role == 'Admin')
                <a href="/recipe/edit/{{$recipe->id}}"> Edit Recipe Information. </a>
                @if (Auth::user()->role == 'Admin')
                <form method="POST" action="{{action( [App\Http\Controllers\RecipeController::class, 'destroy'], $recipe->id ) }}">@csrf @method('DELETE')<input type="submit" value="DELETE RECIPE"></form>
                @endif
                @endif
                </div>
            </div>

        @endforeach


    </section>

    <footer class="end">
        <h1>COPYRIGHT @ REINIS MOLODCOVS 2021</h1>
    </footer>
</body>
</html>
