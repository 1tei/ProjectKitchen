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


<div class="spcontainer">
    <section class="recipes centrs" id="recipes">
            <h4 style="font-size:20px">YOUR PROFILE:<br><br><hr><br><br>
                @foreach ($Profile as $User)
                Username: {{$User->name}} <br>
                Role: {{$User->role}} <br>
                Email: {{$User->email}} <br></h4>
                <x-button onclick="edit()">
                    LOG OUT
                </x-button>

                <script>
                public function edit()
                    {
                        if (!\Auth::user()->active)
                        {
                            \Auth::logout();
                            return redirect('/main');
                        }
                    }
                </script>
                @endforeach
    </section>
</div>


</body>
</html>
