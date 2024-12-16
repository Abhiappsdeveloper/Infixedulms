
<?php $__env->startSection('title'); ?>
    <?php echo e(Settings('site_title') ? Settings('site_title') : 'Infix LMS'); ?> |
    <?php if(routeIs('myClasses')): ?>
        <?php echo e(__('courses.Live Class')); ?>

    <?php elseif(routeIs('myQuizzes')): ?>
        <?php echo e(__('courses.My Quizzes')); ?>

    <?php else: ?>
        <?php echo e(__('courses.My Courses')); ?>

    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <style>
        .course_less_students {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .course_less_students a {
            margin: 0 !important;
        }

        .course_less_students .cpd {
            cursor: pointer;
            color: var(--system_primery_color) !important;
        }

        .modal-header {
            align-items: center;
        }

        .modal .close {
            font-size: 16px;
            transition: all .3s ease-in-out;
            margin-top: 0px;
        }

        /*.modal .close:hover {*/
        /*    color: var(--system_primery_color);*/
        /*}*/

        .theme_btn.bg-transparent {
            border-color: var(--system_primery_color);
            color: var(--system_primery_color);
        }

        .theme_btn.bg-transparent:hover {
            background-color: var(--system_primery_color) !important;
            color: #ffffff;
        }

        .input-control label {
            color: var(--system_secendory_color);
            display: block;
            margin-bottom: 10px;
        }

        .modal-body .nice-select {
            width: 100%;
            position: relative;
            border-radius: 4px;
        }

        .modal-body .nice-select .list {
            padding: 0px;
        }

        .modal-body .nice-select::after,
        .modal-body .nice-select .nice-select-search-box {
            display: none;
        }

        .modal-body .nice-select::before {
            content: "\e64b";
            font-family: 'themify';
            font-size: 14px;
            position: absolute;
            top: 50%;
            right: 15px;
            transform: translateY(-50%);
            transition: all .3s ease-in-out;
        }

        .modal-body .nice-select.open::before {
            content: "\e648";
            transition: all .3s ease-in-out;
        }

        .mntop {
            margin-top: 100px;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(asset('public/frontend/infixlmstheme/js/my_course.js')); ?>"></script>

    <script>
        $(document).ready(function () {
            $(document).on('click', '.cpdValue', function () {
                let course_id = $(this).data('course_id');
                $('#cpd_course_id').val(course_id);
            })
        })
    </script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('mainContent'); ?>
    <?php if (isset($component)) { $__componentOriginal7ad0c6bb7481c25ee3223b28b9a9035e = $component; } ?>
<?php $component = App\View\Components\MyCoursesPageSection::resolve(['request' => $request] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('my-courses-page-section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\MyCoursesPageSection::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7ad0c6bb7481c25ee3223b28b9a9035e)): ?>
<?php $component = $__componentOriginal7ad0c6bb7481c25ee3223b28b9a9035e; ?>
<?php unset($__componentOriginal7ad0c6bb7481c25ee3223b28b9a9035e); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(theme('layouts.dashboard_master'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u709483251/domains/infixedulms.madhutechnoworld.in/public_html/resources/views/frontend/infixlmstheme/pages/myCourses.blade.php ENDPATH**/ ?>