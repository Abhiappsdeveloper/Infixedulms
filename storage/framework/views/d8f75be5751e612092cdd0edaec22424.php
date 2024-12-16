<div class="accordion" id="faq-section">

    <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button <?php echo e($key==0?'':'collapsed'); ?>" type="button" data-bs-toggle="collapse"
                    data-bs-target="#faq<?php echo e($key); ?>" aria-expanded="<?php echo e($key?"true":"false"); ?>" aria-controls="faq<?php echo e($key); ?>">
                <div class="faq-title">
                    <?php echo e($faq->question); ?>

                </div>
            </button>
        </h2>
        <div id="faq<?php echo e($key); ?>" class="accordion-collapse collapse <?php echo e($key==0?' show':''); ?> " aria-labelledby="faq<?php echo e($key); ?>"
             data-bs-parent="#faq-section">
            <div class="accordion-body">
                <?php echo $faq->answer; ?>

            </div>
        </div>
    </div>


    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php /**PATH /home/u709483251/domains/infixedulms.madhutechnoworld.in/public_html/resources/views/frontend/infixlmstheme/snippets/components/_single_faq_v7.blade.php ENDPATH**/ ?>