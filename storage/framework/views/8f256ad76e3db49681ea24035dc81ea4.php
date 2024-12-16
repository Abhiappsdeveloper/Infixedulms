<div class="row">
    <div class="col-12">
        <div class="quiz-slider owl-carousel">
            <?php if(isset($result)): ?>
                <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $quiz): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="quiz-item mt-0 w-100">
                        <a href="<?php echo e(courseDetailsUrl(@$quiz->id,@$quiz->type,@$quiz->slug)); ?>">
                            <div class="quiz-item-img lazy">
                                <img src="<?php echo e(getCourseImage($quiz->thumbnail)); ?>" alt="<?php echo e($quiz->title); ?>">
                            </div>
                        </a>
                        <div class="quiz-item-content">
                            <div class="meta d-flex align-items-center flex-wrap gap-2">
                            <span
                                class="bg-primary fs-14 lh-1 text-white rounded-2 fw-bold"><?php echo e($quiz->quiz->category->name); ?> </span>
                                <span
                                    class="bg-primary fs-14 lh-1 text-white rounded-2 fw-bold"><?php echo e(__('quiz.Quiz')); ?></span>
                            </div>
                            <a href="#" class="author d-flex flex-wrap">
                                <div class="author-img rounded-circle overflow-hidden"><img
                                        src="<?php echo e(getProfileImage($quiz->user->image,$quiz->user->name)); ?>" alt=""></div>
                                <div class="author-content">
                                    <p class="fw-bold fs-14 lh-base text-secondary"><?php echo e($quiz->user->name); ?> <span
                                            class="d-block fw-500 fs-12"><?php echo e($quiz->user->headline); ?></span></p>
                                </div>
                            </a>

                            <a class="quiz-item-title" data-bs-toggle="tooltip" data-bs-placement="bottom"
                               title="<?php echo e($quiz->title); ?>"
                               href="<?php echo e(courseDetailsUrl(@$quiz->id,@$quiz->type,@$quiz->slug)); ?>">
                                <?php echo e($quiz->title); ?>

                            </a>
                            <div class="quiz-item-content-rating d-flex align-items-center justify-content-between">

                                <div>
                                    <?php if(courseSetting()->show_rating==1): ?>
                                        <i class="fa fa-star text-orange"></i>
                                        <span
                                            class="fw-bold"><?php echo e(translatedNumber($quiz->total_rating)); ?> (<?php echo e(translatedNumber(count($quiz->reviews))); ?> <?php echo e(__('quiz.Rating')); ?>)</span>
                                    <?php endif; ?>
                                </div>
                                <?php if(!Settings('hide_total_enrollment_count') == 1): ?>
                                    <div>
                                        <i class="fa fa-user"></i>
                                        <span
                                            class="fw-bold"><?php echo e(translatedNumber($quiz->total_enrolled)); ?> <?php echo e(__('frontend.Students')); ?></span>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div
                            class="quiz-item-footer bg-primary d-flex align-items-center justify-content-between flex-wrap">
                            <div class="d-flex align-items-center">
                                <strong>
                                    <?php if(@$quiz->discount_price!=null): ?>
                                        <?php echo e(getPriceFormat($quiz->discount_price)); ?>

                                    <?php else: ?>
                                        <?php echo e(getPriceFormat($quiz->price)); ?>

                                    <?php endif; ?>
                                </strong>
                                <?php if(@$quiz->discount_price!=null): ?>
                                    <del class="ms-2 fw-normal"><?php echo e(getPriceFormat($quiz->price)); ?></del>
                                <?php endif; ?>
                            </div>
                            <div>
                                <?php if(auth()->guard()->check()): ?>
                                    <?php if(!$quiz->isLoginUserEnrolled && !$quiz->isLoginUserCart): ?>
                                        <button data-id="<?php echo e($quiz->id); ?>"
                                                class="cart_store bg-transparent border-0 text-white"><i
                                                class="fa fa-shopping-cart"></i></button>
                                    <?php endif; ?>
                                <?php endif; ?>
                                <?php if(auth()->guard()->guest()): ?>
                                    <?php if(!$quiz->isGuestUserCart): ?>
                                        <button data-id="<?php echo e($quiz->id); ?>"
                                                class="cart_store bg-transparent border-0 text-white"><i
                                                class="fa fa-shopping-cart"></i></button>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>
    </div>

    <script>
        if ($.isFunction($.fn.lazy)) {
            $('.lazy').lazy();
        }

        (function () {
            'use strict'
            jQuery(document).ready(function () {
                const navLeft =
                    '<svg width="23" height="19" viewBox="0 0 23 19" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M8.3125 0.625244L0.499998 8.43778V10.6253L8.3125 18.4378L10.5313 16.2503L5.40625 11.094H22.8125V7.96903H5.40625L10.5625 2.81275L8.3125 0.625244Z" fill="currentColor"/></svg>';
                const navRight =
                    '<svg width="23" height="18" viewBox="0 0 23 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15.1875 17.8125L23 9.99996V7.81245L15.1875 -8.7738e-05L12.9687 2.18742L18.0937 7.3437H0.6875L0.6875 10.4687H18.0937L12.9375 15.625L15.1875 17.8125Z" fill="currentColor"/></svg>'
                const rtl = $('html').attr('dir');
                $('.quiz-slider').owlCarousel({
                    nav: true,
                    rtl: rtl === 'rtl',
                    navText: [navLeft, navRight],
                    dots: false,
                    lazyLoad: true,
                    autoplay: true,
                    autoplayHoverPause: true,
                    loop: true,
                    margin: 24,
                    responsive: {
                        0: {
                            items: 1
                        },
                        480: {
                            items: 1
                        },
                        768: {
                            items: 2
                        },
                        922: {
                            items: 3
                        },
                        1200: {
                            items: 3
                        }
                    }
                });
            });
        })();
    </script>
</div>
<?php /**PATH /home/u709483251/domains/infixedulms.madhutechnoworld.in/public_html/resources/views/frontend/infixlmstheme/snippets/components/_single_quiz_v3.blade.php ENDPATH**/ ?>