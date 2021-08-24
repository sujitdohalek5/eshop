
<body style="margin: 0 auto; max-width: 1500px; width: 100%;">
	<div>
    <!-- Top bar Start -->
    <div class="top-bar">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <i class="fa fa-envelope"></i>
                    <?php echo $site_data['contact_mail']; ?>
                </div>
                <div class="col-sm-6">
                    <i class="fa fa-phone-alt"></i>
                    <?php echo $site_data['contact_no']; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Top bar End -->
    
    <!-- Nav Bar Start -->
    <div class="nav">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                <a href="#" class="navbar-brand">MENU</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto">
                        <a href="<?php echo url('/'); ?>" class="nav-item nav-link <?php echo ((url()->current() == url('/')) ? 'active'  : ''); ?>">Home</a>
                        <a href="<?php echo url('products'); ?>" class="nav-item nav-link <?php echo ((url()->current() == url('products')) ? 'active'  : ''); ?>">Products</a>
                        <a href="product-detail.html" class="nav-item nav-link">Product Detail</a>
                        <a href="contact.html" class="nav-item nav-link">Contact Us</a>
                    </div>
                    <div class="navbar-nav ml-auto" style="">
                        <?php if(isset($user_data['id'])){ ?>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">User Account</a>
                                <div class="dropdown-menu">
                                    <a href="#" class="dropdown-item">Login</a>
                                    <a href="#" class="dropdown-item">Register</a>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Nav Bar End -->      
    
    <!-- Bottom Bar Start -->
    <div class="bottom-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-3">
                    <div class="logo">
                        <a href="index.html">
                            <img src="<?php echo url('logo/logo_2.jpg'); ?>" alt="Logo">
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="search">
                        <input type="text" placeholder="Search">
                        <button><i class="fa fa-search"></i></button>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="user">
                        <?php if(isset($user_data['id'])){ ?>
                        <a href="wishlist.html" class="btn wishlist" title="wishlist">
                            <i class="fa fa-heart"></i>
                            <!-- <span>(0)</span> -->
                        </a>
                        <a href="cart.html" class="btn cart" title="cart">
                            <i class="fa fa-shopping-cart"></i>
                            <!-- <span>(0)</span> -->
                        </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bottom Bar End -->   