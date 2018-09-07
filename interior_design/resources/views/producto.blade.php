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
        </span><a href="{{ url ('/hire?id=1-8')}}">My Designer</a>
                </li>
                <li>
                    <span>
          <img src="http://www.webhostingreviewsbynerds.com/wp-content/plugins/rss-poster/cache/e17b1_fnal-570x456.png" width="32" height="32" >
 
        </span><a href="{{ url('producto')}}">Product Order</a>
                </li>
                <li>
                    <span>
          <img src="http://www.webhostingreviewsbynerds.com/wp-content/plugins/rss-poster/cache/e17b1_fnal-570x456.png" width="32" height="32" >
        </span><a href="{{ url('/myproduct?id=1-8')}}">My Product</a>
                </li><li>
                    <span>
          <img src="http://www.webhostingreviewsbynerds.com/wp-content/plugins/rss-poster/cache/e17b1_fnal-570x456.png" width="32" height="32" >
        </span><a href="{{ url('contactu')}}">Contact us</a>
                </li>
            </ul>

        </div>

        <div class="content">
            <h1>Product Section</h1>
            <p>Interior design is the art and science of enhancing the interior of a building to achieve a healthier and more aesthetically pleasing environment for the people using the space. An interior designer is someone who plans, researches, coordinates, and manages such projects. Interior design is a multifaceted profession that includes conceptual development, space planning, site inspections, programming, research, communicating with the stakeholders of a project, construction management, and execution of the design.</p>
            
<table width="1060" border="1">
      <tr>
        <td width="353" align="center">
            <figure>
            <a href="https://www.bocadolobo.com/en/limited-edition/coffee-and-side-tables/monet-patina-center-table/" target="_blank"><img src="img/1.jpg" width="217" height="237" alt="Monet Patina-CENTER TABLE"></a>
            <a href="https://www.bocadolobo.com/en/limited-edition/coffee-and-side-tables/monet-patina-center-table/" target="_blank"><figcaption>Monet Patina-CENTER TABLE</figcaption></a>
        <a href="/myproduct?id=1"><input type="submit" value="Add Product"></a>
            </td></figure></a>

       <td width="353" align="center">
            <figure>
                <a href="https://www.bocadolobo.com/en/limited-edition/coffee-and-side-tables/monet-silver-center-table/" target="_blank"><img src="img/2.jpg" width="217" height="237" alt="Monet Silver-CENTER TABLE"></a>
                <a href="https://www.bocadolobo.com/en/limited-edition/coffee-and-side-tables/monet-silver-center-table/" target="_blank">
            <figcaption>Monet Silver-CENTER TABLE</figcaption></a>
             <a href="/myproduct?id=2"><input type="submit" value="Add Product"></a>
            </td></figure>
            </td></figure></a>

        <td width="353" align="center">
            <figure>
                <a href="https://www.bocadolobo.com/en/limited-edition/cabinets-and-bookcases/pixel/" target="_blank"><img src="img/3.jpg" width="217" height="237" alt="Pixel
CABINET"></a>
            <a href="https://www.bocadolobo.com/en/limited-edition/cabinets-and-bookcases/pixel/" target="_blank"><figcaption>Pixel-CABINET</figcaption></a>
               <a href="/myproduct?id=3"><input type="submit" value="Add Product"></a>
            </td></figure></a>

            </td></figure></a>

        <td width="353" align="center">
            <figure>
                <a href="https://www.bocadolobo.com/en/limited-edition/cabinets-and-bookcases/oblong/" target="_blank"><img src="img/4.jpg" width="217" height="237" alt="Oblong
CABINET"></a>
            <a href="https://www.bocadolobo.com/en/limited-edition/cabinets-and-bookcases/oblong/" target="_blank"><figcaption>Oblong-CABINET</figcaption></a>
        <a href="/myproduct?id=4"><input type="submit" value="Add Product"></a>
            </td></figure></a>
            </td></figure></a>

      </tr>
      <tr>

<table width="1060" border="1">
      <tr>
         <td width="353" align="center">
            <figure>
                <a href="https://www.bocadolobo.com/en/limited-edition/seating-others/odette-sofa/" target="_blank"><img src="img/5.jpg" width="217" height="237" alt="Odette
Sofa">
            <a href="https://www.bocadolobo.com/en/limited-edition/seating-others/odette-sofa/" target="_blank"><figcaption>Odette-Sofa</figcaption></a>
               <a href="/myproduct?id=5"><input type="submit" value="Add Product"></a>
            </td></figure></a>
            </td></figure></a>

        <td width="353" align="center">
            <figure>
                <a href="https://www.bocadolobo.com/en/limited-edition/seating-others/imperfectio-sofa/" target="_blank"><img src="img/6.jpg" width="217" height="237" alt="Imperfectio
SOFA">
             <a href="https://www.bocadolobo.com/en/limited-edition/seating-others/imperfectio-sofa/" target="_blank"><figcaption>Imperfectio-SOFA</figcaption></a>
               <a href="/myproduct?id=6"><input type="submit" value="Add Product"></a>
            </td></figure></a>
            </td></figure></a>

       <td width="353" align="center">
            <figure>
                <a href="https://www.bocadolobo.com/en/limited-edition/seating-others/soleil-sofa/" target="_blank"><img src="img/7.jpg" width="217" height="237" alt="Soleil
