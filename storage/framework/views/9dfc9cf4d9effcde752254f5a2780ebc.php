<div class="tab-pane fade" id="skills_tab">
    <div class="row">
        <div class="col-12">

           <div class="d-flex justify-content-between align-items-center">
               <h3><?php echo e(__('profile.skills')); ?></h3>
               <a href="javascript:void(0)" class="link_value theme_btn small_btn4 add_skills_btn"><?php echo e(__('profile.add_or_update_skills')); ?></a>
           </div>
            <hr>
            <div class="skills_list">
                <?php echo $__env->make(theme('profile.skills.list'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>

        </div>
    </div>
</div>
<?php /**PATH /home/u709483251/domains/infixedulms.madhutechnoworld.in/public_html/resources/views/frontend/infixlmstheme/profile/_skills_tab.blade.php ENDPATH**/ ?>