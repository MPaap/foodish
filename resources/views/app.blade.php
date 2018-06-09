<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">

    <title>Smoelenboek</title>

    <link href="/css/app.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="app">
    <nav class="navigation">
        <div class="container" style="height: 100%;">
            <div class="row" style="height: 100%;">
                <div class="navigation-item col d-flex justify-content-center align-items-center"></div>
                <router-link class="navigation-item col d-flex justify-content-center align-items-center" to="/" exact>
                    <span>
                        <span class="fas fa-home fa-2x"></span>
                    </span>
                </router-link>
                <router-link class="navigation-item col d-flex justify-content-center align-items-center" to="/about">
                    <span>
                        <span class="fas fa-utensils fa-2x"></span>
                    </span>
                </router-link>
                <div class="navigation-item col d-flex justify-content-center align-items-center"></div>
            </div>
        </div>
    </nav>

    <div class="section">
        <router-view></router-view>
    </div>
</div>

<script src="/js/app.js"></script>
</body>
</html>
