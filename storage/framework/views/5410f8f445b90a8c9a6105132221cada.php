<div class="row -mt-24">
    <div class="col-12">
        <?php if(isset($result)): ?>
            <div class="featured-slider owl-carousel">
                <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="container">
                        <div class="featured-item">
                            <div class="row g-0">
                                <div class="col-md-5">
                                    <div
                                        class="featured-img d-flex align-items-end justify-content-center position-relative"
                                        style="--featured-img: url('<?php echo e(getCourseImage($course->thumbnail)); ?>')">
                                        <a href="<?php echo e(courseDetailsUrl(@$course->id,@$course->type,@$course->slug)); ?>"
                                           class="featured-play">
                                            <span class="fa fa-play"></span>
                                        </a>
                                        <div class="featured-info bg-primary">
                                            <span
                                                class="d-flex align-items-center justify-content-center"><?php echo e(@$course->courseLevel->title); ?></span>
                                            <span class="d-flex align-items-center justify-content-center"><i
                                                    class="fa text-orange fa-star me-2"></i><?php echo e(translatedNumber($course->totalReview)); ?> (<?php echo e(translatedNumber($course->total_rating)); ?> <?php echo e(__('frontend.Rating')); ?>)</span>
                                            <?php if(!Settings('hide_total_enrollment_count') == 1): ?>
                                            <span class="d-flex align-items-center justify-content-center"><i
                                                    class="fa text-primary fa-user me-2"></i><?php echo e(translatedNumber($course->total_enrolled)); ?> <?php echo e(__('frontend.Students')); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="featured-content">
                                        <h3>
                                            <a href="<?php echo e(courseDetailsUrl(@$course->id,@$course->type,@$course->slug)); ?>"
                                               class="currentColor">
                                                <?php echo e($course->title); ?>

                                            </a>
                                        </h3>
                                        <a href="#" class="author d-flex flex-wrap">
                                            <div class="author-img rounded-circle overflow-hidden"><img
                                                    src="<?php echo e(getProfileImage($course->user->image,$course->user->name)); ?>"
                                                    alt=""></div>
                                            <div class="author-content">
                                                <p class="fw-bold fs-14 lh-base"><?php echo e($course->user->name); ?> <span
                                                        class="d-block fw-500 fs-12"><?php echo e($course->user->headline); ?></span>
                                                </p>
                                            </div>
                                        </a>
                                        <p><?php echo \Illuminate\Support\Str::limit(strip_tags($course->about),100); ?> </p>
                                        <div class="d-flex aling-items-center justify-content-between flex-column-reverse flex-md-row gap-3">

                                            <?php if(auth()->check() && $course->isLoginUserEnrolled): ?>
                                                <a href="<?php echo e(courseDetailsUrl(@$course->id,@$course->type,@$course->slug)); ?>"
                                                   class="theme-btn">
                                                    <?php echo e(__('courses.Get Started')); ?>

                                                </a>
                                            <?php else: ?>
                                                <a href="<?php echo e(route('buyNow',[@$course->id])); ?>"
                                                   class="theme-btn">
                                                    <?php echo e(__('frontend.Join Now')); ?>

                                                </a>
                                            <?php endif; ?>

                                            <?php if(showEcommerce()): ?>
                                                <div class="d-flex align-items-center">
                                                    <strong>
                                                        <?php if(@$course->discount_price!=null): ?>
                                                            <?php echo e(getPriceFormat($course->discount_price)); ?>

                                                        <?php else: ?>
                                                            <?php echo e(getPriceFormat($course->price)); ?>

                                                        <?php endif; ?>
                                                    </strong>
                                                    <?php if(@$course->discount_price!=null): ?>
                                                        <del><?php echo e(getPriceFormat($course->price)); ?></del>
                                                    <?php endif; ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
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
            const rtl = $('html').attr('dir');
            $('.featured-slider').owlCarousel({
                nav: false,
                rtl: rtl === 'rtl',
                navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
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
<?php /**PATH /home/u709483251/domains/infixedulms.madhutechnoworld.in/public_html/resources/views/frontend/infixlmstheme/snippets/components/_single_course_featured.blade.php ENDPATH**/ ?>