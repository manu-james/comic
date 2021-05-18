@extends("theme2")

@section("content")

<div class="bg-image"
  style="
    background-image: url('https://photos.infinum.com/store/7c4406acb38cc9a53f16ec3bb98cc676.jpg');
    height: 200vh; "
>

 


<form  action="/loginaction" method="post" >

{{ csrf_field() }}


</form>
</div>
</div> 
</div>
</div>


@endsection