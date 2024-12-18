<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Yummy Tummy</title>

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="main-navbar shadow-sm sticky-top">
        <div class="top-navbar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2 my-auto d-none d-sm-none d-md-block d-lg-block">
                      <a href="{{ route('dashboard') }}">  <h5 class="brand-name">Yummy Tummy</h5></a>
                    </div>
                    <div class="col-md-4 my-auto">
    <form action="{{ route('search.products') }}" method="GET">
        <div class="input-group">
            <input type="search" name="search" placeholder="Search your product" class="form-control" />
            <button class="btn bg-white" type="submit">
                <i class="fa fa-search"></i>
            </button>
        </div>
    </form>
</div>

                    <div class="col-md-6 my-auto">
                        <ul class="nav justify-content-end">
                        <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-hamburger"></i> Products
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('admin.addProduct') }}"><i class=""></i> Add new Product
</a></li>
                                <li><a class="dropdown-item" href="{{ route('admin.viewProduct') }}"><i class=""></i> Show Products</a></li>
                               
                                </ul>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('customer.viewMyCartProduct') }}">
                                    <i class="fa fa-shopping-cart"></i> Cart
                                </a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.orders', Auth::user()->id) }}">
                                    <i class="fa-solid fa-utensils pr-5"></i> My Orders
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class="fa fa-heart"></i> Wishlist (0)
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('customer.viewMyCartProduct') }}">
                                    <i class="fa fa-money"></i> Payments
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img class="rounded-circle" style="width: 30px; height: 30px; object-fit: cover; margin-right: 8px;" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}">
{{ Auth::user()->name }}
 
                                </a>

 
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('profile.show') }}"><i class="fa fa-user"></i> Profile</a></li>
                                <!-- <li><a class="dropdown-item" href="#"><i class="fa fa-list"></i> My Orders</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fa fa-heart"></i> My Wishlist</a></li> -->
                                <!-- <li><a class="dropdown-item" href="{{ route('customer.viewMyCartProduct') }}"><i class="fa fa-shopping-cart"></i> My Cart</a></li> -->
                                <li>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="dropdown-item" style="border: none; background: none; cursor: pointer;">
            <i class="fa fa-sign-out"></i> Logout
        </button>
    </form>
</li>                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand d-block d-sm-block d-md-none d-lg-none" href="#">
                    Funda Ecom
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">All Categories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">New Arrivals</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Featured Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Electronics</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Fashions</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Accessories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Appliances</a>
                        </li>
                    </ul>
                </div> -->
            </div>
        </nav>
    </div>

    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        .main-navbar{
    border-bottom: 1px solid #ccc;
}
.main-navbar .top-navbar{
    background-color: #2874f0;
    padding-top: 10px;
    padding-bottom: 10px;
}
.main-navbar .top-navbar .brand-name{
    color: #fff;
}
.main-navbar .top-navbar .nav-link{
    color: #fff;
    font-size: 16px;
    font-weight: 500;
}
.main-navbar .top-navbar .dropdown-menu{
    padding: 0px 0px;
    border-radius: 0px;
}
.main-navbar .top-navbar .dropdown-menu .dropdown-item{
    padding: 8px 16px;
    border-bottom: 1px solid #ccc;
    font-size: 14px;
}
.main-navbar .top-navbar .dropdown-menu .dropdown-item i{
    width: 20px;
    text-align: center;
    color: #2874f0;
    font-size: 14px;
}
.main-navbar .navbar{
    padding: 0px;
    background-color: #ddd;
}
.main-navbar .navbar .nav-item .nav-link{
    padding: 8px 20px;
    color: #000;
    font-size: 15px;
}

@media only screen and (max-width: 600px) {
    .main-navbar .top-navbar .nav-link{
        font-size: 12px;
        padding: 8px 10px;
    }
}
    </style>
</body>
</html>