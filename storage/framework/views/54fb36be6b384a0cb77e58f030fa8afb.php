
<?php if($user->userSkill && $user->userSkill->skills): ?>
    <?php $__currentLoopData = explode(',',$user->userSkill->skills); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <button><?php echo e($skill); ?></button>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php else: ?>
    <?php echo $__env->make(theme('profile._empty_data_msg'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>
<?php /**PATH /home/u709483251/domains/infixedulms.madhutechnoworld.in/public_html/resources/views/frontend/infixlmstheme/profile/skills/list.blade.php ENDPATH**/ ?>