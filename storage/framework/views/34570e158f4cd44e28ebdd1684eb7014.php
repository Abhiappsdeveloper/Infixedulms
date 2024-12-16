<div class="barnd_wrapper brand_active owl-carousel">
    <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sponsor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="single_brand">
            <img src="<?php echo e(asset($sponsor->image)); ?>" alt="<?php echo e($sponsor->title); ?>">
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php /**PATH /home/u709483251/domains/infixedulms.madhutechnoworld.in/public_html/resources/views/frontend/infixlmstheme/snippets/components/_single_sponsor.blade.php ENDPATH**/ ?>