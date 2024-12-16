<?php if(isset($result)): ?>
    <div class="classes-slider owl-carousel">
        <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $classes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="classes-item">
                <a href="<?php echo e(courseDetailsUrl(@$classes->id,@$classes->type,@$classes->slug)); ?>"
                   class="classes-item-img d-block lazy">
                    <img src="<?php echo e(getCourseImage($classes->thumbnail)); ?>" alt="<?php echo e($classes->title); ?>">
                    <div class="classes-item-info">
                        <ul class="d-flex flex-column align-items-end">
                            <li class="theme-btn bg-red justify-content-center fw-500 text-white mb-2"><?php echo e(__('common.Live')); ?></li>
                            <li class="theme-btn bg-primary justify-content-center fw-500 text-white mb-2"><?php echo e($classes->class->category->name); ?>

                            </li>
                            <li class="theme-btn bg-green justify-content-center fw-500 text-white mb-2 nowrap text-white">
                                <div class="fa fa-history m-0"></div>

                                <?php


                                    $str = ($classes->class->duration?? 0)*$classes->class->total_class;
                                    $duration =preg_replace('/[^0-9]/', '', $str);

                                ?>
                                <?php echo e(!empty(MinuteFormat($duration))?MinuteFormat($duration):0); ?>

                            </li>
                            <?php if(!Settings('hide_total_enrollment_count') == 1): ?>
                            <li class="theme-btn bg-orange justify-content-center fw-500 text-white nowrap text-white">
                                <div
                                    class="fa fa-user-friends m-0"></div>
                                <?php echo e(translatedNumber((string)$classes->total_enrolled!=0?$classes->total_enrolled:0)); ?>

                            </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </a>
                <div class="classes-item-content d-flex flex-wrap align-items-center mx-auto align-items-center">
                    <div class="content">
                        <div class="classes-item-date">
                            <span
                                class=""><?php echo e(showDate($classes->class->start_date)); ?> - <?php echo e(showDate($classes->class->end_date)); ?></span>
                            <span class=""> <?php echo e(date('h:i A', strtotime($classes->class->time))); ?> (<?php echo e(Settings('active_time_zone')); ?>)</span>
                        </div>
                        <h4 class="fw-500">
                            <a href="<?php echo e(courseDetailsUrl(@$classes->id,@$classes->type,@$classes->slug)); ?>"
                               title="<?php echo e($classes->title); ?>" data-bs-toggle="tooltip" data-bs-placement="bottom"
                               class="currentColor">
                                <?php echo e($classes->title); ?>

                            </a>
                        </h4>
                        
                    </div>
                    <div class="price text-center">
                        <?php if(showEcommerce()): ?>
                            <?php if((int)$classes->discount_price!=null): ?>
                                <del class="fw-500 me-1">  <?php echo e(getPriceFormat($classes->price)); ?></del>
                            <?php endif; ?>
                            <strong class="fw-bold text-primary">
                                <?php if((int)$classes->discount_price!=null): ?>
                                    <?php echo e(getPriceFormat($classes->discount_price)); ?>

                                <?php else: ?>
                                    <?php echo e(getPriceFormat($classes->price)); ?>

                                <?php endif; ?>
                            </strong>
                        <?php endif; ?>
                        <br>
                        <?php if(auth()->check() && $classes->isLoginUserEnrolled): ?>
                            <a href="<?php echo e(courseDetailsUrl(@$classes->id,@$classes->type,@$classes->slug)); ?>"
                               class="theme-btn">
                                <?php echo e(__('courses.Get Started')); ?>

                            </a>
                        <?php else: ?>
                            <a href="<?php echo e(route('buyNow',[@$classes->id])); ?>"
                               class="theme-btn">
                                <?php echo e(__('frontend.Book Now')); ?>

                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php endif; ?>

<script>
    (function () {
        'use strict'
        jQuery(document).ready(function () {
            const navLeft = '<svg width="23" height="19" viewBox="0 0 23 19" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M8.3125 0.625244L0.499998 8.43778V10.6253L8.3125 18.4378L10.5313 16.2503L5.40625 11.094H22.8125V7.96903H5.40625L10.5625 2.81275L8.3125 0.625244Z" fill="currentColor"/></svg>';
            const navRight = '<svg width="23" height="18" viewBox="0 0 23 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15.1875 17.8125L23 9.99996V7.81245L15.1875 -8.7738e-05L12.9687 2.18742L18.0937 7.3437H0.6875L0.6875 10.4687H18.0937L12.9375 15.625L15.1875 17.8125Z" fill="currentColor"/></svg>'
            const rtl = $("html").attr("dir");
            // classes slider
            $('.classes-slider').owlCarousel({
                nav: true,
                rtl: rtl === 'rtl',
                navText: [navLeft, navRight],
                dots: false,
                items: 4,
                lazyLoad: true,
                autoplay: true,
                autoplayHoverPause: true,
                loop: true,
                margin: 24,
                responsive: {
                    0: {
                        items: 1
                    },
                    768: {
                        items: 2
                    },
                    992: {
                        items: 2
                    }
                }
            });
        })
    })();
</script>
<?php /**PATH /home/u709483251/domains/infixedulms.madhutechnoworld.in/public_html/resources/views/frontend/infixlmstheme/snippets/components/_single_classes.blade.php ENDPATH**/ ?>