Sofa">
            <a href="https://www.bocadolobo.com/en/limited-edition/seating-others/soleil-sofa/" target="_blank"><figcaption>Soleil-Sofa</figcaption></a>
               <a href="/myproduct?id=7"><input type="submit" value="Add Product"></a>
            </td></figure></a>
            </td></figure></a>

       <td width="353" align="center">
            <figure>
                <a href="https://www.bocadolobo.com/en/limited-edition/lamps/supernova-chandelier/" target="_blank"><img src="img/8.jpg" width="217" height="237" alt="Supernova
CHANDELIER">
            <a href="https://www.bocadolobo.com/en/limited-edition/lamps/supernova-chandelier/" target="_blank"><figcaption>Supernova-CHANDELIER</figcaption></a>
               <a href="/myproduct?id=8"><input type="submit" value="Add Product"></a>
            </td></figure></a>
            </td></figure></a>
      </tr>
      <tr>
   <table width="1060" border="1">
      <tr>
        <td width="353" align="center">
            <figure>
            <a href="https://www.bocadolobo.com/en/limited-edition/lamps/newton/" target="_blank"><img src="img/9.jpg" width="217" height="237" alt="Newton
SUSPENSION LAMP"></a>
            <a href="https://www.bocadolobo.com/en/limited-edition/lamps/newton/" target="_blank"><figcaption>Newton-SUSPENSION LAMP</figcaption></a>
        <a href="/myproduct?id=9"><input type="submit" value="Add Product"></a>
            </td></figure></a>

       <td width="353" align="center">
            <figure>
                <a href="https://www.bocadolobo.com/en/limited-edition/lamps/newton-chandelier/" target="_blank"><img src="img/10.jpg" width="217" height="237" alt="Newton Chandelier
LAMP"></a>
                <a href="https://www.bocadolobo.com/en/limited-edition/lamps/newton-chandelier/" target="_blank">
            <figcaption>Newton-Chandelier
LAMP</figcaption></a>
             <a href="/myproduct?id=10"><input type="submit" value="Add Product"></a>
            </td></figure>
            </td></figure></a>

        <td width="353" align="center">
            <figure>
                <a href="https://www.bocadolobo.com/en/limited-edition/tables-and-desks/stonehenge-dining-table/" target="_blank"><img src="img/11.jpg" width="217" height="237" alt="Stonehenge
DINING TABLE"></a>
            <a href="https://www.bocadolobo.com/en/limited-edition/tables-and-desks/stonehenge-dining-table/" target="_blank"><figcaption>Stonehenge-DINING TABLE</figcaption></a>
               <a href="/myproduct?id=11"><input type="submit" value="Add Product"></a>
            </td></figure></a>

            </td></figure></a>

        <td width="353" align="center">
            <figure>
                <a href="https://www.bocadolobo.com/en/bathrooms/bathtubs/symphony/" target="_blank"><img src="img/12.jpg" width="217" height="237" alt="Symphony
BATHTUB"></a>
            <a href="https://www.bocadolobo.com/en/bathrooms/bathtubs/symphony/" target="_blank"><figcaption>Symphony-BATHTUB</figcaption></a>
        <a href="/myproduct?id=12"><input type="submit" value="Add Product"></a>
            </td></figure></a>
            </td></figure></a>

      </tr>
      <tr>
        <table width="1060" border="1">
      <tr>
        <td width="353" align="center">
            <figure>
            <a href="https://www.bocadolobo.com/en/bathrooms/freestandings/lapiaz/" target="_blank"><img src="img/13.jpg" width="217" height="237" alt="Lapiaz
FREESTAND"></a>
            <a href="https://www.bocadolobo.com/en/bathrooms/freestandings/lapiaz/" target="_blank"><figcaption>Lapiaz-FREESTAND</figcaption></a>
        <a href="/myproduct?id=13"><input type="submit" value="Add Product"></a>
            </td></figure></a>

       <td width="353" align="center">
            <figure>
                <a href="https://www.bocadolobo.com/en/bathrooms/freestandings/newton/" target="_blank"><img src="img/14.jpg" width="217" height="237" alt="Newton
FREESTAND"></a>
                <a href="https://www.bocadolobo.com/en/bathrooms/freestandings/newton/" target="_blank">
            <figcaption>Newton-FREESTAND</figcaption></a>
             <a href="/myproduct?id=14"><input type="submit" value="Add Product"></a>
            </td></figure>
            </td></figure></a>

        <td width="353" align="center">
            <figure>
                <a href="https://www.bocadolobo.com/en/soho-collection/coffee-and-side-tables/mondrian-white-bedside-table/" target="_blank"><img src="img/15.jpg" width="217" height="237" alt="Soho White
BEDSIDE TABLE"></a>
            <a href="https://www.bocadolobo.com/en/soho-collection/coffee-and-side-tables/mondrian-white-bedside-table/" target="_blank"><figcaption>Soho-White BEDSIDE TABLE</figcaption></a>
               <a href="/myproduct?id=15"><input type="submit" value="Add Product"></a>
            </td></figure></a>

            </td></figure></a>

        <td width="353" align="center">
            <figure>
                <a href="https://www.bocadolobo.com/en/coolors-collection/mirrors/ring-square/" target="_blank"><img src="img/16.jpg" width="217" height="237" alt="Ring Square
MIRROR"></a>
            <a href="https://www.bocadolobo.com/en/coolors-collection/mirrors/ring-square/" target="_blank"><figcaption>Ring-Square MIRROR</figcaption></a>
        <a href="/myproduct?id=16"><input type="submit" value="Add Product"></a>
            </td></figure></a>
            </td></figure></a>

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
