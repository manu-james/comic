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
 <table class="table">
 
<tr><th scope="row">Comicbook Category</th>
    <th scope="row">Comicbook Id</th>
    <th scope="row">Comicbook Name</th>
    <th scope="row">Comicbook Price</th>
    <th scope="row">Comicbook Description</th>
    <th scope="row"><center>image</center></th>
   
    
    </tr>
    
@foreach($prod as $prods)
</div>
<tr class="table-primary">
   
    <td>{{$prods->ComicbookCategory}}</td>
    <td>{{$prods->ComicbookId}}</td>
    <td>{{$prods->ComicbookName}}</td>
    <td>{{$prods->ComicbookPrice}}</td>
    <td>{{$prods->ComicbookDescription}}</td>
    <td><img width="150" height="100" src="{{ URL ::asset('assets/project_img/'.$prods->pimage) }}"></td>
    <td><a class="btn btn-warning" href="userdelete/{{$prods->id}}">REMOVE</a><a class="btn btn-warning" href="edit/{{$prods->id}}">EDIT</a></td>
    <td></td>
</tr>

@endforeach
</table>

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