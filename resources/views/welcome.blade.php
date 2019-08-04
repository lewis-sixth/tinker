<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tinker</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
        <script src="{{ mix('/js/app.js') }}"></script>

    </head>
    <body>

        <div class="min-h-screen bg-top bg-cover flex flex-col" style="background-image: url(/images/hero-bg.svg)">

            <div class="container text-white">

                <h1 class="text-5xl">Tinker</h1>

                <p>Just tinkering about.</p>
            
            </div>            

        </div>

        <nav class="bg-white p-5 mt-auto sticky top-0">
            The nav
        </nav>

        <div class="min-h-screen bg-top bg-cover flex flex-col bg-red-500">

            <div class="container text-white">

                <h1 class="text-5xl">Tinker</h1>

                <p>Just tinkering about.</p>
            
            </div>

        </div>

        <div class="min-h-screen bg-top bg-cover flex flex-col bg-red-500">

                <div class="container text-white">
    
                    <h1 class="text-5xl">Tinker</h1>
    
                    <p>Just tinkering about.</p>
                
                </div>
    
            </div>

    </body>
</html>
