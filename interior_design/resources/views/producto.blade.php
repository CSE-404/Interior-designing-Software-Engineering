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
            <h1>Product Section</h1>
            <p>Interior design is the art and science of enhancing the interior of a building to achieve a healthier and more aesthetically pleasing environment for the people using the space. An interior designer is someone who plans, researches, coordinates, and manages such projects. Interior design is a multifaceted profession that includes conceptual development, space planning, site inspections, programming, research, communicating with the stakeholders of a project, construction management, and execution of the design.</p>
            <ol style="color: black;font-size: 15px;text-align: left">
                <li>Latest Accessories</li>
                <ul>
                    <li><a href="https://www.contractdesign.com/products/accessories-shelves-storage/maxine-snider-tokyo/" style="color: white" target="_blank">Maxine Snider: Tokyo</li></a>
                    <li><a href="https://www.contractdesign.com/products/accessories/left-lily/" style="color: white" target="_blank">LEFT: Lily</li></a>
                    <li><a href="https://www.contractdesign.com/products/accessories/amuneal-wall-hanging-credenza/" style="color: white" target="_blank">Amuneal: Wall Hanging Credenza</li></a>
                    <li><a href="https://www.contractdesign.com/products/accessories-signage-wayfinding/takeform-attend/" style="color: white" target="_blank">Takeform: Attend</li></a>
                    <li><a href="https://www.contractdesign.com/products/furniture-systems-benching/inscape-designtex-and-west-elm-west-elm-workplace/" style="color: white" target="_blank">Inscape, Designtex, and West Elm: West Elm Workplace</li></a>
                </ul>
                <li>Latest Architectural</li>
                <ul>
                    <li><a href="https://www.contractdesign.com/products/architectural-surfacing-materials/wilsonart-texture-intrigue/" style="color: white" target="_blank">Wilsonart: Texture Intrigue</li></a>
                    <li><a href="https://www.contractdesign.com/products/architectural/nevins-bio-canvas/" style="color: white" target="_blank">Nevins: Bio Canvas</li></a>
                    <li><a href="https://www.contractdesign.com/products/architectural/sky-frame-pivot/" style="color: white" target="_blank">Sky-Frame: Pivot</li></a>
                </ul>
                <li>Latest Bath</li>
                <ul>
                     <li><a href="https://www.contractdesign.com/products/bath/coastal-shower-doors-berkwood/" style="color: white" target="_blank">Coastal Shower Doors: Berkwood</li></a>
                    <li><a href="https://www.contractdesign.com/products/bath/duravit-xsquare-collection/" style="color: white" target="_blank">Duravit: XSquare Collection</li></a>
                    <li><a href="https://www.contractdesign.com/products/bath-basins/margraf-nuvola/" style="color: white" target="_blank">Margraf: Nuvola</li></a>
                </ul>
                 <li>Latest Education Solutions</li>
                 <ul>
                     <li><a href="https://www.contractdesign.com/products/education-solutions/casala-class/" style="color: white" target="_blank">Casala: Class</li></a>
                    <li><a href="https://www.contractdesign.com/products/education-solutions/rt-london-evolve/" style="color: white" target="_blank">RT London: Evolve</li></a>
                    <li><a href="https://www.contractdesign.com/products/education-solutions/davis-techniq/" style="color: white" target="_blank">Davis: Techniq</li></a>
                </ul>
            </ol>
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
