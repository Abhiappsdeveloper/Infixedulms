<div class="tab-pane fade" id="experience_tab">
    <div class="row">
        <div class="col-12">

            <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">
                <h3><?php echo e(__('profile.experience')); ?></h3>
                <div class="d-flex align-items-center gap-15">
                    <label data-bs-toggle="tooltip" data-placement="top" title="<?php echo e($show_experience_tooltip); ?>"
                           class="lmsSwitch_toggle  pe-2 " for="autoNext1">
                        <input value="<?php echo e($show_experience?0:1); ?>" class="hide_show_tab" data-filed="show_experience"
                               type="checkbox" id="autoNext1" <?php echo e($show_experience?'checked':""); ?>>
                        <div class="slider round"></div>
                    </label>
                    <a href="javascript:void(0)"
                       class="link_value theme_btn small_btn4 add_experience_btn ms-3"><?php echo e(__('profile.add_experience')); ?></a>
                </div>

            </div>
            <hr>
            <div id="experience_list">
                <?php echo $__env->make(theme('profile.experience.list'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>

        </div>
    </div>
</div>
<?php /**PATH /home/u709483251/domains/infixedulms.madhutechnoworld.in/public_html/resources/views/frontend/infixlmstheme/profile/_experience_tab.blade.php ENDPATH**/ ?>