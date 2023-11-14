<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">


    <title>Urban Monkey</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
              <a class="navbar-brand" href="index.html"><h2>Urban  <em>Monkey</em></h2></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="index.html">Home
                      <span class="sr-only">(current)</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="products.html">Our Products</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about.html">About Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact Us</a>
                  </li>
    <li class="nav-item">
        @if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
            @auth
            <li class="nav-item">
                <a class="nav-link" href="{{url('showcart')}}">
                    Cart[{{$count}}]</a>

              </li>
                <x-app-layout>

                </x-app-layout>


            @else
             <li>   <a class="nav-link" href="{{ route('login') }}" >Log in</a></li>
                @if (Route::has('register'))
                    <a class="nav-link" href="{{ route('register') }}" >Register</a>
                @endif
            @endauth
        </div>
    @endif

            </li>
                </ul>
              </div>
            </div>
          </nav>

      @if(session()->has('message'))
      <div class="alert alert-success" >
      <button type="button" class="close" data-dismiss="alert">x</button>
      {{session()->get('message')}}
      </div>
      @endif
    </header>
<div style ="padding:100px;background: rgb(238,174,202);background: radial-gradient(circle, rgb(238, 221, 228) 0%, rgba(148,187,233,1) 100%);" align="center">
<table style="width:600px;height:600px;">
<tr style="background-color: rgb(255, 0, 0);color:white;">
<td style="padding: 10px";font-size:70px;>Product Name</td>
<td style="padding: 10px";font-size:70px;>Quantity</td>
<td style="padding: 10px";font-size:70px;>Price</td>
<td style="padding: 10px";font-size:70px;>Action</td>
</tr>

<form action="{{url('order')}}" method="POST">

@csrf

@foreach($cart as $carts)
<tr style="background-color:rgb(43, 43, 43);color:rgb(255, 255, 255);">
<td style ="padding:10px;">
    <input type="text" name="productname[]" value="{{$carts->product_title}}" hidden="">
    {{$carts->product_title}}
</td>

<td style ="padding:10px;">
    <input type="text" name="quantity[]" value="{{$carts->quantity}}" hidden="">
    {{$carts->quantity}}</td>



<td style ="padding:10px;">
    <input type="text" name="price[]" value="{{$carts->price}}" hidden="">
    {{$carts->price}}</td>

<td style ="padding:10px;">
<a  class="btn btn-danger"  href="{{url('delete',$carts->id)}}">Delete</a>
</td>


</tr>
@endforeach
</table>
<label for="address">Address:</label><br>
<textarea id="address" name="address" rows="4" cols="50"></textarea>
<br>
<p>Payment Method</p>
    <input type="radio" id="upi" name="payment" value="upi">
    <label for="upi">UPI</label><br>
    <input type="radio" id="cashOnDelivery" name="payment" value="cashOnDelivery">
    <label for="cashOnDelivery">Cash on Delivery</label><br>
    <input type="radio" id="netbanking" name="payment" value="netbanking">
    <label for="netbanking">Netbanking</label><br>



<button class="btn btn-success" style="padding-top:10px;">Confirm Order</button>
</form>
</div>



    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language = "text/Javascript">
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
