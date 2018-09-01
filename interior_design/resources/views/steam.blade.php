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
            <h1>Our Supplier Team</h1>
            <p>The party furnishing goods or services in a business transaction in return for the agreed upon compensation. As such, suppliers do not generally interact with consumers directly, leaving that task to vendors or shop owners. It is not unusual for a supplier to provide volume discounts to vendors when they agree to sign long-term contracts or place orders for large quantities. There are suppliers found in just about any type of business. Wholesale suppliers are very common in the retail industry, where they are likely to manufacture and deliver large quantities of products to their client. Supply companies also work in niche markets as well, such as importing and exporting packaged foods, ethnic or cultural goods, or any other range of products that have a small but reliable demand. In general, exporters of this type will handle all the details for shipment and delivery to the vendor, and include the associated costs in the final charges issued to the client. In international trade relationships between suppliers and its clients are governed by an International Supply Contract.</p>
            <table width="1060" border="1">
      <tr>
        <td width="353" align="center">
            <figure><img src="img/jishan.jpg" width="217" height="237" alt="Mrinmoyee Dey Amin">
            <figcaption>Md. Asifuzzaman Jishan</figcaption>
            </td></figure>

       <td width="353" align="center">
            <figure><img src="img/mahmud.jpg" width="217" height="237" alt="Tareq Rahman">
            <figcaption>Md. Mahmud Hossain</figcaption>
            </td></figure>

        <td width="353" align="center">
            <figure><img src="img/samia.jpg" width="217" height="237" alt="Nahid Reza">
            <figcaption>Afsana Sikhder Samia</figcaption>
            </td></figure>

        <td width="353" align="center">
            <figure><img src="img/atik.jpg" width="217" height="237" alt="Nahid Reza">
            <figcaption>Md. Atikuzzaman Atik</figcaption>
            </td></figure>
      </tr>
      <tr>

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
