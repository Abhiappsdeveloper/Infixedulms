<div class="row -mt-40  row-gap-24">
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
                        
                        <div class="meta d-flex align-items-center gap-2">
                            <span
                                class="bg-primary fs-14 lh-1 text-white rounded-2 fw-bold"><?php echo e(@$course->courseLevel->title); ?></span>
                        </div>
                        <a href="#" class="author d-flex flex-wrap">
                            <div class="author-img rounded-circle overflow-hidden"><img
                                    src="<?php echo e(getProfileImage($course->user->image,$course->user->name)); ?>" alt=""></div>
                            <div class="author-content">
                                <p class="fw-bold fs-14 lh-base text-secondary"><?php echo e($course->user->name); ?> <span
                                        class="d-block fw-500 fs-12"><?php echo e($course->user->headline); ?></span></p>
                            </div>
                        </a>
                        
                        <a class="course-item-title" data-bs-toggle="tooltip" data-bs-placement="bottom"
                           title="<?php echo e($course->title); ?>"
                           href="<?php echo e(courseDetailsUrl(@$course->id,@$course->type,@$course->slug)); ?>">
                            <?php echo e($course->title); ?>

                        </a>
                        <div class="course-item-content-rating d-flex align-items-center justify-content-between">
                            <div>
                                <?php if(courseSetting()->show_rating==1): ?>
                                    <i class="fa fa-star text-orange"></i>
                                    <span
                                        class="fw-bold"><?php echo e(translatedNumber($course->total_rating)); ?> (<?php echo e(translatedNumber(count($course->reviews))); ?> <?php echo e(__('quiz.Rating')); ?>)</span>
                                <?php endif; ?>
                            </div>
                            <?php if(!Settings('hide_total_enrollment_count') == 1): ?>
                                <div>
                                    <i class="fa fa-user"></i>
                                    <span
                                        class="fw-bold"><?php echo e(translatedNumber($course->total_enrolled)); ?> <?php echo e(__('frontend.Students')); ?></span>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div
                        class="course-item-footer bg-primary d-flex align-items-center justify-content-between flex-wrap no-border">
                        <div class="d-flex align-items-center">
                            <?php if(showEcommerce()): ?>
                                <strong>
                                    <?php if(@$course->discount_price!=null): ?>
                                        <?php echo e(getPriceFormat($course->discount_price)); ?>

                                    <?php else: ?>
                                        <?php echo e(getPriceFormat($course->price)); ?>

                                    <?php endif; ?>
                                </strong>
                                <?php if(@$course->discount_price!=null): ?>
                                    <del class="ms-2 fw-normal"><?php echo e(getPriceFormat($course->discount_price)); ?></del>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                        <div>
                            <?php if(courseSetting()->show_cart==1): ?>
                                <?php if(auth()->guard()->check()): ?>
                                    <?php if(!$course->isLoginUserEnrolled && !$course->isLoginUserCart): ?>
                                        <button data-id="<?php echo e($course->id); ?>"
                                                class="cart_store bg-transparent border-0 text-white"><i
                                                class="fa fa-shopping-cart"></i></button>
                                    <?php endif; ?>
                                <?php endif; ?>
                                <?php if(auth()->guard()->guest()): ?>
                                    <?php if(!$course->isGuestUserCart): ?>
                                        <button data-id="<?php echo e($course->id); ?>"
                                                class="cart_store bg-transparent border-0 text-white"><i
                                                class="fa fa-shopping-cart"></i></button>
                                    <?php endif; ?>
                                <?php endif; ?>
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
<?php /**PATH /home/u709483251/domains/infixedulms.madhutechnoworld.in/public_html/resources/views/frontend/infixlmstheme/snippets/components/_single_course_v3.blade.php ENDPATH**/ ?>