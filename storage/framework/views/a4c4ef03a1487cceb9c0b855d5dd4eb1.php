<style>

    .theme-btn {
        --btn-padding-y: 14px;
        --btn-padding-x: 24px;
        font-family: var(--font_family1);
        display: inline-flex;
        align-items: center;
        border-radius: 100px;
        background: var(--system_primery_color);
        background-size: 200% auto;
        color: #fff;
        font-size: 16px;
        line-height: 1.625;
        padding: var(--btn-padding-y) var(--btn-padding-x);
        border: 1px solid transparent;
        justify-content: center;
        text-align: center;
        font-weight: 500
    }

    @media only screen and (min-width: 768px) and (max-width: 991px) {
        .theme-btn {
            --btn-padding-y: 10px;
            --btn-padding-x: 20px
        }
    }

    .theme-btn:hover {
        color: #fff;
        background-color: var(--system_secendory_color) !important;
        border-color: var(--system_secendory_color)
    }
</style>
<div class="row -mt-24  row-gap-24">
    <?php if(isset($result)): ?>
        <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-4 col-sm-6 d-flex">
                <div class="course-item w-100">
                    <a href="<?php echo e(courseDetailsUrl(@$course->id,@$course->type,@$course->slug)); ?>">
                        <div class="course-item-img lazy">
                            <img src="<?php echo e(getCourseImage($course->thumbnail)); ?>" alt="<?php echo e($course->title); ?>">
                        </div>
                    </a>
                    <div class="course-item-content">
                        <p class="fs-13 mb-2 fw-normal"><span
                                class="text-primary"><?php echo e(__('frontend.in')); ?>:</span> <?php echo e($course->category->name); ?> </p>
                        <div class="course-item-rating">
                            <a href="<?php echo e(route('instructorDetails',[$course->user->id,Str::slug($course->user->name,'-')])); ?>"
                               class="d-flex align-items-center">
                                <div class="user">
                                    <img src="<?php echo e(getProfileImage($course->user->image,$course->user->name)); ?>" alt="">
                                </div>
                                <div class="content">
                                    <span class="lh-1"><?php echo e($course->user->name); ?></span>
                                    <div class="lh-1 rating">
                                        <?php
                                            $main_stars= $course->total_rating;

                                            $stars=intval($main_stars);

                                        ?>
                                        <?php for($i = 0; $i <  $stars; $i++): ?>
                                            <i class="fas fa-star"></i>
                                        <?php endfor; ?>
                                        <?php if($main_stars>$stars): ?>
                                            <i class="fas fa-star-half"></i>
                                        <?php endif; ?>
                                        <?php if($main_stars==0): ?>
                                            <?php for($i = 0; $i <  5; $i++): ?>
                                                <i class="far fa-star"></i>
                                            <?php endfor; ?>
                                        <?php endif; ?>

                                    </div>
                                </div>
                            </a>
                        </div>
                        <a class="course-item-title" data-bs-toggle="tooltip" data-bs-placement="bottom"
                           title="<?php echo e($course->title); ?>"
                           href="<?php echo e(courseDetailsUrl(@$course->id,@$course->type,@$course->slug)); ?>">
                            <?php echo e($course->title); ?>

                        </a>
                        <div class="course-item-price d-flex flex-wrap align-items-center justify-content-between">

                            <?php if(auth()->check() && $course->isLoginUserEnrolled): ?>
                                <a href="<?php echo e(courseDetailsUrl(@$course->id,@$course->type,@$course->slug)); ?>"
                                   class="theme-btn">
                                    <?php echo e(__('courses.Get Started')); ?>

                                </a>
                            <?php else: ?>
                                <a href="<?php echo e(route('buyNow',[@$course->id])); ?>"
                                   class="theme-btn">
                                    <?php echo e(__('frontend.Buy Now')); ?>

                                </a>
                            <?php endif; ?>
                            <?php if(showEcommerce()): ?>
                                <span>
                                    <?php if(@$course->discount_price!=null): ?>
                                        <del><?php echo e(getPriceFormat($course->price)); ?></del>
                                    <?php endif; ?>
                                    <strong class="fw-bold d-inline-block ms-2">
                                        <?php if(@$course->discount_price!=null): ?>
                                            <?php echo e(getPriceFormat($course->discount_price)); ?>

                                        <?php else: ?>
                                            <?php echo e(getPriceFormat($course->price)); ?>

                                        <?php endif; ?>
                                    </strong>
                                </span>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>


    <script>
        if ($.isFunction($.fn.lazy)) {
            $('.lazy').lazy();
        }
    </script>
</div>
<?php /**PATH /home/u709483251/domains/infixedulms.madhutechnoworld.in/public_html/resources/views/frontend/infixlmstheme/snippets/components/_single_course_v2.blade.php ENDPATH**/ ?>