
<!DOCTYPE html>
<html lang="en">
  <head>

      @include('admin.css')
  </head>
  <body>

      <!-- partial -->
      @include('admin.sidebar')
      @include('admin.navbar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">

        <div class="container" align="center">
            @if(session()->has('message'))
            <div class="alert alert-success" >
            <button type="button" class="close" data-dismiss="alert">x</button>
            {{session()->get('message')}}
            </div>
            @endif

<table>

<tr style="background-color:red;">
<td style="padding: 20px;">Title</td>
<td style="padding: 20px;">Description</td>
<td style="padding: 20px;">Quantity</td>
<td style="padding: 20px;">Price</td>
<td style="padding: 20px;">Image</td>
<td style="padding: 20px;">Update</td>
<td style="padding: 20px;">Delete</td>
</tr>

@foreach ($data as $product)




<tr align="center" style="background-color:rgb(60, 114, 71);">
    <td style="padding: 10px;">{{$product->title}}</td>
    <td style="padding: 10px;">{{$product->description}}</td>
    <td style="padding: 10px;">{{$product->quantity}}</td>
    <td style="padding: 10px;">{{$product->price}}</td>
    <td style="padding: 10px;"><img  height="200" width="200" src="/productimage/{{$product->image}}"></td>
    <td style="padding: 10px;"><a class="btn btn-primary" href="{{url('updateview',$product->id)}}">Update</a></td>
    <td style="padding: 10px;"><a class="btn btn-danger" onclick="return confirm('Are you sure')" href="{{url('deleteproduct',$product->id)}}">Delete</a></td>

</tr>
@endforeach
</table>
        </div>
    </div>
      <!-- partial -->
      @include('admin.script')


  </body>
</html>

