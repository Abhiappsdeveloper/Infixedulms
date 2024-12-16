<div class="row">
    <div class="col-lg-6 col-md-6">
        <?php if(isset($result )): ?>
            <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($key==0): ?>
                    <div class="category_wiz mb_30">
                        <div class="thumb cat1"
                             style="background-image: url('<?php echo e(asset($category->thumbnail)); ?>')">
                            <a href="<?php echo e(route('courses')); ?>?category_id[]=<?php echo e($category->id); ?>"
                               class="cat_btn"><?php echo e($category->name); ?></a>
                        </div>
                    </div>
                    <a href="<?php echo e(route('courses')); ?>"
                       class="brouse_cat_btn ">
                        <?php echo e(__('frontend.Browse all of other categories')); ?>

                    </a>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </div>

    <div class="col-lg-6 col-md-6">
        <?php if(isset($result )): ?>
            <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <?php if($key==1): ?>
                    <div class="category_wiz mb_30">
                        <div class="thumb cat2"
                             style="background-image: url('<?php echo e(asset($category->thumbnail)); ?>')">
                            <a href="<?php echo e(route('courses')); ?>?category_id[]=<?php echo e($category->id); ?>"
                               class="cat_btn"><?php echo e($category->name); ?></a>
                        </div>
                    </div>
                <?php elseif($key==2): ?>
                    <div class="category_wiz mb_30">
                        <div class="thumb  cat3"
                             style="background-image: url('<?php echo e(asset($category->thumbnail)); ?>')">
                            <a href="<?php echo e(route('courses')); ?>?category_id[]=<?php echo e($category->id); ?>"
                               class="cat_btn"><?php echo e($category->name); ?></a>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </div>


</div>
<?php /**PATH /home/u709483251/domains/infixedulms.madhutechnoworld.in/public_html/resources/views/frontend/infixlmstheme/snippets/components/_single_category_browse.blade.php ENDPATH**/ ?>