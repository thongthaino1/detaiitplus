<section class="slider_section slider_s_one mb-60 mt-20">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-12">
                <div class="swiper-container gallery-top">
                    <div class="slider_area swiper-wrapper">
                        <?php
                        foreach ($banners as $banner )
                        {
                            echo ' <div class="single_slider swiper-slide d-flex align-items-center" data-bgimg="public/image/banner/'.$banner->hinh.'">
                            <div class="slider_content">
                                <h3>'.$banner->ten_tieu_de.'</h3>
                                <h1>mùa hè <br> bộ sưu tập 2021</h1>
                                <p>giảm giá <span> -30% </span>trong tuần</p>
                                <a class="button" href="shop.html">KHÁM PHÁ NGAY</a>
                            </div>
                        </div>';
                        }

                        ?>

                         </div>
                    <!-- Add Arrows -->

                    <div class="swiper-pagination"></div>
                </div>
                <div class="swiper-container gallery-thumbs">
                    <div class="swiper-wrapper">
                        <?php
                        foreach ($banners as $banner )
                        {
                            echo '<div class="swiper-slide " style="font-family:">'.$banner->ten_tieu_de.'</div>';


                        }

                        ?>


                    </div>
                </div>

            </div>
            <div class="s_banner col-lg-3 col-md-12">
                <!--banner area start-->
                <div class="sidebar_banner_area">
                    <?php

                    foreach ($banner_side as $banner )
                    {
                        echo ' <figure class="single_banner mb-20">
                        <div class="banner_thumb">
                            <a href="shop.html"><img src="public/image/banner/'.$banner->hinh.'" alt="Ảnh banner"></a>
                        </div>
                    </figure>';
                    }

                    ?>

                </div>
                <!--banner area end-->
            </div>
        </div>
    </div>
</section>