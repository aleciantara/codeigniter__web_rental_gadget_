    <body>
        
        <!-- Header-->
        <header>
            <img style="background-size:cover" src="<?php echo base_url('assets/assets_shop/img/header.png')?>">
        </header>
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 ">
                <span><?php echo $this->session->flashdata('pesan')?></span>
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-1 justify-content-center">
                    
                    <div class="col mb-5">
                    <?php foreach($gadget as $gd): ?>
                        <div class="product-grid__product-wrapper">
                            <div class="product-grid__product">
                                <div class="product-grid__img-wrapper">			
                                    <img src="<?php echo base_url('assets/upload/'.$gd->gambar)?>" alt="Img"  class="product-grid__img" />
                                </div>
                                <h5 class="text text-dark"><?php echo $gd->merk ?></h5>
                                <h4><?php echo $gd->tipe ?></h4>
                                <h4 class="product-grid__price ">Rp <?php echo number_format($gd->harga,0,',','.')?>/Hari </h4>
                                <div class="product-grid__extend-wrapper">
                                    <div class="product-grid__extend">
                                        <p type="hidden" class="product-grid__description">dummytext dummytext dummytext dummytext dummytext</p>
                                        <?php 
                                        if ($gd->status == "0"){
                                            echo"<span style='margin-right: 5px; pointer-events: none;' class='btn-danger product-grid__btn product-grid__add-to-cart' disabled>Telah Dirental</span>";	
                                            echo anchor("customer/dashboard/detail_gadget/".$gd->id_gadget, "<span class='btn-dark product-grid__btn product-grid__view'>Lihat Detail</span>");		
                                        }else{
                                            echo anchor("customer/rental/tambah_rental/".$gd->id_gadget, "<span style='margin-right: 5px' class='btn-warning product-grid__btn product-grid__add-to-cart'>Rental</span>");		
                         
                                            echo anchor("customer/dashboard/detail_gadget/".$gd->id_gadget, "<span class='btn-dark product-grid__btn product-grid__view'>Lihat Detail</span>");
                                        }?>
                                        </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
				    </div>
                </div>         
            </div>  
        </section>
    </body>

