<div class="header_section">
    <div class="container">
        <nav class="navbar navbar-dark bg-dark">
            <a class="logo" href="index.html"><img src="images/logo.png"></a>
            <div class="search_section">
                <ul>
                    <li>
                        <a href="{{route('cart.view')}}">Cart({{session()->has('myCart')?count(session()->get('myCart')):0}})</a>
                    </li>
                    @auth
                        <li>{{auth()->user()->name}}</li>
                        <li>
                            <a class="btn btn-danger" href="{{route('customer.logout')}}">Logout</a>
                        </li>
                    @else
                    <li>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#login">
                           Login
                        </button>
                    </li>
                    <li>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#registration">
                            Registration
                        </button>
                    </li>
                    @endguest

                   </ul>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarsExample01">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="category.html">Category</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="products.html">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="clients.html">Client</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact Us</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!--banner section start -->
    <div class="banner_section layout_padding">
        <div id="my_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="taital_main">
                                    <h4 class="banner_taital"><span class="font_size_90">50%</span> Discount Online Shop</h4>
                                    <p class="banner_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration </p>
                                    <div class="book_bt"><a href="#">Shop Now</a></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div><img src="images/img-1.png" class="image_1"></div>
                            </div>
                        </div>
                        <div class="button_main">
                            <button class="all_text">All</button>
                            <form action="{{route('search')}}" method="get">
                            <input type="text" class="Enter_text" placeholder="Enter keywords" name="search_key">
                            <button class="search_text">Search</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="taital_main">
                                    <h4 class="banner_taital"><span class="font_size_90">50%</span> Discount Online Shop</h4>
                                    <p class="banner_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration </p>
                                    <div class="book_bt"><a href="#">Shop Now</a></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div><img src="images/img-1.png" class="image_1"></div>
                            </div>
                        </div>
                        <div class="button_main"><button class="all_text">All</button><input type="text" class="Enter_text" placeholder="Enter keywords" name=""><button class="search_text">Search</button></div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="taital_main">
                                    <h4 class="banner_taital"><span class="font_size_90">50%</span> Discount Online Shop</h4>
                                    <p class="banner_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration </p>
                                    <div class="book_bt"><a href="#">Shop Now</a></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div><img src="images/img-1.png" class="image_1"></div>
                            </div>
                        </div>
                        <div class="button_main"><button class="all_text">All</button><input type="text" class="Enter_text" placeholder="Enter keywords" name=""><button class="search_text">Search</button></div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
                <i class=""><img src="images/left-icon.png"></i>
            </a>
            <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
                <i class=""><img src="images/right-icon.png"></i>
            </a>
        </div>
    </div>
    <!--banner section end -->
</div>




<!-- Modal -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Please Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('customer.login')}}" method="post">
            @csrf
                <div class="modal-body">
                <div class="form-group">
                    <label for="email">Enter Customer Email:</label>
                    <input name="customer_email" id="email" type="email" class="form-control" placeholder="Enter Customer Email">
                </div>

                <div class="form-group">
                    <label for="password">Enter Customer Password:</label>
                    <input name="customer_password" id="password" type="password" class="form-control" placeholder="Enter Customer Password">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>

        </div>
    </div>
</div>

{{--Registration--}}
<div class="modal fade" id="registration" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Registration</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="{{route('customer.register')}}" method="post">
                @csrf
            <div class="modal-body">
                <div class="form-group">
                    <label for="name">Enter Customer Name:</label>
                    <input name="customer_name" id="name" type="text" class="form-control" placeholder="Enter Customer Name">
                </div>
                <div class="form-group">
                    <label for="email">Enter Customer Email:</label>
                    <input name="customer_email" id="email" type="email" class="form-control" placeholder="Enter Customer Email">
                </div>

                <div class="form-group">
                    <label for="password">Enter Customer Password:</label>
                    <input name="customer_password" id="password" type="password" class="form-control" placeholder="Enter Customer Password">
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>

        </div>
    </div>
</div>
