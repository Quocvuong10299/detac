<?php
    $bannerSlide = [
        [
            'title' => 'giảm giá',
            'sub-title' => '20% cho rau củ',
            'content' => 'Chương trình giảm giá kéo dài từ <b>13/4 đến 30/5</b>. Quí khách hàng sẽ có cơ hội mua rau củ tươi ngon với giá ưu đãi, giảm <b>20%</b>.Chương trình có thể kết thúc sớm hơn dự kiến.',
            'button_title' => 'mua hàng',
            'button_link' => '#',
            'image' => READYFOOD_ROOT_URL.'/images/banner_1.jpg',
        ],
        [
            'title' => 'giảm giá',
            'sub-title' => '20% cho rau củ',
            'content' => 'Chương trình giảm giá kéo dài từ <b>13/4 đến 30/5</b>. Quí khách hàng sẽ có cơ hội mua rau củ tươi ngon với giá ưu đãi, giảm <b>20%</b>.Chương trình có thể kết thúc sớm hơn dự kiến.',
            'button_title' => 'mua hàng',
            'button_link' => '#',
            'image' => READYFOOD_ROOT_URL.'/images/banner_1.jpg',
        ],
        [
            'title' => 'giảm giá',
            'sub-title' => '20% cho rau củ',
            'content' => 'Chương trình giảm giá kéo dài từ <b>13/4 đến 30/5</b>. Quí khách hàng sẽ có cơ hội mua rau củ tươi ngon với giá ưu đãi, giảm <b>20%</b>.Chương trình có thể kết thúc sớm hơn dự kiến.',
            'button_title' => 'mua hàng',
            'button_link' => '#',
            'image' => READYFOOD_ROOT_URL.'/images/banner_1.jpg',
        ],
        [
            'title' => 'giảm giá',
            'sub-title' => '20% cho rau củ',
            'content' => 'Chương trình giảm giá kéo dài từ <b>13/4 đến 30/5</b>. Quí khách hàng sẽ có cơ hội mua rau củ tươi ngon với giá ưu đãi, giảm <b>20%</b>.Chương trình có thể kết thúc sớm hơn dự kiến.',
            'button_title' => 'mua hàng',
            'button_link' => '#',
            'image' => READYFOOD_ROOT_URL.'/images/banner_1.jpg',
        ],
    ]
?>
<div class="banner mb80">
    <div class="banner-content">
        <?php foreach ($bannerSlide as $banner) {?>
            <div class="banner-item">
                <div class="text-center image image-cover image-banner d-flex justify-content-center align-items-center flex-column" style="background-image: url(<?php echo $banner['image'] ?>)">
                    <h1 class="banner-title">
                        <span><?php echo $banner['title']; ?></span>
                        <?php echo $banner['sub-title']; ?>
                    </h1>
                    <p class="tf-normal text-white t-priceCard">
                        <?php echo $banner['content']; ?>
                    </p>
                    <a href="<?php echo $banner['button_link'] ?>" class="btn btn-secondary">
                        <?php echo $banner['button_title'] ?>
                    </a>
                </div>
            </div>
        <?php }?>
    </div>
</div>
