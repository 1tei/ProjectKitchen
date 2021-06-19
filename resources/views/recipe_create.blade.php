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
            <h1 style="font-size:20px">CREATE A NEW RECIPE POST:
            <br><br>
            <form method="POST" action="{{action([App\Http\Controllers\RecipeController::class, 'store']) }}">
                @csrf
                <input type="hidden" name="Author" value="{{ Auth::user()->id }}">
                <input type="hidden" name="Views" value="1">

                <label for="Title">Title: </label><br>
                <input type="text" name="Title">
            <br>
                <label for="Description">Description: </label><br>
                <input type="text" name="Description">
            <br>
                <label for="Content">Content: </label><br>
                <input type="text" name="Content" >
            <br>
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




    <footer class="end">
        <h1>COPYRIGHT @ REINIS MOLODCOVS 2021</h1>
    </footer>
</body>
</html>
