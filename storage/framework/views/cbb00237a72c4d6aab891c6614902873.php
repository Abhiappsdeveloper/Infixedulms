<div class="row">

    <?php if(isset($result)): ?>
        <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $quiz): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div class="col-lg-4 col-xl-3 col-md-6">
                <div class="quiz_wizged mb_30">
                    <a href="<?php echo e(courseDetailsUrl(@$quiz->id,@$quiz->type,@$quiz->slug)); ?>">
                        <div class="thumb">
                            <div class="thumb_inner lazy"
                                 data-src="<?php echo e(getCourseImage($quiz->thumbnail)); ?>">
                            </div>

                            <?php if(showEcommerce()): ?>
                                <span class="prise_tag">
                               <?php if(@$quiz->discount_price!=null): ?>
                                        <span class="prev_prise">
                                  <?php echo e(getPriceFormat($quiz->price)); ?>

                                  </span>
                                    <?php endif; ?>
                                <span>
                                <?php if(@$quiz->discount_price!=null): ?>
                                        <?php echo e(getPriceFormat($quiz->discount_price)); ?>

                                    <?php else: ?>
                                        <?php echo e(getPriceFormat($quiz->price)); ?>

                                    <?php endif; ?>
                                </span>
                                </span>
                            <?php endif; ?>
                            <span class="live_quiz"><?php echo e(__('quiz.Quiz')); ?></span>
                        </div>

                    </a>

                    <div class="course_content">
                        <a href="<?php echo e(courseDetailsUrl(@$quiz->id,@$quiz->type,@$quiz->slug)); ?>">
                            <h4 class="noBrake" title=" <?php echo e($quiz->title); ?>">
                                <?php echo e($quiz->title); ?>

                            </h4>
                        </a>
                        <div class="rating_cart">
                            <div class="rateing">
                                <span><?php echo e(translatedNumber($quiz->totalReview)); ?>/<?php echo e(translatedNumber(5)); ?></span>
                                <i class="fas fa-star"></i>
                            </div>
                            <?php if(auth()->guard()->check()): ?>
                                <?php if(!$quiz->isLoginUserEnrolled && !$quiz->isLoginUserCart): ?>
                                    <a href="#" class="cart_store"
                                       data-id="<?php echo e($quiz->id); ?>">
                                        <i class="fas fa-shopping-cart"></i>
                                    </a>
                                <?php endif; ?>
                            <?php endif; ?>
                            <?php if(auth()->guard()->guest()): ?>
                                <?php if(!$quiz->isGuestUserCart): ?>
                                    <a href="#" class="cart_store"
                                       data-id="<?php echo e($quiz->id); ?>">
                                        <i class="fas fa-shopping-cart"></i>
                                    </a>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                        <div class="course_less_students">
                            <a> <i class="ti-agenda"></i> <?php echo e(translatedNumber($quiz->quiz->total_questions)); ?>

                                <?php echo e(__('frontend.Question')); ?></a>
                            <?php if(!Settings('hide_total_enrollment_count') == 1): ?>
                                <a>
                                    <i class="ti-user"></i> <?php echo e(translatedNumber($quiz->total_enrolled)); ?> <?php echo e(__('frontend.Students')); ?>

                                </a>
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
<?php /**PATH /home/u709483251/domains/infixedulms.madhutechnoworld.in/public_html/resources/views/frontend/infixlmstheme/snippets/components/_single_home_page_quiz.blade.php ENDPATH**/ ?>