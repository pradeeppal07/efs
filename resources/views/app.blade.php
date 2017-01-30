<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Eagle Financial Services</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}


   
</head>

<body id="app-layout" background="http://cdn26.us1.fansshare.com/photo/wallpaperbackground/wood-background-wallpaper-background-images-check-free-music-image-css-pictures-twitter-html-powerpoint-493583520.jpg">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

<div class="container">
    <a href="{{ action('CustomerController@index') }}">Customers</a> |
    <a href="{{ action('StockController@index') }}">Stocks</a> |
    <a href="{{ action('InvestmentController@index') }}">Investments</a>|
    <a href="{{ action('MutualfundController@index') }}">Mutualfunds</a>
</div>                

               <!-- Branding Image class="navbar-brand"  -->
                <h4><a href="{{ url('/') }}">
                    Eagle Financial Services-Home Page
                </a></h4>
				<br>
				
					<h5> We manage your funds !</h5>	
				
            </div>

                </div>
    </nav>
<div class="container">
    @yield('content')
	
  
</div>



</body>
</html>
