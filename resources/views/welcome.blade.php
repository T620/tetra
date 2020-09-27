<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tetra: A better way to buy and sell fish</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">

        <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
        <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
            rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body class="antialiased">
        @include('partials.dashboard.navigation.top')

        <div class="welcome__jumbotron" aria-label="Background image of ocean. Image courtesy of Matt Hardy on Unplash">
            <h1 class='gettaloadathis'>A better way to buy and sell fish</h1>
            <a href="#register-cta">
                <i class="material-icons cta">anchor</i>
            </a>
        </div>

        <div class="welcome__humble_introduction">
            <h2 class='section-header'>Introducing Tetra</h2>

            <p>Tetra is an online network for selling fish. We aim to facilitate business between catcher and merchant, while minimising waste.</p>


            
            <div class="welcome__key-principles">
                
                <h3>Our Key Principles</h3>
                
                <div class="principles-wrapper">
                    <div class='principle'>
                        <i class="material-icons principle-icon">sync_alt</i>
                        <span>Facilitators, not disruptors</span>
                        <p>We aim to facilitate business from net to plate, without getting in the way of your business.</p>
                    </div>

                    <div class='principle'>
                        <i class="material-icons principle-icon">eco</i>
                        <span>Sustainability</span>
                        <p>We believe strongly in balancing sustainability and environment responsibility with the interests of the industry.</p>
                    </div>

                    <div class='principle'>
                        <i class="material-icons principle-icon">place</i>
                        <span>Worldwide</span>
                        <p>We operate worldwide and can seamelessly intergrate our network into yours.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="welcome__get-started" id="register-cta">
            @include('auth.register')
        </div>
    </body>
</html>
