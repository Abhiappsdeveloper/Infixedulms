<div class="banner-slider owl-carousel">
    <?php if(isset($result)): ?>
        <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="banner-area">
                <div class="banner-img">
                    <img src="<?php echo e(asset(@$slider->image)); ?>" alt="">
                </div>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-7 col-lg-8 col-md-9">
                            <div class="banner-text pb-5">
                                <h1 class="text-white"><?php echo e(@$slider->title); ?></h1>
                                <p class="pe-0 pe-xl-5 text-white"><?php echo e(@$slider->sub_title); ?></p>

                                <?php if($slider->btn_type1==1): ?>
                                    <?php if(!empty($slider->btn_title1)): ?>
                                        <div class="single_slider d-inline-block">
                                            <a href="<?php echo e($slider->btn_link1); ?>"
                                               class="theme-btn text-capitalize"><?php echo e($slider->btn_title1); ?></a>
                                        </div>
                                    <?php endif; ?>
                                <?php else: ?>
                                    <div class="single_slider d-inline-block">
                                        <a href="<?php echo e($slider->btn_link1); ?>">
                                            <img
                                                src="<?php echo e(asset($slider->btn_image1)); ?>"
                                                alt="">

                                        </a>
                                    </div>
                                <?php endif; ?>
                                <?php if($slider->btn_type2==1): ?>
                                    <?php if(!empty($slider->btn_title2)): ?>
                                        <div class="single_slider d-inline-block">
                                            <a href="<?php echo e($slider->btn_link2); ?>"
                                               class="theme-btn text-capitalize bg-transparent"><?php echo e($slider->btn_title2); ?></a>
                                        </div>
                                    <?php endif; ?>
                                <?php else: ?>
                                    <div class="single_slider d-inline-block">
                                        <a href="<?php echo e($slider->btn_link2); ?>">
                                            <img
                                                src="<?php echo e(asset($slider->btn_image2)); ?>"
                                                alt="">

                                        </a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
</div>

<script>
    (function () {
        $(document).ready(function () {
            const rtl = $('html').attr('dir');
            $('.banner-slider').owlCarousel({
                nav: true,
                rtl: rtl === 'rtl',
                navText: ['<i class="ti-angle-left"></i>', '<i class="ti-angle-right"></i>'],
                dots: true,
                items: 1,
                lazyLoad: true,
                autoplay: false,
                autoplayHoverPause: true,
                loop: true,
                margin: 0,
            });
        })
    })();
</script>
<?php /**PATH /home/u709483251/domains/infixedulms.madhutechnoworld.in/public_html/resources/views/frontend/infixlmstheme/snippets/components/_single_banner_slider.blade.php ENDPATH**/ ?>