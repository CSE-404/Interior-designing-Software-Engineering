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
        </span><a href="{{ url ('/hire?id=1-8')}}">My designer</a>
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
            <figure>
            <a href="https://www.linkedin.com/in/mrinmoyee-dey-amin-003245142/" target="_blank"><img src="img/mrinmoyee.jpg" width="217" height="237" alt="Mrinmoyee Dey Amin"></a>
            <a href="https://www.linkedin.com/in/mrinmoyee-dey-amin-003245142/" target="_blank"><figcaption>Mrinmoyee Dey Amin</figcaption></a>
        <a href="/hire?id=1"><input type="submit" value="Add Designer"></a>
            </td></figure></a>

       <td width="353" align="center">
            <figure>
                <a href="https://www.linkedin.com/in/tareq-rahman-442541170/" target="_blank"><img src="img/ta.jpg" width="217" height="237" alt="Tareq Rahman"></a>
                <a href="https://www.linkedin.com/in/tareq-rahman-442541170/" target="_blank">
            <figcaption>Tareq Rahman</figcaption></a>
             <a href="/hire?id=2"><input type="submit" value="Add Designer"></a>
            </td></figure>
            </td></figure></a>

        <td width="353" align="center">
            <figure>
                <a href="https://www.linkedin.com/in/nahid-reza-a89542170/" target="_blank"><img src="img/nahid.jpg" width="217" height="237" alt="Nahid Reza"></a>
            <a href="https://www.linkedin.com/in/nahid-reza-a89542170/" target="_blank"><figcaption>Nahid Reza</figcaption></a>
               <a href="/hire?id=3"><input type="submit" value="Add Designer"></a>
            </td></figure></a>

            </td></figure></a>

        <td width="353" align="center">
            <figure>
                <a href="https://www.linkedin.com/in/nadia-rahman-7a0093132/" target="_blank"><img src="img/nadia.jpg" width="217" height="237" alt="Nadia Rahman"></a>
            <a href="https://www.linkedin.com/in/nadia-rahman-7a0093132/" target="_blank"><figcaption>Nadia Rahman</figcaption></a>
        <a href="/hire?id=4"><input type="submit" value="Add Designer"></a>
            </td></figure></a>
            </td></figure></a>

      </tr>
      <tr>

<table width="1060" border="1">
      <tr>
         <td width="353" align="center">
            <figure>
                <a href="https://www.linkedin.com/in/shahriyar-mahmud-56482b133" target="_blank"><img src="img/mahmud.jpg" width="217" height="237" alt="Mahmud Hossain">
            <a href="https://www.linkedin.com/in/shahriyar-mahmud-56482b133" target="_blank"><figcaption>Md. Mahmud Hossain</figcaption></a>
               <a href="/hire?id=5"><input type="submit" value="Add Designer"></a>
            </td></figure></a>
            </td></figure></a>

        <td width="353" align="center">
            <figure>
                <a href="https://www.linkedin.com/in/asifuzzaman-jishan-a56173122/" target="_blank"><img src="img/jishan.jpg" width="217" height="237" alt="Mrinmoyee Dey Amin">
             <a href="https://www.linkedin.com/in/asifuzzaman-jishan-a56173122/" target="_blank"><figcaption>Md. Asifuzzaman Jishan</figcaption></a>
               <a href="/hire?id=6"><input type="submit" value="Add Designer"></a>
            </td></figure></a>
            </td></figure></a>

       <td width="353" align="center">
            <figure>
                <a href="https://www.linkedin.com/in/afsana-samia-750315148" target="_blank"><img src="img/samia.jpg" width="217" height="237" alt="Nahid Reza">
            <a href="https://www.linkedin.com/in/afsana-samia-750315148" target="_blank"><figcaption>Afsana Sikhder Samia</figcaption></a>
               <a href="/hire?id=7"><input type="submit" value="Add Designer"></a>
            </td></figure></a>
            </td></figure></a>

       <td width="353" align="center">
            <figure>
                <a href="https://www.linkedin.com/in/md-atik-uz-zaman-b1a010154/" target="_blank"><img src="img/atik.jpg" width="217" height="237" alt="Nahid Reza">
            <a href="https://www.linkedin.com/in/md-atik-uz-zaman-b1a010154/" target="_blank"><figcaption>Md. Atikuzzaman Atik</figcaption></a>
               <a href="/hire?id=8"><input type="submit" value="Add Designer"></a>
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
