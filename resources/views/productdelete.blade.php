@extends("theme2")

@section("content")

<div class="container">
<div class="row">

<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
<div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">

<form action="/proddeleteprocess/{{$proddel->id}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}<table class="table table-borderless">


<tr>
    <td>Comicbook Category</td>
    <td><input type="text"  name="ComicbookCategory" class="form-control" value="{{$proddel->ComicbookCategory}}"></td>

</tr>
<br>

<tr>
    <td>Comicbook Id</td>
    <td><input type="text"  name="ComicbookId" class="form-control" value="{{$proddel->ComicbookId}}"></td>
</tr>
<br>

<tr>
    <td>Comicbook Name</td>
    <td><input type="text" name="ComicbookName" class="form-control" value="{{$proddel->ComicbookName}}"></td>
</tr>
<br>

<tr>
    <td>Comicbook Price</td>
    <td><input type="text" name="ComicbookPrice" class="form-control" value="{{$proddel->ComicbookPrice}}"></td>
</tr>
<br>

<tr>
    <td>Comicbook Description</td>
    <td><input type="text" name="ComicbookDescription" class="form-control" value="{{$proddel->ComicbookDescription}}"></td>
</tr>
<tr>
    <td>image</td>
    <td><input type="file" name="pimage"class="form-control" value="{{$proddel->pimage}}"></td>
    
    
</tr>

<tr>
   
    <td><td> <button onclick="return confirm('Are you sure want to delete ?')" class="btn btn-danger"> DELETE  </button></td></td>
   
</tr>
</table>
</form>
</div>
<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
</div>
</div>

@endsection