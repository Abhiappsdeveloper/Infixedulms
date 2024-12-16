<ul class="Check_sidebar">
    <?php if(isset($result)): ?>
        <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <?php
                $hasItem=is_array(request('level'));
                if ($hasItem){
                    $levels =request('level');
                }
            ?>
            <li>
                <label class="primary_checkbox d-flex">
                    <input name="level" type="checkbox" value="<?php echo e($l->id); ?>"
                           class="level"
                    <?php if($hasItem): ?>
                        <?php echo e(in_array($l->id,$levels)?'checked':''); ?>

                        <?php endif; ?>
                       >
                    <span class="checkmark mr_15"></span>
                    <span class="label_name"><?php echo e($l->title); ?></span>
                </label>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
</ul>
<?php /**PATH /home/u709483251/domains/infixedulms.madhutechnoworld.in/public_html/resources/views/frontend/infixlmstheme/snippets/components/_single_sidebar_level.blade.php ENDPATH**/ ?>