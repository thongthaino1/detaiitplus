<div class="home_section_bg">

    <!--Categories product area start-->
<!--    <div class="categories_product_area mb-55">-->
<!--        <div class="container">-->
<!--            <div class="categories_product_inner">-->
<!--                <div class="single_categories_product">-->
<!--                    <div class="categories_product_content">-->
<!--                        <h4><a href="shop.html"> Màn hình máy tính</a></h4>-->
<!--                        <p>12 Products</p>-->
<!--                    </div>-->
<!--                    <div class="categories_product_thumb">-->
<!--                        <a href="shop.html"><img src="public/assets/img/s-product/category1.jpg" alt=""></a>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="single_categories_product">-->
<!--                    <div class="categories_product_content">-->
<!--                        <h4><a href="shop.html"> Computer</a></h4>-->
<!--                        <p>24 Products</p>-->
<!--                    </div>-->
<!--                    <div class="categories_product_thumb">-->
<!--                        <a href="shop.html"><img src="public/assets/img/s-product/category2.jpg" alt=""></a>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="single_categories_product">-->
<!--                    <div class="categories_product_content">-->
<!--                        <h4><a href="shop.html"> Fashion</a></h4>-->
<!--                        <p>22 Products</p>-->
<!--                    </div>-->
<!--                    <div class="categories_product_thumb">-->
<!--                        <a href="shop.html"><img src="public/assets/img/s-product/category3.jpg" alt=""></a>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="single_categories_product">-->
<!--                    <div class="categories_product_content">-->
<!--                        <h4><a href="shop.html"> Sunglasses</a></h4>-->
<!--                        <p>06 Products</p>-->
<!--                    </div>-->
<!--                    <div class="categories_product_thumb">-->
<!--                        <a href="shop.html"><img src="public/assets/img/s-product/category4.jpg" alt=""></a>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="single_categories_product">-->
<!--                    <div class="categories_product_content">-->
<!--                        <h4><a href="shop.html"> Baby & Kids</a></h4>-->
<!--                        <p>20 Products</p>-->
<!--                    </div>-->
<!--                    <div class="categories_product_thumb">-->
<!--                        <a href="shop.html"><img src="public/assets/img/s-product/category5.jpg" alt=""></a>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="single_categories_product">-->
<!--                    <div class="categories_product_content">-->
<!--                        <h4><a href="shop.html"> Accessories</a></h4>-->
<!--                        <p>04 Products</p>-->
<!--                    </div>-->
<!--                    <div class="categories_product_thumb">-->
<!--                        <a href="shop.html"><img src="public/assets/img/s-product/category6.jpg" alt=""></a>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="single_categories_product">-->
<!--                    <div class="categories_product_content">-->
<!--                        <h4><a href="shop.html"> Cells & Tablets</a></h4>-->
<!--                        <p>12 Products</p>-->
<!--                    </div>-->
<!--                    <div class="categories_product_thumb">-->
<!--                        <a href="shop.html"><img src="public/assets/img/s-product/category7.jpg" alt=""></a>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="single_categories_product">-->
<!--                    <div class="categories_product_content">-->
<!--                        <h4><a href="shop.html"> Accessories</a></h4>-->
<!--                        <p>12 Products</p>-->
<!--                    </div>-->
<!--                    <div class="categories_product_thumb">-->
<!--                        <a href="shop.html"><img src="public/assets/img/s-product/category8.jpg" alt=""></a>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="single_categories_product">-->
<!--                    <div class="categories_product_content">-->
<!--                        <h4><a href="shop.html"> Cells & Tablets</a></h4>-->
<!--                        <p>12 Products</p>-->
<!--                    </div>-->
<!--                    <div class="categories_product_thumb">-->
<!--                        <a href="shop.html"><img src="public/assets/img/s-product/category9.jpg" alt=""></a>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="single_categories_product">-->
<!--                    <div class="categories_product_content">-->
<!--                        <h4><a href="shop.html"> Baby & Kids</a></h4>-->
<!--                        <p>12 Products</p>-->
<!--                    </div>-->
<!--                    <div class="categories_product_thumb">-->
<!--                        <a href="shop.html"><img src="public/assets/img/s-product/category10.jpg" alt=""></a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
    <!--Categories product area end-->

    <!--product area start-->
    <div class="product_area deals_product">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product_header">
                        <div class="section_title">
                            <h2>Ưu đãi trong tháng</h2>

                        </div>
                        <div class="product_tab_btn">
                            <ul class="nav" role="tablist" id="nav-tab">
                                <li>
                                    <a class="active" data-toggle="tab" href="#Fashion" role="tab" aria-controls="Fashion" aria-selected="true">
                                       Máy tính
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#Games" role="tab" aria-controls="Games" aria-selected="false">
                                        Điện thoại
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#Speaker" role="tab" aria-controls="Speaker" aria-selected="false">
                                        Âm thanh
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#Mobile" role="tab" aria-controls="Mobile" aria-selected="false">
                                        Các thiết bị khác
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-content">
                <div class="tab-pane fade show active" id="Fashion" role="tabpanel">
                    <div class="product_carousel product_style product_column5 owl-carousel">

                        <?php
                        foreach ($computer as $com)
                        {
                            echo ' <article class="single_product">
                            <figure>

                                <div class="product_thumb">
                                    <a class="primary_img" href="product_details.php?id='.$com->ID.'"><img src="public/assets/img/product/'.$com->hinh_san_pham.'" alt=""></a>
                                    <a class="secondary_img" href="product_details.php?id='.$com->ID.'"><img src="public/assets/img/product/product1.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">Sale</span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                            <li class="wishlist"><a href="wishlist.html" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                            <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                            <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_content">
                                    <div class="product_content_inner">
                                        <h4 class="product_name"><a href="product_details.php?id='.$com->ID.'">'.$com->ten_san_pham.'</a></h4>
                                        <div class="price_box">
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">'.number_format($com->don_gia,"0",",",".").' VND </span>
                                        </div>
                                        <div class="countdown_text">
                                            <p><span>Hurry Up!</span> Offers ends in: </p>
                                        </div>
                                        <div class="product_timing">
                                            <div data-countdown="2022/04/01"></div>
                                        </div>
                                    </div>
                                    <div class="add_to_cart">
                                        <a onclick="AddToCart('.$com->ID.')" title="Add to cart">Add to cart</a>

                                    </div>

                                </div>
                            </figure>
                        </article>';
                        }
                        ?>

                    </div>
                </div>
                <div class="tab-pane fade" id="Games" role="tabpanel">
                    <div class="product_carousel product_style product_column5 owl-carousel">
                        <?php
                        foreach ($phone as $com)
                        {
                            echo ' <article class="single_product">
                            <figure>

                                <div class="product_thumb">
                                    <a class="primary_img" href="product_details.php?id='.$com->ID.'"><img src="public/assets/img/product/'.$com->hinh_san_pham.'" alt=""></a>
                                    <a class="secondary_img" href="product_details.php?id='.$com->ID.'"><img src="public/assets/img/product/product1.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">Sale</span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                            <li class="wishlist"><a href="wishlist.html" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                            <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                            <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_content">
                                    <div class="product_content_inner">
                                        <h4 class="product_name"><a href="product_details.php?id='.$com->ID.'">'.$com->ten_san_pham.'</a></h4>
                                        <div class="price_box">
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">'.number_format($com->don_gia,"0",",",".").' VND </span>
                                        </div>
                                        <div class="countdown_text">
                                            <p><span>Hurry Up!</span> Offers ends in: </p>
                                        </div>
                                        <div class="product_timing">
                                            <div data-countdown="2022/04/01"></div>
                                        </div>
                                    </div>
                                    <div class="add_to_cart">
                                        <a onclick="AddToCart('.$com->ID.')" title="Add to cart">Add to cart</a>

                                    </div>

                                </div>
                            </figure>
                        </article>';
                        }
                        ?>
                    </div>
                </div>
                <div class="tab-pane fade" id="Speaker" role="tabpanel">
                    <div class="product_carousel product_style product_column5 owl-carousel">
                        <?php
                        foreach ($musix as $com)
                        {
                            echo ' <article class="single_product">
                            <figure>

                                <div class="product_thumb">
                                    <a class="primary_img" href="product_details.php?id='.$com->ID.'"><img src="public/assets/img/product/'.$com->hinh_san_pham.'" alt=""></a>
                                    <a class="secondary_img" href="product_details.php?id='.$com->ID.'"><img src="public/assets/img/product/product1.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">Sale</span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                            <li class="wishlist"><a href="wishlist.html" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                            <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                            <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_content">
                                    <div class="product_content_inner">
                                        <h4 class="product_name"><a href="product_details.php?id='.$com->ID.'">'.$com->ten_san_pham.'</a></h4>
                                        <div class="price_box">
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">'.number_format($com->don_gia,"0",",",".").' VND </span>
                                        </div>
                                        <div class="countdown_text">
                                            <p><span>Hurry Up!</span> Offers ends in: </p>
                                        </div>
                                        <div class="product_timing">
                                            <div data-countdown="2022/04/01"></div>
                                        </div>
                                    </div>
                                    <div class="add_to_cart">
                                        <a onclick="AddToCart('.$com->ID.')" title="Add to cart">Add to cart</a>

                                    </div>

                                </div>
                            </figure>
                        </article>';
                        }
                        ?>
                    </div>
                </div>
                <div class="tab-pane fade" id="Mobile" role="tabpanel">
                    <div class="product_carousel product_style product_column5 owl-carousel">
                        <?php
                        foreach ($orther as $com)
                        {
                            echo ' <article class="single_product">
                            <figure>

                                <div class="product_thumb">
                                    <a class="primary_img" href="product_details.php?id='.$com->ID.'"><img src="public/assets/img/product/'.$com->hinh_san_pham.'" alt=""></a>
                                    <a class="secondary_img" href="product_details.php?id='.$com->ID.'"><img src="public/assets/img/product/product1.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">Sale</span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                            <li class="wishlist"><a href="wishlist.html" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                            <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                            <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_content">
                                    <div class="product_content_inner">
                                        <h4 class="product_name"><a href="product_details.php?id='.$com->ID.'">'.$com->ten_san_pham.'</a></h4>
                                        <div class="price_box">
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">'.number_format($com->don_gia,"0",",",".").' VND </span>
                                        </div>
                                        <div class="countdown_text">
                                            <p><span>Hurry Up!</span> Offers ends in: </p>
                                        </div>
                                        <div class="product_timing">
                                            <div data-countdown="2022/04/01"></div>
                                        </div>
                                    </div>
                                    <div class="add_to_cart">
                                        <a onclick="AddToCart('.$com->ID.')" title="Add to cart">Add to cart</a>

                                    </div>

                                </div>
                            </figure>
                        </article>';
                        }
                        ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--product area end-->

    <!--banner area start-->
    <div class="banner_area mb-55">
        <div class="container">
            <div class="row">

                <?php
                foreach ($banner_thumb as $item) {
                    echo '<div class="col-lg-6 col-md-6">
                    <figure class="single_banner">
                        <div class="banner_thumb">
                            <a href="shop.html"><img height="50px" src="public/image/banner/'.$item->hinh.'" alt=""></a>
                        </div>
                    </figure>
                </div>';
                }
                ?>


            </div>
        </div>
    </div>
    <!--banner area end-->

    <!--product area start-->
    <div class="product_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product_header">
                        <div class="section_title">
                            <h2>Sản phẩm nổi bật</h2>

                        </div>
                        <div class="product_tab_btn">
                            <ul class="nav" role="tablist" id="nav-tab2">
                                <li>
                                    <a class="active" data-toggle="tab" href="#Computer" role="tab" aria-controls="Computer" aria-selected="true">
                                        Máy tính
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#Networking" role="tab" aria-controls="Networking" aria-selected="false">
                                        Điện thoại
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#Computer2" role="tab" aria-controls="Computer2" aria-selected="false">
                                        Âm thanh
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#Audio" role="tab" aria-controls="Audio" aria-selected="false">
                                        Khác
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="Computer" role="tabpanel">
                    <div class="product_carousel product_style product_column5 owl-carousel">
                        <?php
                        for($i=0;$i<count($computer1)/2;$i++)
                        {
                            echo '<div class="product_items">';
                            for($j = $i*2;$j <= $i*2+1; $j++)
                            {
                                ?>
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product_details.php?id=<?=$computer1[$j]->ID?>"><img src="public/assets/img/product/<?=$computer1[$j]->hinh_san_pham?>" alt=""></a>
                                            <a class="secondary_img" href="product_details.php?id=<?=$computer1[$j]->ID?>"><img src="public/assets/img/product/product6.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="wishlist"><a href="wishlist.html" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                    <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                    <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="product_content_inner">
                                                <h4 class="product_name"><a href="product_details.php?id=<?=$computer1[$j]->ID?>"><?=$computer1[$j]->ten_san_pham?></a></h4>
                                                <div class="price_box">
                                                    <span class="old_price">$80.00</span>
                                                    <span class="current_price"><?= number_format($computer1[$j]->don_gia,"0",",",".")?> VND</span>
                                                </div>
                                            </div>
                                            <div class="add_to_cart">
                                                <a onclick="AddToCart(<?= $computer1[$j]->ID?>)" title="Add to cart">Add to cart</a>
                                            </div>

                                        </div>
                                    </figure>
                                </article>
                                <?php
                            }
                            echo '</div>';
                        }

                        ?>

                    </div>
                </div>
                <div class="tab-pane fade" id="Networking" role="tabpanel">
                    <div class="product_carousel product_style product_column5 owl-carousel">
                        <?php
                        for($i=0;$i<count($phone1)/2;$i++)
                        {
                            echo '<div class="product_items">';
                            for($j = $i*2;$j <= $i*2+1; $j++)
                            {
                                ?>
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product_details.php?id=<?=$phone1[$j]->ID?>"><img src="public/assets/img/product/<?=$phone1[$j]->hinh_san_pham?>" alt=""></a>
                                            <a class="secondary_img" href="product_details.php?id="><img src="public/assets/img/product/product6.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="wishlist"><a href="wishlist.html" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                    <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                    <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="product_content_inner">
                                                <h4 class="product_name"><a href="product_details.php?id=<?=$phone1[$j]->ID?>"><?=$phone1[$j]->ten_san_pham?></a></h4>
                                                <div class="price_box">
                                                    <span class="old_price">$80.00</span>
                                                    <span class="current_price"><?= number_format($phone1[$j]->don_gia,"0",",",".")?> VND</span>
                                                </div>
                                            </div>
                                            <div class="add_to_cart">
                                                <a onclick="AddToCart(<?=$phone1[$j]->ID?>)" title="Add to cart">Add to cart</a>
                                            </div>

                                        </div>
                                    </figure>
                                </article>
                                <?php
                            }
                            echo '</div>';
                        }
                        ?>
                    </div>
                </div>
                <div class="tab-pane fade" id="Computer2" role="tabpanel">
                    <div class="product_carousel product_style product_column5 owl-carousel">

                        <?php
                        for($i=0;$i<count($musix1)/2;$i++)
                        {
                            echo '<div class="product_items">';
                            for($j = $i*2;$j <= $i*2+1; $j++)
                            {
                                ?>
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product_details.php?id=<?=$musix1[$j]->ID?>"><img src="public/assets/img/product/<?=$musix1[$j]->hinh_san_pham?>" alt=""></a>
                                            <a class="secondary_img" href="product_details.php?id=<?=$musix1[$j]->ID?>"><img src="public/assets/img/product/product6.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="wishlist"><a href="wishlist.html" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                    <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                    <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="product_content_inner">
                                                <h4 class="product_name"><a href="product_details.php?id=<?=$musix1[$j]->ID?>"><?=$musix1[$j]->ten_san_pham?></a></h4>
                                                <div class="price_box">
                                                    <span class="old_price">$80.00</span>
                                                    <span class="current_price"><?= number_format($musix1[$j]->don_gia,"0",",",".")?> VND</span>
                                                </div>
                                            </div>
                                            <div class="add_to_cart">
                                                <a onclick="AddToCart(<?=$musix1[$j]->ID?>)" title="Add to cart">Add to cart</a>
                                            </div>

                                        </div>
                                    </figure>
                                </article>
                                <?php
                            }
                            echo '</div>';
                        }
                        ?>

                    </div>
                </div>
                <div class="tab-pane fade" id="Audio" role="tabpanel">
                    <div class="product_carousel product_style product_column5 owl-carousel">
                        <?php
                        for($i=0;$i<count($orther1)/2;$i++)
                        {
                            echo '<div class="product_items">';
                            for($j = $i*2;$j <= $i*2+1; $j++)
                            {
                                ?>
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product_details.php?id=<?=$orther1[$j]->ID?>"><img src="public/assets/img/product/<?=$orther1[$j]->hinh_san_pham?>" alt=""></a>
                                            <a class="secondary_img" href="product_details.php?id="><img src="public/assets/img/product/product6.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="wishlist"><a href="wishlist.html" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                    <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                    <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="product_content_inner">
                                                <h4 class="product_name"><a href="product_details.php?id=<?=$orther1[$j]->ID?>"><?=$orther1[$j]->ten_san_pham?></a></h4>
                                                <div class="price_box">
                                                    <span class="old_price">$80.00</span>
                                                    <span class="current_price"><?= number_format($orther1[$j]->don_gia,"0",",",".")?> VND</span>
                                                </div>
                                            </div>
                                            <div class="add_to_cart">
                                                <a onclick="AddToCart(<?=$orther1[$j]->ID?>)" title="Add to cart">Add to cart</a>
                                            </div>

                                        </div>
                                    </figure>
                                </article>
                                <?php
                            }
                            echo '</div>';
                        }
                        ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--product area end-->

    <!--product area start-->
    <div class="small_product_area mb-55">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product_header">
                        <div class="section_title">
                            <h2>Sản phẩm bán chạy</h2>

                        </div>
                        <div class="product_tab_btn">
                            <ul class="nav" role="tablist" id="nav-tab3">
                                <li>
                                    <a class="active" data-toggle="tab" href="#Fashion2" role="tab" aria-controls="Fashion2" aria-selected="true">
                                       Máy tính
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#Games2" role="tab" aria-controls="Games2" aria-selected="false">
                                        Điện thoại
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#Headphone2" role="tab" aria-controls="Headphone2" aria-selected="false">
                                        Âm thanh
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#Mobile2" role="tab" aria-controls="Mobile2" aria-selected="false">
                                        Các thiết bị khác
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="Fashion2" role="tabpanel">
                    <div class="product_carousel small_p_container  small_product_column3 owl-carousel">
                        <?php
                        for($i=0;$i<count($computer2)/2;$i++)
                        {
                            echo '<div class="product_items">';
                            for($j = $i*2;$j <= $i*2+1; $j++)
                            {
                                ?>
                                <figure class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product_details.php?id=<?=$computer2[$j]->ID?>"><img src="public/assets/img/product/<?=$computer2[$j]->hinh_san_pham?>" alt=""></a>
                                        <a class="secondary_img" href="product_details.php?id="><img src="public/assets/img/product/product2.jpg" alt=""></a>
                                    </div>
                                    <div class="product_content">
                                        <h4 class="product_name"><a href="product_details.php?id=<?=$computer2[$j]->ID?>"><?=$computer2[$j]->ten_san_pham?></a></h4>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price"><?= number_format($computer2[$j]->don_gia,"0",",",".")?> VND</span>
                                        </div>
                                        <div class="product_cart_button">
                                            <a onclick="AddToCart(<?=$computer2[$j]->ID?>)" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                        </div>

                                    </div>
                                </figure>
                                <?php
                            }
                            echo '</div>';
                        }
                        ?>
                    </div>
                </div>
                <div class="tab-pane fade" id="Games2" role="tabpanel">
                    <div class="product_carousel small_p_container  small_product_column3 owl-carousel">
                        <?php
                        for($i=0;$i<count($phone2)/2;$i++)
                        {
                            echo '<div class="product_items">';
                            for($j = $i*2;$j <= $i*2+1; $j++)
                            {
                                ?>
                                <figure class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product_details.php?id=<?=$phone2[$j]->ID?>"><img src="public/assets/img/product/<?=$phone2[$j]->hinh_san_pham?>" alt=""></a>
                                        <a class="secondary_img" href="product_details.php?id=<?=$phone2[$j]->ID?>"><img src="public/assets/img/product/product2.jpg" alt=""></a>
                                    </div>
                                    <div class="product_content">
                                        <h4 class="product_name"><a href="product_details.php?id=<?=$phone2[$j]->ID?>"><?=$phone2[$j]->ten_san_pham?></a></h4>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price"><?= number_format($phone2[$j]->don_gia,"0",",",".")?> VND</span>
                                        </div>
                                        <div class="product_cart_button">
                                            <a onclick="AddToCart(<?=$phone2[$j]->ID?>)" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                        </div>

                                    </div>
                                </figure>
                                <?php
                            }
                            echo '</div>';
                        }
                        ?>
                    </div>
                </div>
                <div class="tab-pane fade" id="Headphone2" role="tabpanel">
                    <div class="product_carousel small_p_container  small_product_column3 owl-carousel">
                        <?php
                        for($i=0;$i<count($musix2)/2;$i++)
                        {
                            echo '<div class="product_items">';
                            for($j = $i*2;$j <= $i*2+1; $j++)
                            {
                                ?>
                                <figure class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product_details.php?id=<?=$musix2[$j]->ID?>"><img src="public/assets/img/product/<?=$musix2[$j]->hinh_san_pham?>" alt=""></a>
                                        <a class="secondary_img" href="product_details.php?id=<?=$musix2[$j]->ID?>"><img src="public/assets/img/product/product2.jpg" alt=""></a>
                                    </div>
                                    <div class="product_content">
                                        <h4 class="product_name"><a href="product_details.php?id=<?=$musix2[$j]->ID?>"><?=$musix2[$j]->ten_san_pham?></a></h4>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price"><?= number_format($musix2[$j]->don_gia,"0",",",".")?> VND</span>
                                        </div>
                                        <div class="product_cart_button">
                                            <a onclick="AddToCart(<?=$musix2[$j]->ID?>)" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                        </div>

                                    </div>
                                </figure>
                                <?php
                            }
                            echo '</div>';
                        }
                        ?>
                    </div>
                </div>
                <div class="tab-pane fade" id="Mobile2" role="tabpanel">
                    <div class="product_carousel small_p_container  small_product_column3 owl-carousel">
                        <?php
                        for($i=0;$i<count($orther)/2;$i++)
                        {
                            echo '<div class="product_items">';
                            for($j = $i*2;$j <= $i*2+1; $j++)
                            {
                                ?>
                                <figure class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product_details.php?id=<?=$orther[$j]->ID?>"><img src="public/assets/img/product/<?=$orther[$j]->hinh_san_pham?>" alt=""></a>
                                        <a class="secondary_img" href="product_details.php?id="><img src="public/assets/img/product/product2.jpg" alt=""></a>
                                    </div>
                                    <div class="product_content">
                                        <h4 class="product_name"><a href="product_details.php?id=<?=$orther[$j]->ID?>"><?=$orther[$j]->ten_san_pham?></a></h4>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price"><?= number_format($orther[$j]->don_gia,"0",",",".")?> VND</span>
                                        </div>
                                        <div class="product_cart_button">
                                            <a onclick="AddToCart(<?=$orther[$j]->ID?>)" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                        </div>

                                    </div>
                                </figure>
                                <?php
                            }
                            echo '</div>';
                        }
                        ?>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--product area end-->

    <!--product area start-->
    <div class="product_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product_header">
                        <div class="section_title">
                            <h2>Hàng mới nhập</h2>

                        </div>
                        <div class="product_tab_btn">
                            <ul class="nav" role="tablist" id="nav-tab4">
                                <li>
                                    <a class="active" data-toggle="tab" href="#Computer3" role="tab" aria-controls="Computer3" aria-selected="true">
                                        Máy tính
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#Networking2" role="tab" aria-controls="Networking2" aria-selected="false">
                                        Điện thoại
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#Networking3" role="tab" aria-controls="Networking3" aria-selected="false">
                                        Ti vi
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#Audio2" role="tab" aria-controls="Audio2" aria-selected="false">
                                       Khác
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="Computer3" role="tabpanel">
                    <div class="product_carousel product_style product_column5 owl-carousel">

                        <?php
                        foreach ($computer3 as $com)
                        {
                            echo '<article class="single_product">
                            <figure>

                                <div class="product_thumb">
                                    <a class="primary_img" href="product_details.php?id='.$com->ID.'"><img src="public/assets/img/product/'.$com->hinh_san_pham.'" alt=""></a>
                                    <a class="secondary_img" href="product_details.php?id='.$com->ID.'"><img src="public/assets/img/product/product6.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">Sale</span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                            <li class="wishlist"><a href="wishlist.html" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                            <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                            <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_content">
                                    <div class="product_content_inner">
                                        <h4 class="product_name"><a href="product_details.php?id='.$com->ID.'">'.$com->ten_san_pham.'</a></h4>
                                        <div class="price_box">
                                            <span class="old_price">$80.00</span>
                                            <span class="current_price">'.number_format($com->don_gia,"0",",",".").' VND </span>
                                        </div>
                                    </div>
                                    <div class="add_to_cart">
                                        <a onclick="AddToCart('.$com->ID.')" title="Add to cart">Add to cart</a>
                                    </div>

                                </div>
                            </figure>
                        </article>';
                        }
                        ?>

                    </div>
                </div>
                <div class="tab-pane fade" id="Networking2" role="tabpanel">
                    <div class="product_carousel product_style product_column5 owl-carousel">
                        <?php
                        foreach ($phone3 as $com)
                        {
                            echo '<article class="single_product">
                            <figure>

                                <div class="product_thumb">
                                    <a class="primary_img" href="product_details.php?id='.$com->ID.'"><img src="public/assets/img/product/'.$com->hinh_san_pham.'" alt=""></a>
                                    <a class="secondary_img" href="product_details.php?id='.$com->ID.'"><img src="public/assets/img/product/product6.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">Sale</span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                            <li class="wishlist"><a href="wishlist.html" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                            <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                            <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_content">
                                    <div class="product_content_inner">
                                        <h4 class="product_name"><a href="product_details.php?id='.$com->ID.'">'.$com->ten_san_pham.'</a></h4>
                                        <div class="price_box">
                                            <span class="old_price">$80.00</span>
                                            <span class="current_price">'.number_format($com->don_gia,"0",",",".").' VND </span>
                                        </div>
                                    </div>
                                    <div class="add_to_cart">
                                        <a onclick="AddToCart('.$com->ID.')" title="Add to cart">Add to cart</a>
                                    </div>

                                </div>
                            </figure>
                        </article>';
                        }
                        ?>
                    </div>
                </div>
                <div class="tab-pane fade" id="Networking3" role="tabpanel">
                    <div class="product_carousel product_style product_column5 owl-carousel">
                        <?php
                        foreach ($musix3 as $com)
                        {
                            echo '<article class="single_product">
                            <figure>

                                <div class="product_thumb">
                                    <a class="primary_img" href="product_details.php?id='.$com->ID.'"><img src="public/assets/img/product/'.$com->hinh_san_pham.'" alt=""></a>
                                    <a class="secondary_img" href="product_details.php?id='.$com->ID.'"><img src="public/assets/img/product/product6.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">Sale</span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                            <li class="wishlist"><a href="wishlist.html" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                            <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                            <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_content">
                                    <div class="product_content_inner">
                                        <h4 class="product_name"><a href="product_details.php?id='.$com->ID.'">'.$com->ten_san_pham.'</a></h4>
                                        <div class="price_box">
                                            <span class="old_price">$80.00</span>
                                            <span class="current_price">'.number_format($com->don_gia,"0",",",".").' VND </span>
                                        </div>
                                    </div>
                                    <div class="add_to_cart">
                                        <a onclick="AddToCart('.$com->ID.')" title="Add to cart">Add to cart</a>
                                    </div>

                                </div>
                            </figure>
                        </article>';
                        }
                        ?>
                    </div>
                </div>
                <div class="tab-pane fade" id="Audio2" role="tabpanel">
                    <div class="product_carousel product_style product_column5 owl-carousel">
                        <?php
                        foreach ($orther3 as $com)
                        {
                            echo '<article class="single_product">
                            <figure>

                                <div class="product_thumb">
                                    <a class="primary_img" href="product_details.php?id='.$com->ID.'"><img src="public/assets/img/product/'.$com->hinh_san_pham.'" alt=""></a>
                                    <a class="secondary_img" href="product_details.php?id='.$com->ID.'"><img src="public/assets/img/product/product6.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">Sale</span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                            <li class="wishlist"><a href="wishlist.html" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                            <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                            <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_content">
                                    <div class="product_content_inner">
                                        <h4 class="product_name"><a href="product_details.php?id='.$com->ID.'">'.$com->ten_san_pham.'</a></h4>
                                        <div class="price_box">
                                            <span class="old_price">$80.00</span>
                                            <span class="current_price">'.number_format($com->don_gia,"0",",",".").' VND </span>
                                        </div>
                                    </div>
                                    <div class="add_to_cart">
                                        <a onclick="AddToCart('.$com->ID.')" title="Add to cart">Add to cart</a>
                                    </div>

                                </div>
                            </figure>
                        </article>';
                        }
                        ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--product area end-->

    <!--banner area start-->
    <div class="banner_area banner_style2 mb-55">
        <div class="container">
            <div class="row">
                    <?php
                    $arr = [];

                    foreach ($banner_thumb1 as $item) {
                      $arr[] = $item->hinh;
                    }
                    ?>

                <div class="col-lg-3 col-md-3">
                    <figure class="single_banner">
                        <div class="banner_thumb">
                            <a href="shop.html"><img height="152px" src="public/image/banner/<?= $arr[0]  ?>" alt=""></a>
                        </div>
                    </figure>
                </div>
                <div class="col-lg-6 col-md-6">
                    <figure class="single_banner">
                        <div class="banner_thumb">
                            <a href="shop.html"><img height="152px" src="public/image/banner/<?= $arr[1]  ?>" alt=""></a>
                        </div>
                    </figure>
                </div>
                <div class="col-lg-3 col-md-3">
                    <figure class="single_banner">
                        <div class="banner_thumb">
                            <a href="shop.html"><img height="152px" src="public/image/banner/<?= $arr[2] ?>" alt=""></a>
                        </div>
                    </figure>
                </div>
                    <?php
                    ?>

            </div>
        </div>
    </div>
    <!--banner area end-->

