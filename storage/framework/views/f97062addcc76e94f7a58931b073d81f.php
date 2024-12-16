<div class="tab-pane fade" id="change_password_tab">
    <div class="row">
        <div class="col-12">

            <h3><?php echo e(__('profile.change_password')); ?></h3>
            <hr>
            <form action="<?php echo e(route('updatePassword')); ?>" method="POST">
                <?php echo csrf_field(); ?>

                <div class="row">
                    <div class="col-lg-6">
                        <label class="primary_label2"
                               for="current_password"><?php echo e(__('common.Current')); ?> <?php echo e(__('common.Password')); ?>

                            <span class="required_mark">*</span></label>
                        <input id="current_password" name="current_password"
                               placeholder="<?php echo e(__('common.Current')); ?> <?php echo e(__('common.Password')); ?>"
                               onfocus="this.placeholder = ''"
                               onblur="this.placeholder = '<?php echo e(__('common.Current')); ?> <?php echo e(__('common.Password')); ?>'"
                               class="primary_input" <?php echo e($errors->first('current_password') ? 'autofocus' : ''); ?>

                               type="password">
                        <span class="text-danger" role="alert"><?php echo e($errors->first('current_password')); ?></span>
                    </div>
                </div>

                <div class="row mt_20">
                    <div class="col-lg-6">
                        <label class="primary_label2" for="new_password"><?php echo e(__('common.New')); ?>  <?php echo e(__('common.Password')); ?>

                            <span class="required_mark">*</span></label>
                        <input id="new_password" name="new_password"
                               placeholder="<?php echo e(__('common.New')); ?>  <?php echo e(__('common.Password')); ?>"
                               onfocus="this.placeholder = ''"
                               onblur="this.placeholder = '<?php echo e(__('common.New')); ?>  <?php echo e(__('common.Password')); ?>'"
                               class="primary_input" <?php echo e($errors->first('new_password') ? 'autofocus' : ''); ?>

                               type="password">
                        <span class="text-danger" role="alert"><?php echo e($errors->first('new_password')); ?></span>
                    </div>
                </div>

                <div class="row mt_20">
                    <div class="col-lg-6">
                        <label class="primary_label2" for="confirm_password"><?php echo e(__('common.Re-Type Password')); ?>

                            <span class="required_mark">*</span></label>
                        <input id="confirm_password" name="confirm_password"
                               placeholder="<?php echo e(__('common.Re-Type Password')); ?>"
                               onfocus="this.placeholder = ''"
                               onblur="this.placeholder = '<?php echo e(__('common.Re-Type Password')); ?>'"
                               class="primary_input" <?php echo e($errors->first('confirm_password') ? 'autofocus' : ''); ?>

                               type="password">
                        <span class="text-danger" role="alert"><?php echo e($errors->first('confirm_password')); ?></span>
                    </div>
                </div>


                <div class="row">

                    <div class="col-12 text-end">
                        <hr class="d-block">
                        <button class="theme_btn small_btn text-center" type="submit"><i
                                class="ti-check"></i> <?php echo e(__('common.Save')); ?></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php /**PATH /home/u709483251/domains/infixedulms.madhutechnoworld.in/public_html/resources/views/frontend/infixlmstheme/profile/_change_password_tab.blade.php ENDPATH**/ ?>