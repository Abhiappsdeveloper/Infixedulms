<?php if(isset($result)): ?>
    <?php
        $total =0;
        $courses =[];
        foreach ($result as $key => $value) {
            if ($value->discount_price!=null){
                $price=(int)$value->discount_price;
            }else{
                $price=(int)$value->price;
            }

            if ((request()->get('price')=='paid' && $price==0) || (request()->get('price')=='free' && $price!=0)){
                continue;
            }
            $total++;
            $courses[] = $value;
        }
    ?>
    <div class="row row-gap-24">

        <div class="col-12">
            <div class="box_header d-flex flex-wrap align-items-center justify-content-between">
                <h5 class="font_16 f_w_500 mb-0"><?php echo e(translatedNumber($total)); ?>

                    <?php if(Route::current()->getName() == 'courses'): ?>
                        <?php echo e(__('frontend.Courses are found')); ?>

                    <?php elseif(Route::current()->getName() == 'quizzes'): ?>
                        <?php echo e(__('frontend.Quizzes are found')); ?>

                    <?php elseif(Route::current()->getName() == 'classes'): ?>
                        <?php echo e(__('frontend.Classes are found')); ?>

                    <?php else: ?>
                        <?php echo e(__('frontend.Topics are found')); ?>

                    <?php endif; ?>
                </h5>
                <div class="box_header_right">
                    <div class="short_select d-flex align-items-center">
                        <div class="mobile_filter mr_10">
                            <svg xmlns="http://www.w3.org/2000/svg" width="19.5" height="13"
                                 viewBox="0 0 19.5 13">
                                <g transform="translate(28)">
                                    <rect id="" data-name="Rectangle 1" width="19.5"
                                          height="2" rx="1"
                                          transform="translate(-28)"
                                          fill="var(--system_primery_color)"/>
                                    <rect id="" data-name="Rectangle 2" width="15.5"
                                          height="2" rx="1"
                                          transform="translate(-26 5.5)"
                                          fill="var(--system_primery_color)"/>
                                    <rect id="" data-name="Rectangle 3" width="5" height="2"
                                          rx="1"
                                          transform="translate(-20.75 11)"
                                          fill="var(--system_primery_color)"/>
                                </g>
                            </svg>
                        </div>
                        
                        <select class="small_select" id="order">
                            <option value="" data-display=""><?php echo e(__('frontend.None')); ?></option>
                            <option
                                value="price" <?php echo e(request('order')=="price"?'selected':''); ?>><?php echo e(__('frontend.Price')); ?></option>
                            <option
                                value="created_at" <?php echo e(request('order')=="created_at"?'selected':''); ?>><?php echo e(__('frontend.Date')); ?></option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <?php $__empty_1 = true; $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="col-sm-6 col-xl-4">
                <div class="course-item">
                    <a href="<?php echo e(courseDetailsUrl(@$course->id,@$course->type,@$course->slug)); ?>">
                        <div class="course-item-img lazy">
                            <img src="<?php echo e(getCourseImage($course->thumbnail)); ?>" alt="">

                            <?php if($course->level): ?>
                                <span class="course-tag">
                                <span>
                                    <?php echo e($course->courseLevel->title); ?>

                                </span>
                            </span>
                            <?php endif; ?>
                        </div>
                    </a>
                    <div class="course-item-info">
                        <a href="<?php echo e(courseDetailsUrl(@$course->id,@$course->type,@$course->slug)); ?>" class="title"
                           title="<?php echo e($course->title); ?>">
                            <?php echo e($course->title); ?>

                        </a>
                        <div class="d-flex align-itemes-center justify-content-between meta">
                            <div class="rating">
                                <svg width="16" height="15" viewBox="0 0 16 15" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M14.9922 5.21624L10.2573 4.53056L8.1344 0.242104C8.09105 0.168678 8.02784 0.10754 7.9513 0.0649862C7.87476 0.0224321 7.78764 0 7.69892 0C7.6102 0 7.52308 0.0224321 7.44654 0.0649862C7.37 0.10754 7.3068 0.168678 7.26345 0.242104L5.14222 4.52977L0.40648 5.21624C0.31946 5.22916 0.237852 5.2645 0.170564 5.31841C0.103275 5.37231 0.0528901 5.44272 0.0249085 5.52194C-0.00307309 5.60116 -0.00757644 5.68614 0.01189 5.76762C0.0313563 5.8491 0.0740445 5.92394 0.135295 5.98398L3.57501 9.33111L2.76146 14.0591C2.74696 14.1436 2.75782 14.2304 2.79281 14.3094C2.8278 14.3883 2.88549 14.4564 2.95932 14.5058C3.03314 14.5551 3.12011 14.5838 3.2103 14.5886C3.30049 14.5933 3.39026 14.5739 3.46936 14.5325L7.6985 12.3153L11.9276 14.5333C12.0068 14.5746 12.0965 14.5941 12.1867 14.5893C12.2769 14.5846 12.3639 14.5559 12.4377 14.5066C12.5115 14.4572 12.5692 14.3891 12.6042 14.3101C12.6392 14.2311 12.6501 14.1444 12.6356 14.0599L11.822 9.3319L15.2634 5.98398C15.3253 5.92392 15.3685 5.84885 15.3883 5.76699C15.4082 5.68515 15.4039 5.59969 15.3758 5.52003C15.3478 5.44036 15.2972 5.36956 15.2295 5.31541C15.1618 5.26126 15.0797 5.22586 14.9922 5.21308V5.21624Z"
                                        fill="#FFC107"/>
                                </svg>
                                <span><?php echo e(translatedNumber($course->totalReview)); ?> (<?php echo e(translatedNumber($course->total_reviews)); ?> <?php echo e(__('common.Rating')); ?>)</span>
                            </div>
                            <div class="enrolled-student">
                                <?php if(!Settings('hide_total_enrollment_count') == 1): ?>
                                    <a href="#">
                                        <svg width="16" height="18" viewBox="0 0 16 18" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14.2508 3.87484L9.30078 1.0165C8.49245 0.549837 7.49245 0.549837 6.67578 1.0165L1.73411 3.87484C0.925781 4.3415 0.425781 5.20817 0.425781 6.14984V11.8498C0.425781 12.7832 0.925781 13.6498 1.73411 14.1248L6.68411 16.9832C7.49245 17.4498 8.49245 17.4498 9.30911 16.9832L14.2591 14.1248C15.0674 13.6582 15.5674 12.7915 15.5674 11.8498V6.14984C15.5591 5.20817 15.0591 4.34984 14.2508 3.87484ZM7.99245 5.1165C9.06745 5.1165 9.93411 5.98317 9.93411 7.05817C9.93411 8.13317 9.06745 8.99984 7.99245 8.99984C6.91745 8.99984 6.05078 8.13317 6.05078 7.05817C6.05078 5.9915 6.91745 5.1165 7.99245 5.1165ZM10.2258 12.8832H5.75911C5.08411 12.8832 4.69245 12.1332 5.06745 11.5748C5.63411 10.7332 6.73411 10.1665 7.99245 10.1665C9.25078 10.1665 10.3508 10.7332 10.9174 11.5748C11.2924 12.1248 10.8924 12.8832 10.2258 12.8832Z"
                                                fill="#292D32"/>
                                        </svg>
                                        <?php echo e(translatedNumber($course->total_enrolled)); ?> <?php echo e(__('frontend.Students')); ?>

                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="course-item-info-description">
                            <?php echo e(getLimitedText($course->about,120)); ?>

                        </div>

                        <div class="course-item-footer d-flex justify-content-between">
                            <?php if (isset($component)) { $__componentOriginalc1cda8d9ec000fb2f55ff05ba682c990 = $component; } ?>
