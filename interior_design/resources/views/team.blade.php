@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
<title>Interior Design</title>
 <link rel="stylesheet" href="css/style1.css">

 </head>
 <div id="header">
        <div class="logo">
            <a href="../">Infinity Software Company Limited</a>
        </div>
    </div>
    <a class="mobile">MENU</a>


    <div id="container">

        <div class="sidebar">
            <ul id="nav">
                <li>
                    <span>
          <img src="http://www.webhostingreviewsbynerds.com/wp-content/plugins/rss-poster/cache/e17b1_fnal-570x456.png" width="32" height="32" >
        </span><a href="{{ url('home')}}">Home</a>
                </li>
                <li>
                    <span>
          <img src="http://www.webhostingreviewsbynerds.com/wp-content/plugins/rss-poster/cache/e17b1_fnal-570x456.png" width="32" height="32" >
        </span>
                    <a class="selected" href="{{ url('profile')}}">My Profile</a>
                </li>
                <li>
                    <span>
          <img src="http://www.webhostingreviewsbynerds.com/wp-content/plugins/rss-poster/cache/e17b1_fnal-570x456.png" width="32" height="32" >
        </span><a href="{{ url('team')}}">Our Interior Designer Team</a>
                </li>
                <li>
                    <span>
          <img src="http://www.webhostingreviewsbynerds.com/wp-content/plugins/rss-poster/cache/e17b1_fnal-570x456.png" width="32" height="32" >
        </span><a href="{{ url('hire')}}">Hire a designer</a>
                </li>
                <li>
                    <span>
          <img src="http://www.webhostingreviewsbynerds.com/wp-content/plugins/rss-poster/cache/e17b1_fnal-570x456.png" width="32" height="32" >
        </span><a href="{{ url('steam')}}">Our Suppliers Team</a>
                </li>
                <li>
                    <span>
          <img src="http://www.webhostingreviewsbynerds.com/wp-content/plugins/rss-poster/cache/e17b1_fnal-570x456.png" width="32" height="32" >
        </span><a href="{{ url('producto')}}">Product Order</a>
                </li>
                <li>
                    <span>
          <img src="http://www.webhostingreviewsbynerds.com/wp-content/plugins/rss-poster/cache/e17b1_fnal-570x456.png" width="32" height="32" >
        </span><a href="{{ url('contactu')}}">Contact us</a>
                </li>
            </ul>

        </div>

        <div class="content">
            <h1>Our Designer Team</h1>
            <p>Interior designers improve the look, usage, and safety of interior spaces. Their main purpose is to meet the needs of the occupants by enhancing all aspects of the space, including color, lighting, textures, furniture, and the spatial relationships. Interior designers work on the interior spaces of all kinds of buildings, including homes, offices, hospitals, shopping malls, restaurants, and theaters. However, their duties are similar from project to project.</p>
<table width="1060" border="1">
      <tr>
        <td width="353" align="center">
            <figure><img src="img/mrinmoyee.jpg" width="217" height="237" alt="Mrinmoyee Dey Amin">
            <figcaption>Mrinmoyee Dey Amin</figcaption>
            </td></figure>

       <td width="353" align="center">
            <figure><img src="img/ta.jpg" width="217" height="237" alt="Tareq Rahman">
            <figcaption>Tareq Rahman</figcaption>
            </td></figure>

        <td width="353" align="center">
            <figure><img src="img/nahid.jpg" width="217" height="237" alt="Nahid Reza">
            <figcaption>Nahid Reza</figcaption>
            </td></figure>

        <td width="353" align="center">
            <figure><img src="img/nadia.jpg" width="217" height="237" alt="Nahid Reza">
            <figcaption>Nadia Rahman</figcaption>
            </td></figure>
      </tr>
      <tr>


        </div>
    </div>
    <!-- #container -->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="js/index.js"></script>
     <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 
</body>
</html>
