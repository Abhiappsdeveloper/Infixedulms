<ul class="Check_sidebar">
    <?php if(isset($result)): ?>
        <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
                $hasItem=is_array(request('user_id'));
                if ($hasItem){
                    $users =request('user_id');
                }
            ?>
            <li>
                <label class="primary_checkbox d-flex">
                    <input type="checkbox" class="instructor"
                           value="<?php echo e($user->id); ?>"
                    <?php if($hasItem): ?>
                        <?php echo e(in_array($user->id,$users)?'checked':''); ?>

                        <?php endif; ?>
                    >
                    <span class="checkmark mr_15"></span>
                    <span class="label_name"><?php echo e($user->name); ?></span>
                </label>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>

</ul>
<?php /**PATH /home/u709483251/domains/infixedulms.madhutechnoworld.in/public_html/resources/views/frontend/infixlmstheme/snippets/components/_single_sidebar_instructor.blade.php ENDPATH**/ ?>