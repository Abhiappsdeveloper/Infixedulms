<ul class="list-group list-group-flush">
    <?php $__empty_1 = true; $__currentLoopData = $user->userEducations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $education): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <li class="list-group-item d-flex flex-column flex-sm-row gap-3 justify-content-between align-items-start align-items-sm-center px-0">
            <div>
                <h4 class="mb-1"><?php echo e($education->institution); ?></h4>
                <p class="text-muted"><?php echo e($education->degree); ?></p>
                <small class="text-muted"><?php echo e(showDate($education->start_date)); ?>

                    - <?php echo e(showDate($education->end_date)); ?></small>
            </div>
            <div>
                <a data-id="<?php echo e($education->id); ?>" href="javascript:void(0);"
                   class="link_value theme_btn small_btn4 edit_education_btn"><?php echo e(__('common.Edit')); ?></a>
                <a href="<?php echo e(route('users.educations.destroy',$education->id)); ?>"
                   class="link_value theme_btn small_btn4 delete_item"><?php echo e(__('common.Delete')); ?></a>
            </div>

        </li>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <?php echo $__env->make(theme('profile._empty_data_msg'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
</ul>
<?php /**PATH /home/u709483251/domains/infixedulms.madhutechnoworld.in/public_html/resources/views/frontend/infixlmstheme/profile/education/list.blade.php ENDPATH**/ ?>