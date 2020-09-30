<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style>
        h3.h3 {
            text-align: center;
            margin: 1em;
            text-transform: capitalize;
            font-size: 1.7em;
        }

        /********************* shopping Demo-1 **********************/
        .product-grid {
            font-family: Raleway, sans-serif;
            text-align: center;
            padding: 0 0 72px;
            border: 1px solid rgba(0, 0, 0, .1);
            overflow: hidden;
            position: relative;
            z-index: 1
        }

        .product-grid .product-image {
            position: relative;
            transition: all .3s ease 0s
        }

        .product-grid .product-image a {
            display: block
        }

        .product-grid .product-image img {
            width: 100%;
            height: auto
        }

        .product-grid .pic-1 {
            opacity: 1;
            transition: all .3s ease-out 0s
        }

        .product-grid:hover .pic-1 {
            opacity: 1
        }

        .product-grid .pic-2 {
            opacity: 0;
            position: absolute;
            top: 0;
            left: 0;
            transition: all .3s ease-out 0s
        }

        .product-grid:hover .pic-2 {
            opacity: 1
        }

        .product-grid .social {
            width: 150px;
            padding: 0;
            margin: 0;
            list-style: none;
            opacity: 0;
            transform: translateY(-50%) translateX(-50%);
            position: absolute;
            top: 60%;
            left: 50%;
            z-index: 1;
            transition: all .3s ease 0s
        }

        .product-grid:hover .social {
            opacity: 1;
            top: 50%
        }

        .product-grid .social li {
            display: inline-block
        }

        .product-grid .social li a {
            color: #fff;
            background-color: #333;
            font-size: 16px;
            line-height: 40px;
            text-align: center;
            height: 40px;
            width: 40px;
            margin: 0 2px;
            display: block;
            position: relative;
            transition: all .3s ease-in-out
        }

        .product-grid .social li a:hover {
            color: #fff;
            background-color: #ef5777
        }

        .product-grid .social li a:after, .product-grid .social li a:before {
            content: attr(data-tip);
            color: #fff;
            background-color: #000;
            font-size: 12px;
            letter-spacing: 1px;
            line-height: 20px;
            padding: 1px 5px;
            white-space: nowrap;
            opacity: 0;
            transform: translateX(-50%);
            position: absolute;
            left: 50%;
            top: -30px
        }

        .product-grid .social li a:after {
            content: '';
            height: 15px;
            width: 15px;
            border-radius: 0;
            transform: translateX(-50%) rotate(45deg);
            top: -20px;
            z-index: -1
        }

        .product-grid .social li a:hover:after, .product-grid .social li a:hover:before {
            opacity: 1
        }

        .product-grid .product-discount-label, .product-grid .product-new-label {
            color: #fff;
            background-color: #ef5777;
            font-size: 12px;
            text-transform: uppercase;
            padding: 2px 7px;
            display: block;
            position: absolute;
            top: 10px;
            left: 0
        }

        .product-grid .product-discount-label {
            background-color: #333;
            left: auto;
            right: 0
        }

        .product-grid .rating {
            color: #FFD200;
            font-size: 12px;
            padding: 12px 0 0;
            margin: 0;
            list-style: none;
            position: relative;
            z-index: -1
        }

        .product-grid .rating li.disable {
            color: rgba(0, 0, 0, .2)
        }

        .product-grid .product-content {
            background-color: #fff;
            text-align: center;
            padding: 12px 0;
            margin: 0 auto;
            position: absolute;
            left: 0;
            right: 0;
            bottom: -27px;
            z-index: 1;
            transition: all .3s
        }

        .product-grid:hover .product-content {
            bottom: 0
        }

        .product-grid .title {
            font-size: 13px;
            font-weight: 400;
            letter-spacing: .5px;
            text-transform: capitalize;
            margin: 0 0 10px;
            transition: all .3s ease 0s
        }

        .product-grid .title a {
            color: #828282
        }

        .product-grid .title a:hover, .product-grid:hover .title a {
            color: #ef5777
        }

        .product-grid .price {
            color: #333;
            font-size: 17px;
            font-family: Montserrat, sans-serif;
            font-weight: 700;
            letter-spacing: .6px;
            margin-bottom: 8px;
            text-align: center;
            transition: all .3s
        }

        .product-grid .price span {
            color: #999;
            font-size: 13px;
            font-weight: 400;
            text-decoration: line-through;
            margin-left: 3px;
            display: inline-block
        }

        .product-grid .add-to-cart {
            color: #000;
            font-size: 13px;
            font-weight: 600
        }

        @media only screen and (max-width: 990px) {
            .product-grid {
                margin-bottom: 30px
            }
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
            <a class="btn btn-info" href="{{ route('cart.index') }}"><i class="fa fa-shopping-cart"></i>
                @if(\Illuminate\Support\Facades\Session::has('cart'))
                    {{ \Illuminate\Support\Facades\Session::get('cart')->totalQuantity }}
                @else
                    0
                @endif
            </a>
        </ul>
    </div>
</nav>
<div class="container">
    <h3 class="h3">shopping Demo-1 </h3>
    <div class="row">
        @foreach($products as $product)
            <div class="col-md-3 col-sm-6">
                <div class="product-grid">
                    <div class="product-image">
                        <a href="#">
                            <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-1.jpg">
                            <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-2.jpg">
                        </a>
                        <ul class="social">
                            <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                            <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                            <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                        <span class="product-new-label">Sale</span>
                        <span class="product-discount-label">20%</span>
                    </div>
                    <ul class="rating">
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star disable"></li>
                    </ul>
                    <div class="product-content">
                        <h3 class="title"><a href="#">{{ $product->name }}</a></h3>
                        <div class="price">{{ number_format($product->price, 0, '.','.') }}
                            <span>{{number_format($product->price_old, 0, '.','.') }}</span>
                        </div>
                        <a class="add-to-cart" href="{{ route('addToCart', $product->id) }}">+ Add To Cart</a>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


</body>
</html>
