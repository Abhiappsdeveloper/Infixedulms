<?php if($type=='how_to_point'): ?>
    <div class="point-table">
        <ul>
            <?php if(Settings('gamification_point_each_login_status')): ?>
                <li><?php echo e(__('setting.Each login gives')); ?> <?php echo e(Settings('gamification_point_each_login_point')); ?>  <?php echo e(__('setting.Points')); ?></li>
            <?php endif; ?>
            <?php if(Settings('gamification_point_each_unit_complete_status')): ?>
                <li><?php echo e(__('setting.Each unit completion gives')); ?> <?php echo e(Settings('gamification_point_each_unit_complete_point')); ?>    <?php echo e(__('setting.Points')); ?></li>
            <?php endif; ?>
            <?php if(Settings('gamification_point_each_course_complete_status')): ?>
                <li><?php echo e(__('setting.Each course completion gives')); ?> <?php echo e(Settings('gamification_point_each_course_complete_point')); ?>    <?php echo e(__('setting.Points')); ?></li>
            <?php endif; ?>
            <?php if(Settings('gamification_point_each_certificate_status')): ?>
                <li><?php echo e(__('setting.Each certificate gives')); ?> <?php echo e(Settings('gamification_point_each_certificate_point')); ?>    <?php echo e(__('setting.Points')); ?></li>
            <?php endif; ?>
            <?php if(Settings('gamification_point_each_test_complete_status')): ?>
                <li><?php echo e(__('setting.Each successful test completion gives')); ?> <?php echo e(Settings('gamification_point_each_test_complete_point')); ?>    <?php echo e(__('setting.Points')); ?></li>
            <?php endif; ?>
            <?php if(Settings('gamification_point_each_assignment_complete_status')): ?>
                <li><?php echo e(__('setting.Each successful assignment completion gives')); ?> <?php echo e(Settings('gamification_point_each_assignment_complete_point')); ?>    <?php echo e(__('setting.Points')); ?></li>
            <?php endif; ?>
            <?php if(Settings('gamification_point_each_comment_status')): ?>
                <li><?php echo e(__('setting.Each discussion topic or comment gives')); ?> <?php echo e(Settings('gamification_point_each_comment_point')); ?>    <?php echo e(__('setting.Points')); ?></li>
            <?php endif; ?>
        </ul>

        <div class="d-flex justify-content-center actions">
            <button type="button" onclick="loadData('point')" class="theme_btn small_btn4">
                <?php echo e(__('frontend.back')); ?>

            </button>
        </div>
    </div>
<?php elseif($type=='how_to_level'): ?>
    <div class="point-table">
        <ul>
            <?php if(Settings('gamification_level_entry_point_status')): ?>
                <li><?php echo e(__('setting.Upgrade level every')); ?> <?php echo e(Settings('gamification_level_entry_point')); ?>  <?php echo e(__('setting.Points')); ?></li>
            <?php endif; ?>
            <?php if(Settings('gamification_level_entry_complete_status')): ?>
                <li><?php echo e(__('setting.Upgrade level every')); ?> <?php echo e(Settings('gamification_level_entry_complete_point')); ?> <?php echo e(__('setting.completed courses')); ?></li>
            <?php endif; ?>
            <?php if(Settings('gamification_level_entry_badge_status')): ?>
                <li><?php echo e(__('setting.Upgrade level every')); ?> <?php echo e(Settings('gamification_level_entry_badge_point')); ?> <?php echo e(__('setting.badges')); ?></li>
            <?php endif; ?>
        </ul>
        <div class="d-flex justify-content-center actions">
            <button type="button" onclick="loadData('level')" class="theme_btn small_btn4">
                <?php echo e(__('frontend.back')); ?>

            </button>
        </div>
    </div>
