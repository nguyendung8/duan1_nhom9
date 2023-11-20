 
 <!-- slide show -->
 <div class="sildeshow">
     <div id="carouselExample" class="carousel slide">
         <div class="carousel-inner">
             <div class="carousel-item active">
                 <img src="./view/img/banner.jpeg" class="d-block w-100" alt="...">
             </div>
             <div class="carousel-item">
                 <img src="./view/img/banner5.jpg" class="d-block w-100" alt="...">
             </div>
             <div class="carousel-item">
                 <img src="./view/img/banner4.jpg" class="d-block w-100" alt="...">
             </div>
         </div>
         <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
             <span class="carousel-control-prev-icon" aria-hidden="true"></span>
             <span class="visually-hidden">Previous</span>
         </button>
         <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
             <span class="carousel-control-next-icon" aria-hidden="true"></span>
             <span class="visually-hidden">Next</span>
         </button>
     </div>
     <div class="introduce_sale">
         <div class="sale">
             <h2 style="color: #fda121;">Thế giới laptop</h2>
             <span style="color: white;">Nhiều ưu đãi khi đặt qua web</span>
         </div>
         <div class="button_sale">
             <a href="">
                 <button class="btn_sale" style="background: none;
                               color:black;
                               width: 150px;
                               color: white;
                               border: 1px solid white;
                               border-radius:5px;">
                     Xem ngay
                 </button>
             </a>
         </div>
     </div>
 </div>

 <!-- menu phân loại sản phẩm -->
 <section>
     <div class="product_classification">
         <div class="category_classification">
             <div class="classification">
                 <img style="width: 89px; height: 90px" src="./view/img/anh1.webp" alt="">
                 <h6 style="margin-top:30px; width:80px;">Macbook</h6>
             </div>
             <div class="classification">
                 <img style="width: 89px; height: 90px" src="./view/img/anh2.webp" alt="">
                 <h6 style="margin-top:30px; width:80px;">ASUS</h6>
             </div>
             <div class="classification">
                 <img style="width: 89px; height: 90px" src="./view/img/anh3.webp" alt="">
                 <h6 style="margin-top:30px; width:80px;">MSI</h6>
             </div>
             <div class="classification">
                 <img style="width: 89px; height: 90px" src="./view/img/anh4.webp" alt="">
                 <h6 style="margin-top:30px; width:80px;">LENOVO</h6>
             </div>
             <div class="classification">
                 <img style="width: 89px; height: 90px" src="./view/img/anh5.webp" alt="">
                 <h6 style="margin-top:30px; width:80px;">HP</h6>
             </div>
             <div class="classification">
                 <img style="width: 89px; height: 90px" src="./view/img/anh6.webp" alt="">
                 <h6 style="margin-top:30px; width:80px;">ACER</h6>
             </div>
             <div class="classification">
                 <img style="width: 89px; height: 90px" src="./view/img/anh8.webp" alt="">
                 <h6 style="margin-top:30px; width:80px;">DELL</h6>
             </div>
             <div class="classification">
                 <img style="width: 89px; height: 90px" src="./view/img/anh9.webp" alt="">
                 <h6 style="margin-top:30px; width:80px;">GIGABYTE</h6>
             </div>
             <div class="classification">
                 <img style="width: 89px; height: 90px" src="./view/img/anh7.webp" alt="">
                 <h6 style="margin-top:30px; width:80px;">LG</h6>
             </div>
         </div>
     </div>
 </section>

 <!-- danh sách sản phẩm-->
 <h2 style="text-align: center;">SẢN PHẨM MỚI</h2>
 <div class="list_product">
    <?php foreach($spnew as $sp) :?>
        <?php extract($sp) ?>
     <div class="card" style="width: 18rem;">
        <a href="?act=productdetail&product_id=<?= $product_id ?>"> <img href="spct.php" src="./uploads/<?=$img?>" class="card-img-top" alt="..."> </a>
        <div class="card-body">
            <a href="?act=productdetail&product_id=<?= $product_id ?>"> <h5 class="card-title"><?=$name?></h5> </a>
            <p class="card-text"><?=$price?></p>
            <a href="#" class="btn btn-primary">Mua</a>
            <a href="spct.php" class="btn btn-primary">Thêm vào giỏ hàng</a>
        </div>
    </div>
     <?php endforeach ?>
 </div>

 <h2 style="text-align: center;">SẢN PHẨM NỔI BẬT</h2>
 <div class="list_product">
    <?php foreach($spnb as $sp) :?>
        <?php extract($sp)?>
     <div class="card" style="width: 18rem;">
        <a href="?act=productdetail&product_id=<?= $product_id ?>"> <img href="spct.php" src="./uploads/<?=$img?>" class="card-img-top" alt="..."> </a>
        <div class="card-body">
            <a href="?act=productdetail&product_id=<?= $product_id ?>"> <h5 class="card-title"><?=$name?></h5> </a>
            <p class="card-text"><?=$price?></p>
            <a href="#" class="btn btn-primary">Mua</a>
            <a href="spct.php" class="btn btn-primary">Thêm vào giỏ hàng</a>
         </div>
     </div>
     <?php endforeach ?>
     <!-- <div class="card" style="width: 18rem;">
         <img href="spct.php" src="img/sp6.webp" class="card-img-top" alt="...">
         <div class="card-body">
             <h5 class="card-title">Laptop Dell Inspirion 15 3511 PDP3H</h5>
             <p class="card-text">13.490.000đ</p>
             <a href="#" class="btn btn-primary">Mua</a>
             <a href="spct.php" class="btn btn-primary">Thêm vào giỏ hàng</a>
         </div>
     </div>

     <div class="card" style="width: 18rem;">
         <img href="spct.php" src="img/sp7.webp" class="card-img-top" alt="...">
         <div class="card-body">
             <h5 class="card-title">Laptop Lenovo Ideapad Gaming 3 15ARH7 82SB00BBVN</h5>
             <p class="card-text">18.290.000đ</p>
             <a href="#" class="btn btn-primary">Mua</a>
             <a href="spct.php" class="btn btn-primary">Thêm vào giỏ hàng</a>
         </div>
     </div>

     <div class="card" style="width: 18rem;">
         <img href="spct.php"  src="img/sp8.webp" class="card-img-top" alt="...">
         <div class="card-body">
             <h5 class="card-title">Laptop Asus VivoBook X515KA-EJ135W</h5>
             <p class="card-text">7.549.000đ</p>
             <a href="#" class="btn btn-primary">Mua</a>
             <a href="spct.php" class="btn btn-primary">Thêm vào giỏ hàng</a>
         </div> -->
     <!-- </div> -->
 </div>