<!--    //product area start-->
    <div class="small_product_area small_product_style2">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="small_product_list">
                        <div class="section_title">
                            <h2>Computer & Networking</h2>
                        </div>
                        <div class="product_carousel small_p_container  product_column1 owl-carousel">
                            <div class="product_items">
                                <figure class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product_details.php?id=0"><img src="public/assets/img/product/product1.jpg" alt=""></a>
                                        <a class="secondary_img" href="product_details.php?id="><img src="public/assets/img/product/product2.jpg" alt=""></a>
                                    </div>
                                    <div class="product_content">
                                        <h4 class="product_name"><a href="product_details.php?id=">Porro quisquam eget feugiat pretium posuere maximus</a></h4>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="old_price">$82.00</span>
                                            <span class="current_price">$78.00</span>
                                        </div>
                                        <div class="product_cart_button">
                                            <a onclick="AddToCart()" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                        </div>

                                    </div>
                                </figure>
                                <figure class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product_details.php?id="><img src="public/assets/img/product/product3.jpg" alt=""></a>
                                        <a class="secondary_img" href="product_details.php?id="><img src="public/assets/img/product/product4.jpg" alt=""></a>
                                    </div>
                                    <div class="product_content">
                                        <h4 class="product_name"><a href="product_details.php?id=">Aliquam lobortis pellentesque eugiat pretium nisi lectus</a></h4>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="old_price">$72.00</span>
                                            <span class="current_price">$68.00</span>
                                        </div>
                                        <div class="product_cart_button">
                                            <a onclick="AddToCart()" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                        </div>

                                    </div>
                                </figure>
                                <figure class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product_details.php?id="><img src="public/assets/img/product/product5.jpg" alt=""></a>
                                        <a class="secondary_img" href="product_details.php?id="><img src="public/assets/img/product/product6.jpg" alt=""></a>
                                    </div>
                                    <div class="product_content">
                                        <h4 class="product_name"><a href="product_details.php?id=">Officiis debitis varius risus dignissim massa quis</a></h4>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$79.00</span>
                                        </div>
                                        <div class="product_cart_button">
                                            <a onclick="AddToCart()" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                        </div>

                                    </div>
                                </figure>
                            </div>
                            <div class="product_items">
                                <figure class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product_details.php?id="><img src="public/assets/img/product/product9.jpg" alt=""></a>
                                        <a class="secondary_img" href="product_details.php?id="><img src="public/assets/img/product/product10.jpg" alt=""></a>
                                    </div>
                                    <div class="product_content">
                                        <h4 class="product_name"><a href="product_details.php?id=">Porro quisquam eget feugiat pretium posuere maximus</a></h4>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="old_price">$82.00</span>
                                            <span class="current_price">$78.00</span>
                                        </div>
                                        <div class="product_cart_button">
                                            <a onclick="AddToCart()" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                        </div>

                                    </div>
                                </figure>
                                <figure class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product_details.php?id="><img src="public/assets/img/product/product11.jpg" alt=""></a>
                                        <a class="secondary_img" href="product_details.php?id="><img src="public/assets/img/product/product12.jpg" alt=""></a>
                                    </div>
                                    <div class="product_content">
                                        <h4 class="product_name"><a href="product_details.php?id=">Aliquam lobortis pellentesque eugiat pretium nisi lectus</a></h4>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="old_price">$72.00</span>
                                            <span class="current_price">$68.00</span>
                                        </div>
                                        <div class="product_cart_button">
                                            <a onclick="AddToCart()" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                        </div>

                                    </div>
                                </figure>
                                <figure class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product_details.php?id="><img src="public/assets/img/product/product13.jpg" alt=""></a>
                                        <a class="secondary_img" href="product_details.php?id="><img src="public/assets/img/product/product14.jpg" alt=""></a>
                                    </div>
                                    <div class="product_content">
                                        <h4 class="product_name"><a href="product_details.php?id=">Officiis debitis varius risus dignissim massa quis</a></h4>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$79.00</span>
                                        </div>
                                        <div class="product_cart_button">
                                            <a onclick="AddToCart()" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                        </div>

                                    </div>
                                </figure>
                            </div>
                            <div class="product_items">
                                <figure class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product_details.php?id="><img src="public/assets/img/product/product1.jpg" alt=""></a>
                                        <a class="secondary_img" href="product_details.php?id="><img src="public/assets/img/product/product2.jpg" alt=""></a>
                                    </div>
                                    <div class="product_content">
                                        <h4 class="product_name"><a href="product_details.php?id=">Porro quisquam eget feugiat pretium posuere maximus</a></h4>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="old_price">$82.00</span>
                                            <span class="current_price">$78.00</span>
                                        </div>
                                        <div class="product_cart_button">
                                            <a onclick="AddToCart()" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                        </div>

                                    </div>
                                </figure>
                                <figure class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product_details.php?id="><img src="public/assets/img/product/product3.jpg" alt=""></a>
                                        <a class="secondary_img" href="product_details.php?id="><img src="public/assets/img/product/product4.jpg" alt=""></a>
                                    </div>
                                    <div class="product_content">
                                        <h4 class="product_name"><a href="product_details.php?id=">Aliquam lobortis pellentesque eugiat pretium nisi lectus</a></h4>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="old_price">$72.00</span>
                                            <span class="current_price">$68.00</span>
                                        </div>
                                        <div class="product_cart_button">
                                            <a onclick="AddToCart()" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                        </div>

                                    </div>
                                </figure>
                                <figure class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product_details.php?id="><img src="public/assets/img/product/product5.jpg" alt=""></a>
                                        <a class="secondary_img" href="product_details.php?id="><img src="public/assets/img/product/product6.jpg" alt=""></a>
                                    </div>
                                    <div class="product_content">
                                        <h4 class="product_name"><a href="product_details.php?id=">Officiis debitis varius risus dignissim massa quis</a></h4>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$79.00</span>
                                        </div>
                                        <div class="product_cart_button">
                                            <a onclick="AddToCart()" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                        </div>

                                    </div>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="small_product_list">
                        <div class="section_title">
                            <h2>Điện thoại</h2>
                        </div>
                        <div class="product_carousel small_p_container  product_column1 owl-carousel">
                            <div class="product_items">
                                <figure class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product_details.php?id="><img src="public/assets/img/product/product7.jpg" alt=""></a>
                                        <a class="secondary_img" href="product_details.php?id="><img src="public/assets/img/product/product8.jpg" alt=""></a>
                                    </div>
                                    <div class="product_content">
                                        <h4 class="product_name"><a href="product_details.php?id=">Eodem modo vel mattis ante facilisis nec porttitor efficitur</a></h4>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="old_price">$82.00</span>
                                            <span class="current_price">$78.00</span>
                                        </div>
                                        <div class="product_cart_button">
                                            <a onclick="AddToCart()" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                        </div>

                                    </div>
                                </figure>
                                <figure class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product_details.php?id="><img src="public/assets/img/product/product9.jpg" alt=""></a>
                                        <a class="secondary_img" href="product_details.php?id="><img src="public/assets/img/product/product10.jpg" alt=""></a>
                                    </div>
                                    <div class="product_content">
                                        <h4 class="product_name"><a href="product_details.php?id=">Nostrum exercitationem itae neque nulla nec posuere sem</a></h4>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="old_price">$72.00</span>
                                            <span class="current_price">$68.00</span>
                                        </div>
                                        <div class="product_cart_button">
                                            <a onclick="AddToCart()" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                        </div>
                                    </div>
                                </figure>
                                <figure class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product_details.php?id="><img src="public/assets/img/product/product11.jpg" alt=""></a>
                                        <a class="secondary_img" href="product_details.php?id="><img src="public/assets/img/product/product12.jpg" alt=""></a>
                                    </div>
                                    <div class="product_content">
                                        <h4 class="product_name"><a href="product_details.php?id=">Officiis debitis varius risus dignissim massa quis</a></h4>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$79.00</span>
                                        </div>
                                        <div class="product_cart_button">
                                            <a onclick="AddToCart()" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                        </div>

                                    </div>
                                </figure>
                            </div>
                            <div class="product_items">
                                <figure class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product_details.php?id="><img src="public/assets/img/product/product9.jpg" alt=""></a>
                                        <a class="secondary_img" href="product_details.php?id="><img src="public/assets/img/product/product10.jpg" alt=""></a>
                                    </div>
                                    <div class="product_content">
                                        <h4 class="product_name"><a href="product_details.php?id=">Porro quisquam eget feugiat pretium posuere maximus</a></h4>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="old_price">$82.00</span>
                                            <span class="current_price">$78.00</span>
                                        </div>
                                        <div class="product_cart_button">
                                            <a onclick="AddToCart()" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                        </div>

                                    </div>
                                </figure>
                                <figure class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product_details.php?id="><img src="public/assets/img/product/product11.jpg" alt=""></a>
                                        <a class="secondary_img" href="product_details.php?id="><img src="public/assets/img/product/product12.jpg" alt=""></a>
                                    </div>
                                    <div class="product_content">
                                        <h4 class="product_name"><a href="product_details.php?id=">Aliquam lobortis pellentesque eugiat pretium nisi lectus</a></h4>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="old_price">$72.00</span>
                                            <span class="current_price">$68.00</span>
                                        </div>
                                        <div class="product_cart_button">
                                            <a onclick="AddToCart()" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                        </div>

                                    </div>
                                </figure>
                                <figure class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product_details.php?id="><img src="public/assets/img/product/product13.jpg" alt=""></a>
                                        <a class="secondary_img" href="product_details.php?id="><img src="public/assets/img/product/product14.jpg" alt=""></a>
                                    </div>
                                    <div class="product_content">
                                        <h4 class="product_name"><a href="product_details.php?id=">Officiis debitis varius risus dignissim massa quis</a></h4>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$79.00</span>
                                        </div>
                                        <div class="product_cart_button">
                                            <a onclick="AddToCart()" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                        </div>

                                    </div>
                                </figure>
                            </div>
                            <div class="product_items">
                                <figure class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product_details.php?id="><img src="public/assets/img/product/product7.jpg" alt=""></a>
                                        <a class="secondary_img" href="product_details.php?id="><img src="public/assets/img/product/product8.jpg" alt=""></a>
                                    </div>
                                    <div class="product_content">
                                        <h4 class="product_name"><a href="product_details.php?id=">Eodem modo vel mattis ante facilisis nec porttitor efficitur</a></h4>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="old_price">$82.00</span>
                                            <span class="current_price">$78.00</span>
                                        </div>
                                        <div class="product_cart_button">
                                            <a onclick="AddToCart()" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                        </div>

                                    </div>
                                </figure>
                                <figure class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product_details.php?id="><img src="public/assets/img/product/product9.jpg" alt=""></a>
                                        <a class="secondary_img" href="product_details.php?id="><img src="public/assets/img/product/product10.jpg" alt=""></a>
                                    </div>
                                    <div class="product_content">
                                        <h4 class="product_name"><a href="product_details.php?id=">Nostrum exercitationem itae neque nulla nec posuere sem</a></h4>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="old_price">$72.00</span>
                                            <span class="current_price">$68.00</span>
                                        </div>
                                        <div class="product_cart_button">
                                            <a onclick="AddToCart()" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                        </div>
                                    </div>
                                </figure>
                                <figure class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product_details.php?id="><img src="public/assets/img/product/product11.jpg" alt=""></a>
                                        <a class="secondary_img" href="product_details.php?id="><img src="public/assets/img/product/product12.jpg" alt=""></a>
                                    </div>
                                    <div class="product_content">
                                        <h4 class="product_name"><a href="product_details.php?id=">Officiis debitis varius risus dignissim massa quis</a></h4>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$79.00</span>
                                        </div>
                                        <div class="product_cart_button">
                                            <a onclick="AddToCart()" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                        </div>

                                    </div>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="small_product_list">
                        <div class="section_title">
                            <h2>Các thiết bị khác</h2>
                        </div>
                        <div class="product_carousel small_p_container  product_column1 owl-carousel">
                            <div class="product_items">
                                <figure class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product_details.php?id="><img src="public/assets/img/product/product13.jpg" alt=""></a>
                                        <a class="secondary_img" href="product_details.php?id="><img src="public/assets/img/product/product14.jpg" alt=""></a>
                                    </div>
                                    <div class="product_content">
                                        <h4 class="product_name"><a href="product_details.php?id=">Porro quisquam eget feugiat pretium posuere maximus</a></h4>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="old_price">$82.00</span>
                                            <span class="current_price">$78.00</span>
                                        </div>
                                        <div class="product_cart_button">
                                            <a onclick="AddToCart()" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                        </div>

                                    </div>
                                </figure>
                                <figure class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product_details.php?id="><img src="public/assets/img/product/product15.jpg" alt=""></a>
                                        <a class="secondary_img" href="product_details.php?id="><img src="public/assets/img/product/product16.jpg" alt=""></a>
                                    </div>
                                    <div class="product_content">
                                        <h4 class="product_name"><a href="product_details.php?id=">Aliquam lobortis pellentesque eugiat pretium nisi lectus</a></h4>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="old_price">$72.00</span>
                                            <span class="current_price">$68.00</span>
                                        </div>
                                        <div class="product_cart_button">
                                            <a onclick="AddToCart()" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                        </div>

                                    </div>
                                </figure>
                                <figure class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product_details.php?id="><img src="public/assets/img/product/product17.jpg" alt=""></a>
                                        <a class="secondary_img" href="product_details.php?id="><img src="public/assets/img/product/product18.jpg" alt=""></a>
                                    </div>
                                    <div class="product_content">
                                        <h4 class="product_name"><a href="product_details.php?id=">Officiis debitis varius risus dignissim massa quis</a></h4>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$79.00</span>
                                        </div>
                                        <div class="product_cart_button">
                                            <a onclick="AddToCart()" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                        </div>

                                    </div>
                                </figure>
                            </div>
                            <div class="product_items">
                                <figure class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product_details.php?id="><img src="public/assets/img/product/product19.jpg" alt=""></a>
                                        <a class="secondary_img" href="product_details.php?id="><img src="public/assets/img/product/product20.jpg" alt=""></a>
                                    </div>
                                    <div class="product_content">
                                        <h4 class="product_name"><a href="product_details.php?id=">Porro quisquam eget feugiat pretium posuere maximus</a></h4>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="old_price">$82.00</span>
                                            <span class="current_price">$78.00</span>
                                        </div>
                                        <div class="product_cart_button">
                                            <a onclick="AddToCart()" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                        </div>

                                    </div>
                                </figure>
                                <figure class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product_details.php?id="><img src="public/assets/img/product/product1.jpg" alt=""></a>
                                        <a class="secondary_img" href="product_details.php?id="><img src="public/assets/img/product/product2.jpg" alt=""></a>
                                    </div>
                                    <div class="product_content">
                                        <h4 class="product_name"><a href="product_details.php?id=">Aliquam lobortis pellentesque eugiat pretium nisi lectus</a></h4>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="old_price">$72.00</span>
                                            <span class="current_price">$68.00</span>
                                        </div>
                                        <div class="product_cart_button">
                                            <a onclick="AddToCart()" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                        </div>

                                    </div>
                                </figure>
                                <figure class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product_details.php?id="><img src="public/assets/img/product/product3.jpg" alt=""></a>
                                        <a class="secondary_img" href="product_details.php?id="><img src="public/assets/img/product/product4.jpg" alt=""></a>
                                    </div>
                                    <div class="product_content">
                                        <h4 class="product_name"><a href="product_details.php?id=">Officiis debitis varius risus dignissim massa quis</a></h4>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$79.00</span>
                                        </div>
                                        <div class="product_cart_button">
                                            <a onclick="AddToCart()" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                        </div>

                                    </div>
                                </figure>
                            </div>
                            <div class="product_items">
                                <figure class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product_details.php?id="><img src="public/assets/img/product/product13.jpg" alt=""></a>
                                        <a class="secondary_img" href="product_details.php?id="><img src="public/assets/img/product/product14.jpg" alt=""></a>
                                    </div>
                                    <div class="product_content">
                                        <h4 class="product_name"><a href="product_details.php?id=">Porro quisquam eget feugiat pretium posuere maximus</a></h4>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="old_price">$82.00</span>
                                            <span class="current_price">$78.00</span>
                                        </div>
                                        <div class="product_cart_button">
                                            <a onclick="AddToCart()" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                        </div>

                                    </div>
                                </figure>
                                <figure class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product_details.php?id="><img src="public/assets/img/product/product15.jpg" alt=""></a>
                                        <a class="secondary_img" href="product_details.php?id="><img src="public/assets/img/product/product16.jpg" alt=""></a>
                                    </div>
                                    <div class="product_content">
                                        <h4 class="product_name"><a href="product_details.php?id=">Aliquam lobortis pellentesque eugiat pretium nisi lectus</a></h4>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="old_price">$72.00</span>
                                            <span class="current_price">$68.00</span>
                                        </div>
                                        <div class="product_cart_button">
                                            <a onclick="AddToCart()" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                        </div>

                                    </div>
                                </figure>
                                <figure class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product_details.php?id="><img src="public/assets/img/product/product17.jpg" alt=""></a>
                                        <a class="secondary_img" href="product_details.php?id="><img src="public/assets/img/product/product18.jpg" alt=""></a>
                                    </div>
                                    <div class="product_content">
                                        <h4 class="product_name"><a href="product_details.php?id=">Officiis debitis varius risus dignissim massa quis</a></h4>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$79.00</span>
                                        </div>
                                        <div class="product_cart_button">
                                            <a onclick="AddToCart()" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                        </div>

                                    </div>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--    //product area end-->

</div>