<div id="carousel-banner">
    <?php
    $SLIDER = new Slider(NULL);
    foreach ($SLIDER->all() as $slider) {
        ?>
        <div class="item">
            <div class="text-wrap">
                <div class="text">
                    <div class="middle-text">
                        <h2><?php echo $slider['title'] ?></h2>

                        <div class="sm-border"><span></span></div>

                        <br>
                        <a href="#" class="btn-slider">View Features</a>
                    </div>
                </div>
            </div>
            <img src="upload/slider/<?php echo $slider['image_name'] ?>" alt="<?php echo $slider['title'] ?>">
        </div>
    <?php } ?>

</div>