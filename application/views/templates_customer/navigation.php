<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="<?php echo base_url('customer/dashboard')?>">SI Rental Gadget</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('customer/dashboard')?>">Beranda</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Tentang Kami</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Produk</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!">All Products</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                                <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex">
                    <ul class="navbar-nav mb-2 mb-lg-0 ms-lg-4">
                            <li class="nav-item"><a class="nav-link" href="<?php echo base_url('customer/transaksi')?>">Transaksi</a></li>
                    </ul>
                        <!-- <button class="btn btn-outline-dark me-3" href="<?php echo base_url('customer/transaksi')?> type="submit">
                            Transaksi
                        </button>                       
                        -->
                    </form>
                    <?php if($this->session->userdata('username')) { ?>
                        <ul class="navbar-nav mb-2 mb-lg-0 ms-lg-4">
                            <li class="nav-item"><a class="nav-link" href="<?php echo base_url('auth/logout')?>">Log out</a></li>
                        </ul>
                    <?php } else { ?>
                        <ul class="navbar-nav mb-2 mb-lg-0 ms-lg-4">
                            <li class="nav-item"><a class="nav-link" href="<?php echo base_url('customer/register')?>">Register</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo base_url('auth/login')?>">Login</a></li>
                        </ul>
                    <?php }  ?>

                </div>
            </div>
        </nav>