<?php elseif($type=='show_badge'): ?>
    <div class="point-table">
        <div class="reward-leader-content">
            <ul>
                <li class="position-relative d-flex gap-2">
                    
                    <div class="reward-leader-item d-flex align-items-center justify-content-between">
                        <div class="reward-leader-profile">
                            <div class="img">
                                <img src="<?php echo e(getProfileImage($student->image,$student->name)); ?>" alt="">
                            </div>
                            <div class="content">
                                <p>   <?php echo e($student->name); ?></p>
                            </div>
                        </div>
                        <div class="reward-leader-content ">
                            <h4>  <?php echo e($student->user_badges_count); ?></h4>
                            <p><?php echo e(__('setting.badges')); ?></p>
                        </div>

                    </div>
                    <div class="reward-leader-position
                            <?php if($student->user_level==1): ?>
                            one
                            <?php elseif($student->user_level==2): ?>
                            two
                            <?php elseif($student->user_level==3): ?>
                            three
                            <?php endif; ?>
                            ">
                        <?php echo e($student->user_level); ?>

                    </div>
                </li>

            </ul>
        </div>

        <div class="point-table-inner d-flex flex-wrap align-items-center">
            <?php $__currentLoopData = $student->userBadges; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $badgeType=$item->badge->type;
                    if ($badgeType=='activity'){
                        $badgeType= trans('setting.logins');
                    }  elseif ($badgeType=='learning'){
                        $badgeType= trans('setting.completed courses');
                    }  elseif ($badgeType=='learning'){
                        $badgeType= trans('setting.completed courses');
                    }  elseif ($badgeType=='test'){
                        $badgeType= trans('setting.passed tests');
                    } elseif ($badgeType=='perfectionism'){
                        $badgeType= trans('setting.Perfectionism badges');
                    }elseif ($badgeType=='perfectionism'){
                        $badgeType= trans('setting.Perfectionism badges');
                    }elseif ($badgeType=='communication'){
                        $badgeType= trans('setting.communication');
                    }elseif ($badgeType=='certification'){
                        $badgeType= trans('setting.certification');
                    }elseif ($badgeType=='certification'){
                        $badgeType= trans('setting.certification');
                    }elseif ($badgeType=='assignment'){
                        $badgeType= trans('setting.assignment');
                    }elseif ($badgeType=='survey'){
                        $badgeType= trans('setting.survey');
                    }elseif ($badgeType=='forum'){
                        $badgeType= trans('setting.forum');
                    }
                ?>
                <img src="<?php echo e(asset($item->badge->image)); ?>" alt="<?php echo e($item->badge->title); ?>" class="badge-img"
                     data-bs-toggle="tooltip"
                     data-placement="top"
                     title="<?php echo e(ucfirst($item->badge->type)); ?> <?php echo e($item->badge->title); ?> (<?php echo e($item->badge->point); ?> <?php echo e($badgeType); ?>)">
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <div class="d-flex justify-content-center actions">
            <button type="button" onclick="loadData('badge')" class="theme_btn small_btn4">
                <?php echo e(__('frontend.back')); ?>

            </button>
        </div>
    </div>
