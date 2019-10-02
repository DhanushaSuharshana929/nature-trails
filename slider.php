
<div id="rev_slider_2_1_wrapper"   class="rev_slider_wrapper    fullscreen-container no-mask-bg" data-alias="home-3"
     data-source="gallery"
     style="padding:0px;background-image:url('upload/slider/-40471311_191162669595_1568712463_n.jpg');background-repeat:no-repeat;background-size:cover;background-position:center center;">
    <!-- START REVOLUTION SLIDER 5.4.7.4 fullscreen mode -->
    <div id="rev_slider_2_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.7.4">
        <ul>
            <?php
            $SLIDER = new Slider(NULL);
            foreach ($SLIDER->all() as $key => $slider) {
                ?>
                <li data-index="rs-<?php echo $key ?>" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                    data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300"
                    data-thumb="upload/slider/<?php echo $slider['image_name'] ?>" data-rotate="0" data-saveperformance="off"
                    data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5=""
                    data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="upload/slider/<?php echo $slider['image_name'] ?>" alt="" data-bgposition="center center" data-bgfit="cover"
                         data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <h1 class="  tp-caption  tp-resizeme"
                        id="slide-4-layer-<?php echo $key ?>"
                        data-x="['right','right','right','right']" data-hoffset="['0','0','0','0']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['-60','-60','-60','-60']"
                        data-fontsize="['40','40','24','24']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"

                        data-type="text"
                        data-responsive_offset="on"

                        data-frames='[{"from":"y:50px;opacity:0;","speed":1500,"to":"o:1;","delay":900,"ease":"Power3.easeInOut"},{"delay":"wait","speed":100,"to":"y:-50px;opacity:0;","ease":"nothing"}]'
                        data-textAlign="['left','left','center','center']"
                        data-paddingtop="[20,0,0,0]"
                        data-paddingright="[80,0,0,0]"
                        data-paddingbottom="[5,0,0,0]"
                        data-paddingleft="[0,0,0,0]"  

                        style="z-index: 5; white-space: nowrap; font-size: 64px; font-weight: 700; color: rgba(255,255,255,1);text-shadow: 0 2px 5px rgba(0, 0, 0, .5);">
                            <?php echo $slider['title'] ?>
                    </h1>

                    <!-- LAYER NR. 2 -->
                    <p class="tp-caption    tp-resizeme lightgrey_divider skewfromrightshort fadeout"
                       id="slide-4-layer-2-<?php echo $key ?>"
                       data-x="['right','right','right','right']" data-hoffset="['0','0','0','0']"
                       data-y="['middle','middle','middle','middle']" data-voffset="['5','5','5','5']"
                       data-fontsize="['16','16','13','12']"
                       data-width="['auto']"
                       data-height="['auto']"
                       data-whitespace="nowrap"
                       data-type="text"
                       data-responsive_offset="on"

                       data-frames='[{"from":"y:bottom;rX:-20deg;rY:-20deg;rZ:0deg;","speed":1500,"to":"o:1;","delay":900,"ease":"Power3.easeOut"},{"delay":"wait","speed":300,"to":"y:[-100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"nothing"}]'
                       data-textAlign="['justify','justify','right','right']"
                       data-paddingtop="[60,0,0,0]"
                       data-paddingright="[12,0,0,0]"
                       data-paddingbottom="[8,0,0,0]"
                       data-paddingleft="[12,0,0,0]"

                       style=" white-space: nowrap; 
                       background-color: rgba(0, 0, 0, 0.36);
                       padding: 71px 14px 9px 11px;
                       font-size: 20px; 
                       font-weight: 400;
                       color: rgba(255,255,255,1);
                       text-shadow: 0 2px 5px rgba(0, 0, 0, .5); 
                       word-break: break-all;
                       ">
                           <?php echo substr(substr($slider['description'], 3), 0, -4) ?>


                </li>
                <!-- SLIDE  -->
            <?php } ?>

        </ul>
        <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
    </div>
</div>

