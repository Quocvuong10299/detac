<?php
    $banner_2 = [
        [
            'image' => READYFOOD_ROOT_URL.'/images/banner_2.jpg',
            'link' => '#'
        ],
        [
            'image' => READYFOOD_ROOT_URL.'/images/banner_3.jpg',
            'link' => '#'
        ],
    ]
?>
<div class="banner mb50">
    <div class="container">
        <div class="row">
            <?php foreach ($banner_2 as $item) { ?>
                <div class="col-md-6 mb30px">
                    <a href="<?=$item['link'] ?>">
                        <div class="image-cover pt60percent" style="background-image: url(<?= $item['image']?>)"></div>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
</div>