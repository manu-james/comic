
@extends("theme2")

@section("content")
<div class="bg-image"
  style="
    background-image: url('https://data.whicdn.com/images/326399109/original.jpg');
    height: 100vh; "
>
<div class="container">
<div class="row">
<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 ">
 </div>
 <div class="col col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 col-xxl-5 ">
 <br><br>
 <form action="/pstore" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
@if(Session::get('success'))
            <div class="alert alert-success">
            {{Session::get('success')}}
            </div>
     @endif
    @if(Session::get('fail'))
            <div class="alert alert-danger">
            {{Session::get('fail')}}
            </div>
    @endif
    <br>

 <table class="table table-dark table-borderless "  id="ip3" >


<tr><td></td><td><h2><b>Add Product</b></h2> </td></tr>
<tr>
    <td><center>Comicbook Category</center></td>
    <td> 
    <select name="ComicbookCategory" class="form-control" >
    @foreach($cat as $cats)
              <option>{{$cats->CategoryName }}</option>
              @endforeach
    </td>
 </tr>
 <tr >
     <td><center>Comicbook Id</center></td>
     <td><input name="ComicbookId"   type="text" class="form-control" placeholder="Comicbook Id" required>
     </td>
     
 </tr>
 <tr>
     <td><center>Comicbook Name</center></td>
     <td><input name="ComicbookName"   type="text" class="form-control"  placeholder="Comicbook Name" required>
  </td>
 </tr>
 <tr>
     <td><center>Comicbook Price</center></td>
     <td><input name="ComicbookPrice"   type="text" class="form-control" placeholder="Comicbook Price" required>

     </td>
 </tr>
 <tr>
     <td><center>Comicbook Description</center></td>
     <td><input name="ComicbookDescription"   type="text" class="form-control"  placeholder="Comicbook Description" required>
     </td>
 </tr>

 <tr>
    <td><center>Image :</center></td>
    <td><input type="file" name="pimage"class="form-control" required></td>
</tr>
<tr>
    <td></td>
    <td> <button class="btn btn-secondary" id="ip4">Add</button></td>
    
 </tr>

 </table>
 {{ csrf_field() }}
 </form>

 </div>

 <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4 ">

 </div>
</div>
</div>
</div>
@endsection