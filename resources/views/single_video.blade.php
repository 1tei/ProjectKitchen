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


    <section class="recipes centrs" id="recipes">
        @foreach ($Video as $vid)
        <h4>{{$vid->Title}} <br></h4>
                <iframe width="560" height="315" src="{{$vid->Video_link}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        @endforeach

        <form method="POST" action="{{action([App\Http\Controllers\VCommentController::class, 'store'], $vid->id)}}">
            @csrf
                <input type="hidden" name="Author" value="{{ Auth::user()->id }}">
                <input type="hidden" name="Post" value="{{$vid->id}}">
                <br><br><h2><label for="Message">COMMENT:</label><br></h2>
                <textarea type="text" name="Message"></textarea>
                <br><br><br><input type="submit" value="CREATE">
        </h1>
        </form>
        <br><br>
        <br><br>
        <h2>
        <x-auth-validation-errors/>
        </h2>


    </section>

    <section class="comments centrs" id="comments">
            <h2> COMMENTS </H2><BR><HR><BR><BR>


            @foreach ($Video_Comments as $vcom)
            <h2>{{$vcom->Message}}<br><BR><BR>
            POSTED BY: {{$vcom->name}}</h2>


            @if (Auth::user()->role == 'Editor' or Auth::user()->role == 'Admin')
            <BR><BR>
                <form method="POST" action="{{action([App\Http\Controllers\VCommentController::class, 'destroy'], $vid->id)}}">
                    @csrf @method('DELETE')
                <input type="submit" value="delete"></form>
            @endif


        </H2><BR><HR><BR><BR>


            @endforeach
    </section>
    <footer class="end">
        <h1>COPYRIGHT @ REINIS MOLODCOVS 2021</h1>
    </footer>
</body>
</html>
