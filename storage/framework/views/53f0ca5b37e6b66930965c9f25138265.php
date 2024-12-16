<div class="row">
    <div class="col-12">
        <div class="">
            <h4 class="text-nowrap"><?php echo e(__('profile.zoom_api')); ?></h4>
        </div>
        <div class="custom-hr">
        </div>
    </div>
    <div class="col-lg-12">
        <form action="<?php echo e(route('users.zoom.settings.update')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>

            <div class="row mt_20">
                <div class="col-lg-6">
                    <label class="primary_label2" for="zoom_account_id"><?php echo e(__('zoom.Account ID')); ?>

                        <span class="required_mark">*</span></label>
                    <input id="zoom_account_id" name="zoom_account_id" placeholder="<?php echo e(__('zoom.Account ID')); ?>"
                           onfocus="this.placeholder = ''"
                           onblur="this.placeholder = '<?php echo e(__('zoom.Account ID')); ?>'"
                           class="primary_input" <?php echo e($errors->first('zoom_account_id') ? 'autofocus' : ''); ?>

                           value="<?php echo e(old('zoom_account_id')??@$zoom_settings->zoom_account_id); ?>" type="text">
                    <span class="text-danger" role="alert"><?php echo e($errors->first('zoom_account_id')); ?></span>
                </div>
            </div>

            <div class="row mt_20">
                <div class="col-lg-6">
                    <label class="primary_label2" for="zoom_client_id"><?php echo e(__('zoom.Client ID')); ?>

                        <span class="required_mark">*</span></label>
                    <input id="zoom_client_id" name="zoom_client_id" placeholder="<?php echo e(__('zoom.Client ID')); ?>"
                           onfocus="this.placeholder = ''"
                           onblur="this.placeholder = '<?php echo e(__('zoom.Client ID')); ?>'"
                           class="primary_input" <?php echo e($errors->first('zoom_client_id') ? 'autofocus' : ''); ?>

                           value="<?php echo e(old('zoom_client_id')??@$zoom_settings->zoom_client_id); ?>" type="text">
                    <span class="text-danger" role="alert"><?php echo e($errors->first('zoom_client_id')); ?></span>
                </div>
            </div>

            <div class="row mt_20">
                <div class="col-lg-6">
                    <label class="primary_label2" for="zoom_client_secret"><?php echo e(__('zoom.Client secret')); ?>

                        <span class="required_mark">*</span></label>
                    <input id="zoom_client_secret" name="zoom_client_secret" placeholder="<?php echo e(__('zoom.Client secret')); ?>"
                           onfocus="this.placeholder = ''"
                           onblur="this.placeholder = '<?php echo e(__('zoom.Client secret')); ?>'"
                           class="primary_input" <?php echo e($errors->first('zoom_client_secret') ? 'autofocus' : ''); ?>

                           value="<?php echo e(old('zoom_client_secret')??@$zoom_settings->zoom_client_secret); ?>" type="text">
                    <span class="text-danger" role="alert"><?php echo e($errors->first('zoom_client_secret')); ?></span>
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
<?php /**PATH /home/u709483251/domains/infixedulms.madhutechnoworld.in/public_html/resources/views/frontend/infixlmstheme/profile/api/_zoom.blade.php ENDPATH**/ ?>