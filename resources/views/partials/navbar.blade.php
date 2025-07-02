<div class="prime-container d-flex">
    <div class="sidebar" id="side-navbar">
        <div class="header-box px-3 pt-3 pb-0 d-flex justify-content-between">
            <h1 class="fs-4"><span class="text-white"><i class="fas fa-store" id="icon-shop"></i>Sidebar Admin</span></h1>
            <hr>
        </div>

        <hr class="h-color mx-3">
        
        <ul class="list-unstyled px-3 py-2">
            <li class="">
                <!--active-->
                <a href="/" class="text-decoration-none px-3 py-2 d-block">
                    <i class="fas fa-tachometer-alt" id="icon-dashboard"></i>
                    Dashboard
                </a>
            </li>
        </ul>

        <hr class="h-color mx-3">

        <ul class="list-unstyled px-3">
            <li class=""><a href="/productsscreen" class="text-decoration-none px-3 py-2 d-block">Product</a></li>
        </ul>
    </div>
    
    <div class="body-navbar">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <div class="d-flex w-100 justify-content-between align-items-center">
                    <div class="search-container">
                    <form class="d-flex" role="search">
                        <input class="form-control me-0" type="search" placeholder="Search for..." aria-label="Search">
                        <button class="btn btn-outline-success" id="btn-search" type="submit"><i class="fas fa-search" id="icon-search"></i></button>
                    </form>
                    </div>
                <div class="d-flex align-items-center" id="navbarSupportedContent">
                    <ul class="navbar-nav d-flex">
                        
                        <li class="nav-item" id="notification">
                            <a class="nav-link active" id="notification" aria-current="page" href="#">
                                <i class="fas fa-bell"></i>
                                <span class="icon-button-number">3+</span>
                            </a>
                        </li>

                        <li class="nav-item" id="message">
                            <a class="nav-link" href="#">
                                <i class="fas fa-envelope"></i>
                                <span class="icon-button-number">1</span>
                            </a>
                        </li>
                        
                        <div class="vertical-line"></div>

                        <p class="admin mb-0">admin</p>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-user"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    
        <div class="content">
            @yield('content')
        </div>
    </div>
</div>