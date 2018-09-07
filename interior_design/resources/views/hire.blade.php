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
        </span><a href="{{ url('/hire?id=1-8')}}">My Designer</a>
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
            <h1>Hiring Section</h1>
            <p>Interior design is the art and science of enhancing the interior of a building to achieve a healthier and more aesthetically pleasing environment for the people using the space. An interior designer is someone who plans, researches, coordinates, and manages such projects. Interior design is a multifaceted profession that includes conceptual development, space planning, site inspections, programming, research, communicating with the stakeholders of a project, construction management, and execution of the design.</p>
            <div id="box">
                <div class="box-top">Hire Designer</div>
                <div class="box-panel">
                    @foreach($hires as $data)
                        @if($data['id']==$_GET['id'])
                        {{$data['name']}}
                        @endif
                    @endforeach

                </div>
            </div>
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
