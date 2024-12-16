<div class="row reward-paginations align-items-center">
    <div class="col-lg-4 col-xl-5 col-xxl-3 d-none d-lg-block">

        <p><?php echo e(__('frontend.Showing')); ?>

            <strong><?php echo e($paginator->firstItem()); ?> - <?php echo e($paginator->lastItem()); ?></strong>
            <?php echo e(__('frontend.from')); ?>

            <strong><?php echo e($paginator->total()); ?></strong> <?php echo e(__('frontend.data')); ?></p>
    </div>
    <div class="col-lg-8 col-xl-7 col-xxl-9">
        <?php if($paginator->hasPages()): ?>
            <ul class="paginations justify-content-center justify-content-lg-end">

                <?php if($paginator->onFirstPage()): ?>
                    <li class="paginations-list disabled"><a href="#" class="paginations-links prev">
                            <img src="<?php echo e(asset('public/frontend/infixlmstheme/svg/pagination_arrow.svg')); ?>" alt="">
                        </a></li>
                <?php else: ?>
                    <li class="paginations-list"><a href="<?php echo e($paginator->previousPageUrl()); ?>" class="prev paginations-links">
                            <img src="<?php echo e(asset('public/frontend/infixlmstheme/svg/pagination_arrow.svg')); ?>" alt="">
                        </a></li>
                <?php endif; ?>


                <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <?php if(is_string($element)): ?>
                        <li class="paginations-list"><a href="#" class="paginations-links "
                                                        aria-current="page"><?php echo e($element); ?></a>
                        </li>
                    <?php endif; ?>



                    <?php if(is_array($element)): ?>
                        <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <?php if($page == $paginator->currentPage()): ?>
                                <li class="paginations-list"><a href="#" class="paginations-links active"
                                                                aria-current="page"><?php echo e($page); ?></a>
                                </li>
                            <?php else: ?>
                                <li class="paginations-list"><a href="<?php echo e($url); ?>" class="paginations-links "
                                                                aria-current="page"><?php echo e($page); ?></a>
                                </li>
                            <?php endif; ?>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                <?php if($paginator->hasMorePages()): ?>
                    <li class="paginations-list"><a href="<?php echo e($paginator->nextPageUrl()); ?>" class="paginations-links next">
                            <img src="<?php echo e(asset('public/frontend/infixlmstheme/svg/pagination_arrow.svg')); ?>" alt="">
                        </a></li>
                <?php else: ?>
                    <li class="paginations-list disabled"><a href="#" class="paginations-links">
                            <img src="<?php echo e(asset('public/frontend/infixlmstheme/svg/pagination_arrow.svg')); ?>" alt="">
                        </a>
                    </li>
                <?php endif; ?>

            </ul>
        <?php endif; ?>
    </div>
</div>
<?php /**PATH /home/u709483251/domains/infixedulms.madhutechnoworld.in/public_html/resources/views/frontend/infixlmstheme/partials/_new_pagination.blade.php ENDPATH**/ ?>