<?php else: ?>
    <?php if($type=='point' && Settings('gamification_leaderboard_filter_status')==1 && $modal==0): ?>
        <div class="leaderboardFilter d-flex gap-10 ">
            <?php if(Settings('gamification_leaderboard_filter_course_level_status')==1): ?>
                <select name="leaderboard_filter_course_level" id="leaderboard_filter_course_level" class="nice_Select leaderboard_filter"
                        onchange="">
                    <option value=""><?php echo e(__('common.All')); ?> <?php echo e(__('common.Levels')); ?></option>
                    <?php $__currentLoopData = $course_levels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $level): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($level->id); ?>" <?php echo e(request()->get('level')==$level->id?'selected':''); ?>><?php echo e($level->title); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            <?php endif; ?>
            <?php if(Settings('gamification_leaderboard_filter_class_status')==1): ?>

                <select name="leaderboard_filter_class" id="leaderboard_filter_class" class="nice_Select leaderboard_filter"
                        onchange="">
                    <option value=""><?php echo e(__('common.All')); ?> <?php echo e(__("courses.Courses")); ?></option>
                    <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($course->id); ?>" <?php echo e(request()->get('course')==$course->id?'selected':''); ?>><?php echo e($course->title); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            <?php endif; ?>
            <?php if(Settings('gamification_leaderboard_filter_institute_status')==1): ?>
                <select name="leaderboard_filter_institute" id="leaderboard_filter_institute" class="nice_Select leaderboard_filter"
                        onchange="">
                    <option value=""><?php echo e(__('common.All')); ?> <?php echo e(__('common.Institutes')); ?></option>
                    <?php $__currentLoopData = $institutes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $institute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($institute->id); ?>" <?php echo e(request()->get('institute')==$institute->id?'selected':''); ?>> <?php echo e($institute->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            <?php endif; ?>
        </div>
    <?php endif; ?>

    <div class="point-table">
        <div class="point-table-body overflow-auto">
            <div class="reward-leader-content">
                <?php
                    $i=1;
                     $pre_point=0;
                     $point=0;
                    if (count($students)!=0){
                        if($type=='certificate'){
                        $pre_point =$students[0]->certificate_records_count;
                        }elseif($type=='courses'){
                        $pre_point =$students[0]->student_courses_count;
                        } elseif($type=='badge'){
                        $pre_point =$students[0]->user_badges_count;
                        } elseif($type=='level')
                        $pre_point =$students[0]->user_level;
                        elseif($type=='point'){
                        $pre_point =$students[0]->gamification_total_points;
                        }
                    }



                ?>
                <ul>


                    <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                            $point =0;
                            if($type=='certificate'){
                            $point =$student->certificate_records_count;
                            }elseif($type=='courses'){
                            $point = $student->student_courses_count;
                            } elseif($type=='badge'){
                            $point =$student->user_badges_count;
                            } elseif($type=='level')
                            $point = $student->user_level;
                            elseif($type=='point'){
                            $point = $student->gamification_total_points;
                            }
                            if ($pre_point>$point){
                                $i++;
                                $pre_point=$point;
                                }

                            if ($point==0){
                                continue;
                            }
                        ?>


                        <li class="position-relative d-flex gap-2">
                            
                            <div class="reward-leader-item d-flex align-items-center justify-content-between">
                                <div class="reward-leader-profile">
                                    <div class="img">
                                        <img src="<?php echo e(getProfileImage($student->image,$student->name)); ?>" alt="">
                                    </div>
                                    <div class="content">
                                        <p>   <?php echo e($student->name); ?></p>
                                    </div>
                                </div>
                                <div class="reward-leader-content  <?php if($type=='badge'): ?> reward-click-btn <?php endif; ?>"
                                     <?php if($type=='badge'): ?> onclick="loadData('show_badge',<?php echo e($student->id); ?>)" <?php endif; ?>>
                                    <h4>  <?php echo e($point); ?></h4>
                                    <?php if(!$modal): ?>
                                        <p><?php echo e(__('setting.'.pluralize($point,ucfirst($type=='courses'?'course':$type)))); ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="reward-leader-position
                            <?php if($i==1): ?>
                            one
                            <?php elseif($i==2): ?>
                            two
                            <?php elseif($i==3): ?>
                            three
                            <?php endif; ?>
                            ">
                                <?php echo e($i); ?>

                            </div>

                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>

        </div>
        <?php if($modal==0): ?>
            <?php if($type=='point'): ?>
                <div class="d-flex justify-content-center actions">
                    <button type="button" onclick="loadData('how_to_point')" class="theme_btn small_btn4">
                        <?php echo e(__('frontend.How to collect points')); ?>

                    </button>
                </div>
            <?php elseif($type=='level'): ?>
                <div class="d-flex justify-content-center actions">
                    <button type="button" onclick="loadData('how_to_level')" class="theme_btn small_btn4">
                        <?php echo e(__('frontend.How to level up')); ?>

                    </button>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    </div>
<?php endif; ?>
<script>
    $(function () {
        $('[data-bs-toggle="tooltip"]').tooltip()
    })
    <?php if($type=='point' && Settings('gamification_leaderboard_filter_status')==1): ?>
    $('.nice_Select').niceSelect();

    <?php endif; ?>

</script>
<?php /**PATH /home/u709483251/domains/infixedulms.madhutechnoworld.in/public_html/resources/views/frontend/infixlmstheme/partials/_leaderboard.blade.php ENDPATH**/ ?>