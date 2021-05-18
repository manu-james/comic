@extends("theme1")

@section("content")
<div class="bg-image"
  style="
    background-image: url('https://th.bing.com/th/id/OIP.QAn3pzSP8Bl4dDDgH_SXTQHaH9?pid=ImgDet&rs=1');
    height: 100vh; "
>
<div class="container" 
  ><div  class="row">

<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
<div  class="col col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5" >


<form  action="/loginaction" method="post" >

{{ csrf_field() }}
<br><br><br><br>
<div class="row"> <br><br></div>
<div class="row" class="bg-image"
  style="
    background-image: url('https://cdn.wallpapersafari.com/50/30/6MTewx.png');
    height: 400px;  "  class="table-table-borderless"  >
<table >
<h1 style="color :white;">  FEEDBACK FORM</h1><br>
 
   <tr>
    <td><br></td>
     <td><textarea style='background-color:white;display:block;width:auto' id="w3review" name="w3review" rows="4" cols="50">
    Please type your feedback....  </textarea><br>
</td>
 </tr>
 <tr>
     <td></td>
     <td> <button class="btn btn-success"> SUBMIT </button></td><br>
 </tr>
</table>
</form>
</div>
</div> 
</div>
</div>


@endsection