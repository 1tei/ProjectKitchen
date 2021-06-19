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


    <section class="recipes centrs" id="recipes">
        @foreach ($Recipes as $recipe)
        <h4>{{$recipe->Title}} <br></h4>
        <div class="flex-container">
                <img src="{{$recipe->Photo}}" alt="picture">
                <h2>{{$recipe->Content}}
        </div>
        @endforeach

        <form method="POST" action="{{action([App\Http\Controllers\CommentController::class, 'store'], $recipe->id)}}">
            @csrf
            <input type="hidden" name="Author" value="{{ Auth::user()->id }}">
            <input type="hidden" name="Post" value="{{$recipe->id}}">

            <label for="Message">Comment: </label><br>
            <input type="text" name="Message">

        <br><br><br><input type="submit" value="CREATE">
        </h1>
        </form>
        <br><br>
        <hr>
        <br><br>
        <h2>
        <x-auth-validation-errors/>
        </h2>


    </section>

    <section class="comments centrs" id="comments">
        @foreach ($Recipe_Comments as $recipes)
        <h2>{{$recipes->Message}}<br>
        {{$recipes->name}}</h2>
        @if (Auth::user()->role == 'Editor' or Auth::user()->role == 'Admin')
            <form method="POST" action="{{action([App\Http\Controllers\CommentController::class, 'destroy'], $recipe->id)}}">
                @csrf @method('DELETE')
            <input type="submit" value="delete"></form>
        @endif
        @endforeach
    </section>
    <footer class="end">
        <h1>COPYRIGHT @ REINIS MOLODCOVS 2021</h1>
    </footer>
</body>
</html>
