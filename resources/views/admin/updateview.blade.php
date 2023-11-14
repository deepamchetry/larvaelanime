
<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">

      @include('admin.css')
      <style>
        .title{
            color: rgb(255, 255, 255);
            padding-top:25px;
            font-size:30px;
        }
        label{
        display: inline-block;
        width:200px;
        }

        </style>
  </head>
  <body>

      <!-- partial -->
      @include('admin.sidebar')
      @include('admin.navbar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <div class="container" align="center">
        <h1 class="title">Add product</h1>

        @if(session()->has('message'))
        <div class="alert alert-success" >
        <button type="button" class="close" data-dismiss="alert">x</button>
        {{session()->get('message')}}
        </div>
        @endif
<form action="{{url('updateproduct',$data->id)}}" method="post" enctype="multipart/form-data">
@csrf

<div style="padding: 15px;">
<label for="title">Product Title</label>
<input style="color:black;" type="text" name="title" id="title" value="{{$data->title}}" required="">
</div>

<div style="padding: 15px">
<label for="price">Price</label>
<input style="color:black;" type="number" name="price" id="price" value="{{$data->price}}"  required="">
</div>

<div style="padding: 15px">
<label for="des">Description</label>
<input style="color:black;" type="text" name="des" id="des" value="{{$data->description}}"  required="">
</div>
<div style="padding: 15px">
<label for="quantity">Quantity</label>
<input style="color:black;" type="text" name="quantity" id="quantity" value="{{$data->quantity}}"  required="">
</div>


<div style="padding: 15px">
<label for="quantity">Old Image</label>
<img height="200" width="200" src="/productimage/{{$data->image}}" alt="">
</div>


<div style="padding: 15px">
<label for="">Change the image </label>
<input type="file" name="file" id="file">
</div>

<div style="padding: 15px">
<input class="btn btn-success" type="submit">
</div>


</form>




        </div>
      </div>
      <!-- partial -->
      @include('admin.script')


  </body>
</html>

