<?php $__env->startSection('title'); ?>
    <?php echo e(Settings('site_title')  ? Settings('site_title')  : 'Infix LMS'); ?> | <?php echo e(__('profile.profile')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <style>
        .profile-info ul li a i.fa-linkedin-in {
            color: #0078b6;
            transition: inherit;
        }

        .profile-info ul li a:hover i.fa-linkedin-in {
            color: #ffffff;
        }

        .profile-info .badges {
            display: block;
        }

        .profile-left {
            border: none;
            padding: 0;
        }


        .profile-info .badges li img {
            width: var(--width);
            height: var(--width)
        }

        .badgesSlider {
            width: 50%
        }

        @media (min-width: 992px) and (max-width: 1279px) {
            .badgesSlider {
                width: 42%;
            }
        }

        @media (max-width: 767px) {
            .profile-info .social_media {
                grid-template-columns: repeat(5, minmax(var(--width), 1fr));
                margin-bottom: 15px;
                width: 100%;
            }

            .badgesSlider {
                width: 100%;
                margin-bottom: 15px;
            }
        }

        .badgesSlider img {
            width: var(--width) !important;
            height: var(--width) !important;
            object-fit: contain;
        }

        .profile-wrapper {
            padding: 26px;
            background-color: #fff;
            box-shadow: -12px 16px 40px 0px rgba(0, 0, 0, 0.1);
        }

        .profile-img .img {
            border: 1px solid #c5c5c5;
        }

        .profile-right {
            background: var(--system_primery_color);
            background-size: 200% auto;
            padding: 35px 30px;
            border-radius: 10px;
        }

        .mr-20 {
            margin-right: 20px !important;
        }

        .profile-img {
            position: relative;
            z-index: 1;
        }

        .profile-badge {
            --width: 44px;
            width: var(--width);
            height: var(--width);
            border-radius: 100%;
            background-color: #25d978;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            position: absolute;
            right: -10px;
            bottom: 100%;
            z-index: 2;
            margin-bottom: calc(var(--width) / 2 * -1);
        }

        .profile-wrapper {
            padding: 26px;
        }

        .unverify {
            background-color: #F63743;
        }

        .profile-img {
            position: relative;
            z-index: 1;
        }

        .profile-badge {
            --width: 44px;
            width: var(--width);
            height: var(--width);
            border-radius: 100%;
            background-color: #25d978;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            position: absolute;
            right: -10px;
            bottom: 100%;
            z-index: 2;
            margin-bottom: calc(var(--width) / 2 * -1);
        }

        .unverify {
            background-color: #F63743;
        }

        .profile-info .gap-20 {
            gap: 20px
        }

        @media (max-width: 576px) {
            .profile .nav-link {
                font-size: 14px;
                line-height: 14px;
                padding: 10px 12px !important;
                min-width: 60px;
            }
        }

    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script>
        $(".badgesSlider").owlCarousel({
            loop: false,
            margin: 14,
            autoplay: false,
            items: 5,
            navText: [
                '<i class="fa fa-angle-left"></i>',
                '<i class="fa fa-angle-right"></i>',
            ],
            nav: false,
            dots: false,
            autoplayHoverPause: true,
            autoplaySpeed: 800,
            autoWidth: true,
            // responsive: {
            //     0: {
            //         items: 1,
            //     },
            //     767: {
            //         items: 6,
            //     },
            //     992: {
            //         items: 4,
            //     },
            //     1400: {
            //         items: 5,
            //     },
            // },
        });

    </script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('mainContent'); ?>

    <!-- profile cover photo -->
    <div class="profile-cover">
        <img
            src="<?php echo e((@$user->userInfo && @$user->userInfo->cover_photo)? showImage(@$user->userInfo->cover_photo):showImage(null,'cover_photo')); ?>"
            alt="cover photo">
    </div>
    <!-- profile cover photo -->
    <?php
        $already_count=[];
    ?>
    <?php $__currentLoopData = @$user->userLatestBadges; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $badge): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php
            $b =$badge->badge;

            if (in_array($b->type,$already_count)){
                continue;
            }else{
                $already_count[]=$b->type;
            }
        ?>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <!-- profile info -->
    <div class="profile">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="profile-wrapper d-flex flex-wrap align-items-center">
                        <div class="profile-left d-flex flex-wrap align-items-center">
                            <div class="profile-img text-center">
                                <?php if(@$user->userInfo->offline_status): ?>

                                    <div class="profile-badge unverify">

                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22Z"
                                                stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"
                                                stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M18.8999 5L4.8999 19" stroke="currentColor" stroke-width="1.5"
                                                  stroke-miterlimit="10" stroke-linecap="round"
                                                  stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                <?php else: ?>
                                    <div class="profile-badge">

                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22Z"
                                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"/>
                                            <path d="M7.75 11.9999L10.58 14.8299L16.25 9.16992" stroke="currentColor"
                                                  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                <?php endif; ?>

                                <div class="img"><img src="<?php echo e(getProfileImage(@$user->image,$user->name)); ?>"
                                                      alt="Profile Photo">
                                </div>
                                <a href="<?php echo e($follow_btn_route); ?>" class="theme_btn rounded-pill"><?php echo e($follow_btn_text); ?></a>
                                <p class="f_w_500"><?php echo e($total_followers); ?> <?php echo e(__('profile.follower')); ?>

                                    | <?php echo e($total_following); ?> <?php echo e(__('profile.following')); ?></p>
                            </div>
                            <div class="profile-info">
                                <h4><?php echo e(@$user->name); ?></h4>
                                <?php if($section_review): ?>
                                    <blockquote class="d-block"><span><i class="fa fa-star"></i> <?php echo e($user->total_rating); ?></span>
                                    </blockquote>
                                <?php endif; ?>
                                <?php if( @$user->userInfo && @$user->userInfo->short_description): ?>
                                    <p><?php echo e(@$user->userInfo->short_description); ?> </p>
                                <?php endif; ?>

                                <div class="d-flex align-items-enter flex-wrap">

                                    <?php if($section_badge && @$user->userLatestBadges->count() > 0): ?>
                                        <ul class="<?php echo e(count($already_count) > 5 ? 'badgesSlider owl-carousel': "badges d-flex align-items-center"); ?>">
                                            <?php
                                                $already=[];
                                            ?>
                                            <?php $__currentLoopData = @$user->userLatestBadges; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $badge): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php
                                                    $b =$badge->badge;

                                                    if (in_array($b->type,$already)){
                                                        continue;
                                                    }else{
                                                        $already[]=$b->type;
                                                    }
                                                ?>
                                                <li><img src="<?php echo e(asset($b->image)); ?>"
                                                         data-bs-toggle="tooltip" data-placement="top"
                                                         title="<?php echo e($b->title); ?> <?php echo e(ucfirst($b->type)); ?> <?php echo e(trans('setting.Badge')); ?>"
                                                         alt="<?php echo e($b->title); ?> <?php echo e(ucfirst($b->type)); ?> <?php echo e(trans('setting.Badge')); ?>">
                                                </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    <?php endif; ?>
                                    <ul class="social_media">
                                        <li><a href="<?php echo e(@$user->facebook??"javascript:void(0)"); ?>"><i
                                                    class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="<?php echo e(@$user->twitter??"javascript:void(0)"); ?>"><i
                                                    class="fab fa-twitter"></i></a></li>
                                        <li><a href="<?php echo e(@$user->linkedin??"javascript:void(0)"); ?>"><i
                                                    class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="<?php echo e(@$user->instagram??"javascript:void(0)"); ?>"><i
                                                    class="fab fa-instagram"></i></a></li>
                                        <?php if(isModuleActive('Chat')): ?>

                                            <?php if(Settings('chat_invitation_requirement') == 'none'): ?>
                                                <form action="<?php echo e(route('chat.invitation.open')); ?>"
                                                      method="post">
                                                    <?php echo csrf_field(); ?>
                                                    <input type="hidden" value="<?php echo e($user->id); ?>" name="to">
                                                    <a
                                                        onclick="$(this).closest('form').submit();" href="#">
                                                        <i class="far fa-comment-dots"></i>
                                                    </a>
                                                </form>
                                            <?php else: ?>
                                                <?php if(!$user->connectedWithLoggedInUser()): ?>
                                                    <form action="<?php echo e(route('chat.invitation.create')); ?>"
                                                          method="post">
                                                        <?php echo csrf_field(); ?>
                                                        <input type="hidden" value="<?php echo e($user->id); ?>"
                                                               name="to">
                                                        <li>
                                                            <a href="#"
                                                               onclick="$(this).closest('form').submit();">
                                                                <span class="ti-plus"></span>
                                                            </a>
                                                        </li>
                                                    </form>
                                                <?php else: ?>
                                                    <?php if($user->connectionPending()): ?>
                                                        <li>
                                                            <span class="ti-timer"></span>
                                                        </li>>
                                                    <?php elseif($user->connectionSuccess()): ?>
                                                        <li>
                                                            <span class="ti-check"></span>
                                                        </li>
                                                    <?php else: ?>
                                                        <li>
                                                            <span class="ti-close"></span>
                                                        </li>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                            <li>
                                        <?php endif; ?>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="profile-right">
                            <ul>
                                <?php if($section_total_instructor): ?>
                                    <li>
                                        <svg width="29" height="26" viewBox="0 0 29 26" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M19.2578 13.2603C21.902 13.2603 24.0456 11.1167 24.0456 8.47247C24.0456 6.42701 22.7629 4.68115 20.958 3.99536"
                                                stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
                                                stroke-linejoin="round"/>
                                            <path
                                                d="M11.2055 12.3114C14.0718 12.3114 16.3954 9.98784 16.3954 7.12155C16.3954 4.25524 14.0718 1.93164 11.2055 1.93164C8.33922 1.93164 6.01562 4.25524 6.01562 7.12155C6.01562 9.98784 8.33922 12.3114 11.2055 12.3114Z"
                                                stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
                                                stroke-linejoin="round"/>
                                            <path
                                                d="M19.1506 19.6029C21.6893 21.2937 19.975 24.5548 16.9249 24.5548H5.47059C2.42043 24.5548 0.706214 21.2937 3.24485 19.6029C5.52196 18.0863 8.25663 17.2025 11.1977 17.2025C14.1389 17.2025 16.8735 18.0863 19.1506 19.6029Z"
                                                stroke="currentColor" stroke-width="2.5"/>
                                            <path
                                                d="M16.4844 24.5543H23.7443C26.5583 24.5543 28.1396 21.546 25.7976 19.986C25.151 19.5553 24.4642 19.18 23.7443 18.8667"
                                                stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
                                        </svg>
                                        <?php echo e($total_instructors); ?> <?php echo e(trans('profile.instructors')); ?>

                                    </li>
                                <?php endif; ?>

                                <?php if($section_total_review): ?>
                                    <li>
                                        <svg width="27" height="26" viewBox="0 0 27 26" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11.0066 3.01965C11.8925 0.875304 14.8612 0.805786 15.7513 2.94836C16.3677 4.43186 16.8379 5.9595 17.3116 7.95552C19.4048 7.93418 21.041 7.97944 22.6924 8.12785C25.0142 8.3365 25.9512 11.1597 24.1437 12.6318C23.1221 13.4639 22.025 14.2335 20.6499 15.0965C20.2629 15.3394 20.0887 15.8147 20.2291 16.2496C20.8708 18.2395 21.3042 19.8546 21.6413 21.5492C22.09 23.8027 19.716 25.522 17.7866 24.2741C16.3072 23.3176 14.9635 22.2165 13.3096 20.6456C11.6707 22.1544 10.3335 23.225 8.87114 24.1755C6.93055 25.4374 4.50552 23.7365 4.95605 21.466C5.28169 19.825 5.71584 18.2288 6.37658 16.259C6.52379 15.8201 6.34962 15.3364 5.95684 15.0914C4.53994 14.2076 3.41466 13.4203 2.35891 12.5527C0.580534 11.0911 1.48841 8.30536 3.78054 8.09356C5.45806 7.93854 7.13307 7.90567 9.30755 7.95552C9.8801 6.00796 10.3941 4.50223 11.0066 3.01965Z"
                                                stroke="currentColor" stroke-width="2.5" stroke-linejoin="round"/>
                                        </svg>
                                        <?php echo e($total_review); ?> <?php echo e(__('profile.reviews')); ?>

                                    </li>
                                <?php endif; ?>
                                <?php if($section_total_student): ?>
                                    <li>
                                        <svg width="29" height="26" viewBox="0 0 29 26" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M19.2578 13.2603C21.902 13.2603 24.0456 11.1167 24.0456 8.47247C24.0456 6.42701 22.7629 4.68115 20.958 3.99536"
                                                stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
                                                stroke-linejoin="round"/>
                                            <path
                                                d="M11.2055 12.3114C14.0718 12.3114 16.3954 9.98784 16.3954 7.12155C16.3954 4.25524 14.0718 1.93164 11.2055 1.93164C8.33922 1.93164 6.01562 4.25524 6.01562 7.12155C6.01562 9.98784 8.33922 12.3114 11.2055 12.3114Z"
                                                stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
                                                stroke-linejoin="round"/>
                                            <path
                                                d="M19.1506 19.6029C21.6893 21.2937 19.975 24.5548 16.9249 24.5548H5.47059C2.42043 24.5548 0.706214 21.2937 3.24485 19.6029C5.52196 18.0863 8.25663 17.2025 11.1977 17.2025C14.1389 17.2025 16.8735 18.0863 19.1506 19.6029Z"
                                                stroke="currentColor" stroke-width="2.5"/>
                                            <path
                                                d="M16.4844 24.5543H23.7443C26.5583 24.5543 28.1396 21.546 25.7976 19.986C25.151 19.5553 24.4642 19.18 23.7443 18.8667"
                                                stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
                                        </svg>
                                        <?php echo e($total_students); ?> <?php echo e(trans('profile.students')); ?>

                                    </li>
                                <?php endif; ?>
                                <?php if($section_total_course): ?>
                                    <li>
                                        <svg width="29" height="27" viewBox="0 0 29 27" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.70034 17.3814C2.85209 18.3963 3.73155 19.1535 4.75726 19.1228C7.90038 19.0288 11.1024 18.9078 14.4581 18.9078C17.8006 18.9078 21.0032 18.9836 24.1281 19.0999C25.1668 19.1385 26.0666 18.3781 26.2205 17.3503C26.5422 15.202 26.9161 12.9637 26.9161 10.664C26.9161 8.37225 26.5448 6.14157 26.2239 4.00014C26.0684 2.96301 25.1539 2.20042 24.1062 2.24443C21.0168 2.37417 17.7849 2.42016 14.4581 2.42016C11.1177 2.42016 7.88551 2.32964 4.77851 2.22097C3.74385 2.18477 2.85036 2.94419 2.69711 3.96807C2.37514 6.11931 2 8.3608 2 10.664C2 12.9748 2.37765 15.2236 2.70034 17.3814Z"
                                                stroke="currentColor" stroke-width="2.5"/>
                                            <path d="M9.49219 25H19.4254" stroke="currentColor" stroke-width="2.5"
                                                  stroke-linecap="round"/>
                                            <path d="M14.4531 18.9126V24.9994" stroke="currentColor" stroke-width="2.5"
                                                  stroke-linecap="round"/>
                                        </svg>
                                        <?php echo e($total_courses); ?>


                                        <?php echo e(__('profile.courses')); ?>

                                    </li>
                                <?php endif; ?>
                                <?php if($section_blog_tab): ?>
                                    <li>


                                        <svg width="29" height="29" viewBox="0 0 29 29" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M25.375 8.45841V20.5417C25.375 24.1667 23.5625 26.5834 19.3333 26.5834H9.66667C5.4375 26.5834 3.625 24.1667 3.625 20.5417V8.45841C3.625 4.83341 5.4375 2.41675 9.66667 2.41675H19.3333C23.5625 2.41675 25.375 4.83341 25.375 8.45841Z"
                                                stroke="currentColor" stroke-width="2.5" stroke-miterlimit="10"
                                                stroke-linecap="round" stroke-linejoin="round"/>
                                            <path
                                                d="M17.5208 5.4375V7.85417C17.5208 9.18333 18.6083 10.2708 19.9374 10.2708H22.3541"
                                                stroke="currentColor" stroke-width="2.5" stroke-miterlimit="10"
                                                stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M9.66675 15.7083H14.5001" stroke="currentColor" stroke-width="2.5"
                                                  stroke-miterlimit="10" stroke-linecap="round"
                                                  stroke-linejoin="round"/>
                                            <path d="M9.66675 20.5417H19.3334" stroke="currentColor" stroke-width="2.5"
                                                  stroke-miterlimit="10" stroke-linecap="round"
                                                  stroke-linejoin="round"/>
                                        </svg>


                                        <?php echo e($total_blogs); ?>  <?php echo e(__('profile.blogs')); ?>

                                    </li>
                                <?php endif; ?>
                                <?php if($section_certificate_tab): ?>
                                    <li>
                                        <svg width="29" height="29" viewBox="0 0 17 20" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M15.4307 18.2183C15.3801 18.9256 14.5305 19.2561 14.0153 18.7691L9.39537 14.4015C8.80981 13.848 7.89387 13.848 7.30831 14.4015L2.68845 18.7691C2.17324 19.2561 1.32357 18.9256 1.27306 18.2183C0.929826 13.4131 0.91535 8.59416 1.20047 3.78824C1.29405 2.21097 2.61479 1 4.19482 1H12.5089C14.0889 1 15.4096 2.21097 15.5031 3.78824C15.7884 8.59416 15.7738 13.4131 15.4307 18.2183Z"
                                                stroke="currentColor" stroke-width="1.71429" stroke-linecap="round"
                                                stroke-linejoin="round"/>
                                        </svg>
                                        <?php echo e($total_certificates); ?>  <?php echo e(__('profile.certificates')); ?>

                                    </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="col-12">
                    <ul class="nav nav-pills" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-about-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-about" type="button" role="tab" aria-controls="pills-about"
                                    aria-selected="true"><?php echo e(__('common.About')); ?>

                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-blog-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-blog" type="button" role="tab" aria-controls="pills-blog"
                                    aria-selected="true"><?php echo e(__('blog.My Blogs')); ?>

                            </button>
                        </li>
                        <?php if($section_course_tab): ?>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-course-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-course" type="button" role="tab"
                                        aria-controls="pills-course"
                                        aria-selected="false"><?php echo e(__('profile.courses')); ?>

                                </button>
                            </li>
                        <?php endif; ?>

                        <?php if($section_instructor_tab): ?>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-instructor-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-instructor" type="button" role="tab"
                                        aria-controls="pills-instructor"
                                        aria-selected="false"> <?php echo e(trans('profile.instructors')); ?>

                                </button>
                            </li>
                        <?php endif; ?>
                        <?php if($section_education_tab): ?>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-education-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-education" type="button" role="tab"
                                        aria-controls="pills-education"
                                        aria-selected="false"><?php echo e(__('profile.education')); ?>

                                </button>
                            </li>
                        <?php endif; ?>
                        <?php if($section_experience_tab): ?>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-experience-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-experience" type="button" role="tab"
                                        aria-controls="pills-experience"
                                        aria-selected="false"><?php echo e(__('profile.experience')); ?>

                                </button>
                            </li>
                        <?php endif; ?>
                    </ul>


                    <div class="tab-content" id="pills-tabContent">
                        
                        <div class="tab-pane fade show active" id="pills-about" role="tabpanel"
                             aria-labelledby="pills-about-tab">
                            <div class="about">

                                <?php if(@$user->userInfo->offline_message): ?>

                                    <div class="card mb-3" style="background-color: #fee7ee">

                                        <div class="card-body">
                                            <h4><?php echo e(@$user->name); ?> is temporarily unavailable.</h4>
                                            <p><?php echo e(@$user->userInfo->offline_message); ?></p>
                                        </div>
                                    </div>

                                <?php endif; ?>

                                <h3 class="h2"><?php echo e(__('common.About')); ?></h3>
                                <div>
                                    <?php echo @$user->about; ?>

                                </div>
                                
                                
                                
                                
                                
                                
                                
                                
                                <?php if($user->userSkill && $user->userSkill->skills): ?>
                                    <div class="skiils flex-wrap">
                                        <strong class="f_w_600 mb-0"><?php echo e(__('profile.skills')); ?>: </strong>
                                        <ul>
                                            <?php $__currentLoopData = explode(',',$user->userSkill->skills); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><?php echo e($skill); ?></li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>


                        <div class="tab-pane fade " id="pills-blog" role="tabpanel"
                             aria-labelledby="pills-blog-tab">
                            <div class="blog_page_wrapper pt-0">
                                <div class="container p-0">
                                    <div class="row row-gap-24">
                                        <?php $__currentLoopData = $user->blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="col-lg-4">
                                                <div class="single_blog" data-category="<?php echo e($blog->category->title); ?>">
                                                    <a href="<?php echo e(route('blogDetails',[$blog->slug])); ?>">
                                                        <div class="thumb">

                                                            <div class="thumb_inner lazy"
                                                                 data-src="<?php echo e(getBlogImage($blog->thumbnail)); ?>">
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div class="blog_meta">
                                                        <span><?php echo e($blog->user->name); ?> . <?php echo e(showDate(@$blog->authored_date )); ?> <?php echo e(@$blog->authored_time); ?></span>

                                                        <a href="<?php echo e(route('blogDetails',[$blog->slug])); ?>">
                                                            <h4><?php echo e($blog->title); ?></h4>
                                                        </a>

                                                        <div
                                                            class="d-flex align-items-end blog_item_footer">
                                                            <div
                                                                class="d-flex justify-content-between align-items-center gap-4 flex-wrap">
                                                                <a href="<?php echo e(route('blogDetails',[$blog->slug])); ?>"
                                                                   class="blog_read_more text-nowrap"><?php echo e(__('common.Read More')); ?></a>
                                                                <?php if($blog->minutes): ?>
                                                                    <p class="blog_length text-nowrap"><?php echo e(MinuteFormat($blog->minutes)); ?> <?php echo e(__('frontend.To Read')); ?></p>
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        <?php if(count($user->blogs)==0): ?>
                                            <div class="col-lg-12">
                                                <div
                                                    class="Nocouse_wizged text-center d-flex align-items-center justify-content-center">
                                                    <div class="thumb">
                                                        <img style="width: 50px"
                                                             src="<?php echo e(asset('public/frontend/infixlmstheme/img/not-found.png')); ?>"
                                                             alt="">
                                                    </div>
                                                    <h1>
                                                        <?php echo e(__('frontend.No Post Found')); ?>

                                                    </h1>
                                                </div>
                                            </div>
                                        <?php endif; ?>

                                    </div>

                                </div>
                            </div>
                        </div>


                        <?php if($section_course_tab): ?>
                            
                            <div class="tab-pane fade" id="pills-course" role="tabpanel"
                                 aria-labelledby="pills-profile-tab">
                                <?php if($courses->count() > 0): ?>
                                    <div class="courses_area m-0 p-0">
                                        <div class="row row-gap-24">
                                            <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="col-xl-4 col-md-6">
                                                    <div class="course-item">
                                                        <div class="course-item-img">
                                                            <img src="<?php echo e(getCourseImage($course->thumbnail)); ?>"
                                                                 alt="course image">
                                                            <?php if($course->level): ?>
                                                                <span class="course-tag">
                                                                <span>
                                                                    <?php echo e($course->courseLevel->title); ?>

                                                                </span>
                                                            </span>
                                                            <?php endif; ?>
                                                        </div>

                                                        <div class="course-item-info">
                                                            <a class="title"
                                                               href="<?php echo e(courseDetailsUrl(@$course->id,@$course->type,@$course->slug)); ?>">
                                                                <?php echo e($course->title); ?>

                                                            </a>

                                                            <div
                                                                class="d-flex align-itemes-center justify-content-between meta">
                                                                <div class="rating">
                                                                    <svg width="16" height="15" viewBox="0 0 16 15"
                                                                         fill="none"
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
                                                                            <svg width="16" height="18"
                                                                                 viewBox="0 0 16 18" fill="none"
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

                                                            <div
                                                                class="course-item-footer d-flex justify-content-between">
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
                                                                                <img
                                                                                    src="<?php echo e(asset('public/frontend/infixlmstheme/svg/cart.svg')); ?>"
                                                                                    alt="cart">
                                                                            </a>
                                                                        <?php endif; ?>
                                                                    <?php endif; ?>
                                                                    <?php if(auth()->guard()->guest()): ?>
                                                                        <?php if(!$course->isGuestUserCart): ?>
                                                                            <a href="#" class="cart_store"
                                                                               data-id="<?php echo e($course->id); ?>">
                                                                                <img
                                                                                    src="<?php echo e(asset('public/frontend/infixlmstheme/svg/cart.svg')); ?>"
                                                                                    alt="cart">
                                                                            </a>
                                                                        <?php endif; ?>
                                                                    <?php endif; ?>
                                                                <?php endif; ?>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </div>
                                    </div>
                                <?php else: ?>
                                    <?php echo $__env->make(theme('profile._no_data'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                        <?php if($section_instructor_tab): ?>
                            
                            <div class="tab-pane fade" id="pills-instructor" role="tabpanel"
                                 aria-labelledby="pills-contact-tab">
                                <div class="instractors_wrapper p-0 m-0">
                                    <?php if($instructors->count() > 0): ?>
                                        <div class="row">
                                            <?php $__currentLoopData = $instructors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $instructor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="col-md-6 col-lg-4 col-xl-3">
                                                    <div class="single_instractor mb_30">
                                                        <a href="<?php echo e(route('users.profile',$instructor->id)); ?>"
                                                           class="thumb">
                                                            <img
                                                                src="<?php echo e(getProfileImage(@$instructor->image,$instructor->name)); ?>"
                                                                alt="">
                                                        </a>
                                                        <a href="<?php echo e(route('users.profile',$instructor->id)); ?>">
                                                            <h4><?php echo e($instructor->name); ?></h4></a>
                                                        <?php if($instructor->job_title): ?>
                                                            <span><?php echo e(@$instructor->job_title); ?></span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    <?php else: ?>
                                        <?php echo $__env->make(theme('profile._no_data'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if($section_education_tab): ?>
                            <div class="tab-pane fade" id="pills-education" role="tabpanel"
                                 aria-labelledby="pills-contact-tab">
                                <?php if($user->userEducations->count() > 0): ?>
                                    <ul class="list-group list-group-flush">
                                        <?php $__currentLoopData = $user->userEducations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $education): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li class="list-group-item d-flex justify-content-between align-items-center ps-0">
                                                <div>
                                                    <h4 class="mb-1 f_w_600"><?php echo e($education->institution); ?></h4>
                                                    <p class="text-muted f_w_500"><?php echo e($education->degree); ?></p>
                                                    <small
                                                        class="text-muted"><?php echo e(showDate($education->start_date)); ?> <?php if($education->end_date): ?>
                                                            -
                                                        <?php endif; ?> <?php echo e(showDate($education->end_date)); ?></small>
                                                </div>
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                <?php else: ?>
                                    <?php echo $__env->make(theme('profile._no_data'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                        <?php if($section_experience_tab): ?>
                            <div class="tab-pane fade" id="pills-experience" role="tabpanel"
                                 aria-labelledby="pills-contact-tab">
                                <?php if($user->userExperiences->count() > 0): ?>
                                    <ul class="list-group list-group-flush">

                                        <?php $__currentLoopData = $user->userExperiences; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $experience): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li class="list-group-item d-flex justify-content-between align-items-center ps-0">
                                                <div>
                                                    <h4 class="mb-1 f_w_600"><?php echo e($experience->title); ?></h4>
                                                    <p class="text-muted f_w_500"><?php echo e($experience->company_name); ?></p>
                                                    <?php if($experience->duration()): ?>
                                                        <small class="text-muted"><?php echo e(showDate($experience->start_date)); ?>

                                                            - <?php echo e($experience->currently_working?'Present':showDate($experience->end_date)); ?>

                                                            [ <?php echo e($experience->duration()); ?> ]</small>
                                                    <?php endif; ?>
                                                </div>
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                    </ul>
                                <?php else: ?>
                                    <?php echo $__env->make(theme('profile._no_data'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- profile info -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make(theme('layouts.master'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u709483251/domains/infixedulms.madhutechnoworld.in/public_html/resources/views/frontend/infixlmstheme/profile/profile.blade.php ENDPATH**/ ?>