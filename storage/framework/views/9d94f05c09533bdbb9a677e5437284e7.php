<div class="category-slider owl-carousel">
    <?php if(isset($result )): ?>
        <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e(route('courses')); ?>?category_id[]=<?php echo e($category->id); ?>"

     class="category-slider-item">
                <div class="category-slider-item-inner">
                    <div class="category-slider-item-icon">
                        <img src="<?php echo e(asset($category->image)); ?>" alt="">
                    </div>
                    <div class="category-slider-item-title">
                        <?php echo e($category->name); ?>

                    </div>
                </div>
            </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
</div>

<script>
    (function () {
        'use strict'
        jQuery(document).ready(function () {


            let isRtl;
            if ($('html').attr('dir') === "rtl") {
                isRtl = true;
            } else {
                isRtl = false;
            }

            $('.category-slider').owlCarousel({
                loop: true,
                margin: 0,
                responsiveClass: true,
                nav: false,
                dots: false,
                // center: true,
                // autoplay: true,
                autoplayTimeout: 1000,
                autoplayHoverPause: true,
                rtl: isRtl,
                responsive: {
                    300:{
                        items: 2,
                    },
                    400: {
                        items: 3,
                    },
                    500: {
                        items: 4,
                    },
                    1000: {
                        items: 5,
                    },
                    1400: {
                        items: 8,
                    }
                }

            });

        })
    })();
</script>
<?php /**PATH /home/u709483251/domains/infixedulms.madhutechnoworld.in/public_html/resources/views/frontend/infixlmstheme/snippets/components/_single_category_v7.blade.php ENDPATH**/ ?>