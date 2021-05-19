@extends("theme2")
@section("content")
<div class="bg-image"
  style="
    background-image: url('https://data.whicdn.com/images/326399109/original.jpg');
    height: 200vh; "
>
<br>
<div class="container">
<div class="row">
<div class="col col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2 ">
 </div>
 <div class="col col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xxl-8 ">
 <br><br><div class="container" style="background-color: #EBEBEB;">
 <form >
         @foreach($customeradmin as $item)
         
        <table class="table ">
        <tr>
        <th scope="row">USER ID</th>
        <th scope="row">USER NAME</th>
        <th scope="row">EMAIL</th>
         <th scope="row">PHONE NO</th>
         <th scope="row">ADDRESS</th>
         </tr>
    <tr >
     <!-- <td>{{$item->usname}}</td> -->
     <td ><a >{{$item->id}}</a></td>
     <td ><a >{{$item->name}}</a></td>
     <td>{{$item->email}}</td>
     <td>{{$item->mobile}}</td>
     <td>{{$item->address}}</td>
     <td><a class="btn btn-warning" href="customerdelete/{{$item->id}}">CANCEL</a></td>
    </tr>
</table>
@endforeach
</form>
</div>
 <div class="col col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2">
</div>
</div>
</div>
</div>
@endsection
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>       
</body>
</html>