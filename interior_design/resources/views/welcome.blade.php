<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Interior Design</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">

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

   <div id="div1">
        <div id="div2">
            <div id= "nav_wrapper">
                <head><h1>Infinity Software Company Limited</h1></head>
                <ul>
                    <li><a href="../" class="active">Home</a></li>

                    <li><a href="{{ url('/index') }}">Design</a>
                        <ul>
                            <li><a href="{{ url('/index') }}" class="active1">Kitchen</a></li>
                            <li><a href="{{ url('/index2') }}">Home</a></li>
                            <li><a href="{{ url('/index5') }}">Office</a></li>
                            <li><a href="{{ url('/index3') }}">Living room</a></li>
                            <li><a href="{{ url('/index4') }}">Bedroom</a></li>
                        </ul>

                    </li>
                    <li><a href="{{ url('/project') }}">Project</a></li>
                    <li><a href="{{ url('/news') }}">News</a></li>
                    <li><a href="{{ url('/contact') }}">About Us</a>
                       <ul>
                        <li><a href="{{ url('/contact') }}">Contact</a></li>
                        <li><a href="{{ url('/map') }}">Map</a></li>
                        <li><a href="{{ url('/direction') }}">Direction</a></li>
                    </li>
                </ul>
  <li><a href="{{ url('/login') }}" target="blank">Login</a></li>
  <li><a href="{{ url('/register') }}" target="blank">Register</a></li>
            </div>
        </div>
            <div class="divider"></div>

    <h2 class="homesub">Welcome to our website</h2>
    <h1 class="homedes">Interior</h1>
    <h1 class="homep">Designing</h1>
    
    <br>
    <div id="wrapper">

      <a href="https://www.facebook.com/Infinity-Software-Company-Limited-1994132243972041/?ref=bookmarks" target="blank"><div class="box" id="facebook">&#62220;</div></a>
      <a href="https://twitter.com/InfinitySoftwa3" target="blank"><div class="box" id="twitter">&#62217;</div></a>
       <a href="https://www.instagram.com/infinitysoftwarec/" target="blank"><div class="box" id="instagram">&#62253;</div></a>


           <div>
      <footer
 class="footer-link">
          <p class="tm-copyright-text">All Right Reserved By &copy; 2018 Interior Designing</p>

        </footer>
    </div>



    </div>




    </body>
</html>