<?php $component = App\View\Components\PriceTag::resolve(['price' => $course->price,'discount' => $course->discount_price] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('price-tag'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\PriceTag::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc1cda8d9ec000fb2f55ff05ba682c990)): ?>
<?php $component = $__componentOriginalc1cda8d9ec000fb2f55ff05ba682c990; ?>
<?php unset($__componentOriginalc1cda8d9ec000fb2f55ff05ba682c990); ?>
<?php endif; ?>

                            <?php if(!onlySubscription()): ?>
                                <?php if(auth()->guard()->check()): ?>
                                    <?php if(!$course->isLoginUserEnrolled && !$course->isLoginUserCart): ?>
                                        <a href="#" class="cart_store"
                                           data-id="<?php echo e($course->id); ?>">
                                            <img src="<?php echo e(asset('public/frontend/infixlmstheme/svg/cart.svg')); ?>" alt="cart">
                                        </a>
                                    <?php endif; ?>
                                <?php endif; ?>
                                <?php if(auth()->guard()->guest()): ?>
                                    <?php if(!$course->isGuestUserCart): ?>
                                        <a href="#" class="cart_store"
                                           data-id="<?php echo e($course->id); ?>">
                                            <img src="<?php echo e(asset('public/frontend/infixlmstheme/svg/cart.svg')); ?>" alt="cart">
                                        </a>
                                    <?php endif; ?>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <div class="col-lg-12">
                <div
                    class="Nocouse_wizged text-center d-flex align-items-center justify-content-center">
                    <div class="thumb">
                        <img style="width: 50px"
                             src="<?php echo e(asset('public/frontend/infixlmstheme/img/not-found.png')); ?>"
                             alt="">
                    </div>

                    <h1>

                        <?php if(Route::currentRouteName() == 'courses'): ?>
                            <?php echo e(__('frontend.No Course Found')); ?>

                        <?php elseif(Route::currentRouteName() == 'quizzes'): ?>
                            <?php echo e(__('frontend.No Quiz Found')); ?>

                        <?php elseif(Route::currentRouteName() == 'classes'): ?>
                            <?php echo e(__('frontend.No Class Found')); ?>

                        <?php else: ?>
                            <?php echo e(__('frontend.No Topic Found')); ?>

                        <?php endif; ?>

                    </h1>
                </div>
            </div>
        <?php endif; ?>
        <?php if(isset($has_pagination)): ?>
            <?php echo e($result->appends(Request::all())->links(theme('snippets.components._dynamic_pagination'))); ?>

        <?php endif; ?>

    </div>
    <script>
        if ($.isFunction($.fn.lazy)) {
            $('.lazy').lazy();
        }
    </script>
<?php endif; ?>
<?php /**PATH /home/u709483251/domains/infixedulms.madhutechnoworld.in/public_html/resources/views/frontend/infixlmstheme/snippets/components/_single_topic.blade.php ENDPATH**/ ?>