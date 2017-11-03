<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .top-left {
                position: absolute;
                left: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <?php if(Route::has('login')): ?>
                <div class="top-right links">
                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(url('/home')); ?>">Home</a>
                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>">Login</a>
                        <a href="<?php echo e(route('register')); ?>">Register</a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
            <div class="top-left">
                <form>
                    <div class ="form-group">
                        <label>@id</label>
                        <input type="text" id="@id">
                    </div>
                    <div class="form-group">
                        <label>name</label>
                        <input type="text" id="name">
                    </div>
                    <div class="form-group">
                        <label>modified</label>
                        <input type="datetime" id="modified" >
                    </div>
                    <div class="form-group">
                        <label>programId</label>
                        <input type="text" id="programId" >
                    </div>
                    <div class="form-group">
                        <label>programName</label>
                        <input type="text" id="programName" >
                    </div>
                    <div class="form-group">
                        <label>price</label>
                        <input type="number" step=0.01 id="price" >
                    </div>
                    <div class="form-group">
                        <label>currency</label>
                        <input type="text" id="currency" >
                    </div>
                    <div class="form-group">
                        <label>description</label>
                        <input type="text" id="description" >
                    </div>
                    <div class="form-group">
                        <label>manufacturer</label>
                        <input type="text" id="manufacture" >
                    </div>
                    <div class="form-group">
                        <label>ean</label>
                        <input type="text" id="ean" >
                    </div>
                    <div class="form-group">
                        <label>image</label>
                        <input type="image" id="image" >
                    </div>
                    <div class="form-group">
                        <label>priceOld</label>
                        <input type="number" step=0.01 id="priceOld" >
                    </div>
                    <div class="form-group">
                        <label>shippingCosts</label>
                        <input type="number" step=0.01 id="shippingCosts" >
                    </div>
                    <div class="form-group">
                        <label>merchantCategory</label>
                        <input type="text" id="merchantCategory" >
                    </div>
                    <div class="form-group">
                        <label>merchantEmail</label>
                        <input type="email" id="merchantEmail" >
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>                    
            </div>
            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
