@extends("theme1")

@section("content")
<div class="bg-image"
  style="
    background-image: url('https://photos.infinum.com/store/7c4406acb38cc9a53f16ec3bb98cc676.jpg');
    height: 200vh; "
>
<div class="container" >
  <div  class="row"><h1  style="color :white;"><br><br>LIFE<br><br>   </h1> <br><br></div>
  <div  class="row">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<div class="container">
    <div class="row clearfix">
        <div class="col-lg-3 col-md-4 col-sm-12">
            <div class="card product_item">
                <div class="body">
                    <div class="cp_img">
                        <img src="data:image/jpeg;base64,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" style=width:400px;height:400px; alt="Product" class="img-fluid">
                        <div class="hover">
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-plus"></i></a>
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-shopping-cart"></i></a>
                        </div>
                    </div>
                    <div class="product_details">
                        <h5><a href="ec-product-detail.html">Simple Black Clock</a></h5>
                        <ul class="product_price list-unstyled">
                            <li class="old_price">$16.00</li>
                            <li class="new_price">$13.00</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-12">
            <div class="card product_item">
                <div class="body">
                    <div class="cp_img">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSzPPrIAwOwFgqOywNRKzOVFzUacJoGfYhQZA&usqp=CAU" style=width:400px;height:400px; alt="Product" class="img-fluid">
                        <div class="hover">
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-plus"></i></a>
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-shopping-cart"></i></a>
                        </div>
                    </div>
                    <div class="product_details">
                        <h5><a href="ec-product-detail.html">Simple Black Clock</a></h5>
                        <ul class="product_price list-unstyled">
                            <li class="old_price">$12.00</li>
                            <li class="new_price">$11.00</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-12">
            <div class="card product_item">
                <div class="body">
                    <div class="cp_img">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSA7du_imjUUBix59g0bW_tYv_k2JJe7DOv1Q&usqp=CAU   " style=width:400px;height:400px; alt="Product" class="img-fluid">
                        <div class="hover">
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-plus"></i></a>
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-shopping-cart"></i></a>
                        </div>
                    </div>
                    <div class="product_details">
                        <h5><a href="ec-product-detail.html">Brone Candle</a></h5>
                        <ul class="product_price list-unstyled">
                            <li class="old_price">$23.00</li>
                            <li class="new_price">$17.00</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-12">
            <div class="card product_item">
                <div class="body">
                    <div class="cp_img">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRSjLUJPobAsEjYveqN7bUgJxyTLj6u59jUOg&usqp=CAU" style=width:400px;height:400px; alt="Product" class="img-fluid">
                        <div class="hover">
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-plus"></i></a>
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-shopping-cart"></i></a>
                        </div>
                    </div>
                    <div class="product_details">
                        <h5><a href="ec-product-detail.html">Simple Black Clock</a></h5>
                        <ul class="product_price list-unstyled">
                            <li class="old_price">$16.00</li>
                            <li class="new_price">$10.00</li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
        <div><br><br><br></div>
        <div class="col-lg-3 col-md-4 col-sm-12">
        
            <div class="card product_item">
                <div class="body">
                    <div class="cp_img">
                        <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1482986707l/28477116._SX318_.jpg" style=width:400px;height:400px; alt="Product" class="img-fluid">
                        <div class="hover">
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-plus"></i></a>
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-shopping-cart"></i></a>
                        </div>
                    </div>
                    <div class="product_details">
                        <h5><a href="ec-product-detail.html">Brone Lamp Glasses</a></h5>
                        <ul class="product_price list-unstyled">
                            <li class="old_price">$18.00</li>
                            <li class="new_price">$15.00</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-12">
            <div class="card product_item">
                <div class="body">
                    <div class="cp_img">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS5xup4lA24gAwvEyQ0iT7HlQ_COcvJgWuGLQ&usqp=CAU" style=width:400px;height:400px; alt="Product" class="img-fluid">
                        <div class="hover">
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-plus"></i></a>
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-shopping-cart"></i></a>
                        </div>
                    </div>
                    <div class="product_details">
                        <h5><a href="ec-product-detail.html">Unero Small Bag</a></h5>
                        <ul class="product_price list-unstyled">
                            <li class="old_price">$21.00</li>
                            <li class="new_price">$17.00</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-12">
            <div class="card product_item">
                <div class="body">
                    <div class="cp_img">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTKfV86M-FzSMP6Ijg0fCnJcc3OFB3IZeUc3g&usqp=CAU" style=width:400px;height:400px; alt="Product" class="img-fluid">
                        <div class="hover">
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-plus"></i></a>
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-shopping-cart"></i></a>
                        </div>
                    </div>
                    <div class="product_details">
                        <h5><a href="ec-product-detail.html">Unero Round lass</a></h5>
                        <ul class="product_price list-unstyled">
                            <li class="old_price">$16.00</li>
                            <li class="new_price">$10.00</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-12">
            <div class="card product_item">
                <div class="body">
                    <div class="cp_img">
                        <img src="https://images-na.ssl-images-amazon.com/images/I/51GHqEvrmuL._SX327_BO1,204,203,200_.jpg" style=width:400px;height:400px; alt="Product" class="img-fluid">
                        <div class="hover">
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-plus"></i></a>
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-shopping-cart"></i></a>
                        </div>
                    </div>
                    <div class="product_details">
                        <h5><a href="ec-product-detail.html">Wood Simple Clock</a></h5>
                        <ul class="product_price list-unstyled">
                            <li class="old_price">$16.00</li>
                            <li class="new_price">$10.00</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div><br><br><br></div>
       
                </div>
            </div>
        </div>
    </div>
</div>




<form  action="/loginaction" method="post" >

{{ csrf_field() }}


</form>
</div>
</div> 
</div>
</div>


@endsection