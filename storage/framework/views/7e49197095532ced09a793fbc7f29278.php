<div class="tab-pane fade" id="social_tab">
    <div class="row">
        <div class="col-12">

            <div class="d-flex justify-content-between align-items-center">
                <h3><?php echo e(__('profile.social_and_contact')); ?></h3>
            </div>
            <hr>
            <form action="<?php echo e(route('users.social_info.update')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>

                <div class="row">
                    <div class="col-lg-6">
                        <label class="primary_label2" for="facebook"><?php echo e(__('common.Facebook URL')); ?></label>
                        <input id="facebook" name="facebook" placeholder="<?php echo e(__('common.Facebook URL')); ?>"
                               onfocus="this.placeholder = ''"
                               onblur="this.placeholder = '<?php echo e(__('common.Facebook URL')); ?>'"
                               class="primary_input" <?php echo e($errors->first('facebook') ? 'autofocus' : ''); ?>

                               value="<?php echo e(@$user->facebook); ?>" type="text">
                        <span class="text-danger" role="alert"><?php echo e($errors->first('facebook')); ?></span>
                    </div>
                </div>

                <div class="row mt_20">
                    <div class="col-lg-6">
                        <label class="primary_label2" for="twitter"><?php echo e(__('common.Twitter URL')); ?></label>
                        <input id="twitter" name="twitter" placeholder="<?php echo e(__('common.Twitter URL')); ?>"
                               onfocus="this.placeholder = ''"
                               onblur="this.placeholder = '<?php echo e(__('common.Twitter URL')); ?>'"
                               class="primary_input" <?php echo e($errors->first('twitter') ? 'autofocus' : ''); ?>

                               value="<?php echo e(@$user->twitter); ?>" type="text">
                        <span class="text-danger" role="alert"><?php echo e($errors->first('twitter')); ?></span>
                    </div>
                </div>

                <div class="row mt_20">
                    <div class="col-lg-6">
                        <label class="primary_label2" for="linkedin"><?php echo e(__('common.LinkedIn URL')); ?></label>
                        <input id="linkedin" name="linkedin" placeholder="<?php echo e(__('common.LinkedIn URL')); ?>"
                               onfocus="this.placeholder = ''"
                               onblur="this.placeholder = '<?php echo e(__('common.LinkedIn URL')); ?>'"
                               class="primary_input" <?php echo e($errors->first('linkedin') ? 'autofocus' : ''); ?>

                               value="<?php echo e(@$user->linkedin); ?>" type="text">
                        <span class="text-danger" role="alert"><?php echo e($errors->first('linkedin')); ?></span>
                    </div>
                </div>

                <div class="row mt_20">
                    <div class="col-lg-6">
                        <label class="primary_label2" for="instagram"><?php echo e(__('common.Instagram URL')); ?></label>
                        <input id="instagram" name="instagram" placeholder="<?php echo e(__('common.Instagram URL')); ?>"
                               onfocus="this.placeholder = ''"
                               onblur="this.placeholder = '<?php echo e(__('common.Instagram URL')); ?>'"
                               class="primary_input" <?php echo e($errors->first('instagram') ? 'autofocus' : ''); ?>

                               value="<?php echo e(@$user->instagram); ?>" type="text">
                        <span class="text-danger" role="alert"><?php echo e($errors->first('instagram')); ?></span>
                    </div>
                </div>


                <div class="row mt_20">
                    <div class="col-md-12 d-flex align-items-center">
                        <div class="">
                            <h4 class="text-nowrap"><?php echo e(__('profile.Instant_messaging')); ?></h4>
                        </div>
                        <div class="custom-hr ms-2">

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-12 mt-repeater no-extra-space">

                        <div data-repeater-list="instant_messaging">
                            <?php $__currentLoopData = $instant_messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i_msg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div data-repeater-item class="mt-repeater-item">

                                    <div class="mt-repeater-row">

                                        <div class="row mt_20">
                                            <div class="col-lg-4">
                                                <label class="primary_label2" for=""> <?php echo e(__('profile.service')); ?></label>
                                                <input name="service" placeholder="Ex: Skype"
                                                       onfocus="this.placeholder = ''"
                                                       onblur="this.placeholder = 'Ex: Skype'"
                                                       class="primary_input service"
                                                       value="<?php echo e($i_msg->service); ?>" type="text">
                                            </div>

                                            <div class="col-lg-4">
                                                <label class="primary_label2" for=""> <?php echo e(__('profile.username')); ?></label>
                                                <input name="username" placeholder="Ex: jon"
                                                       onfocus="this.placeholder = ''"
                                                       onblur="this.placeholder = 'Ex: jon'"
                                                       class="primary_input username"
                                                       value="<?php echo e($i_msg->username); ?>" type="text">
                                            </div>


                                            <div class="col-lg-1">
                                                <div class="position-relative form-group ">
                                                    <a href="javascript:void(0);" data-repeater-delete
                                                       class="link_value theme_btn small_btn4 mt_32  mt-repeater-delete">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <div data-repeater-item class="mt-repeater-item">

                                <div class="mt-repeater-row">

                                    <div class="row mt_20">

                                        <div class="col-lg-4">
                                            <label class="primary_label2" for=""> <?php echo e(__('profile.service')); ?></label>
                                            <input name="service" placeholder="Ex: Skype"
                                                   onfocus="this.placeholder = ''"
                                                   onblur="this.placeholder = 'Ex: Skype'"
                                                   class="primary_input service"
                                                   type="text">
                                        </div>

                                        <div class="col-lg-4">
                                            <label class="primary_label2" for=""> <?php echo e(__('profile.username')); ?></label>
                                            <input name="username" placeholder="Ex: jon"
                                                   onfocus="this.placeholder = ''"
                                                   onblur="this.placeholder = 'Ex: jon'"
                                                   class="primary_input username"
                                                   type="text">
                                        </div>


                                        <div class="col-lg-1">
                                            <div class="position-relative form-group ">
                                                <a href="javascript:void(0);" data-repeater-delete
                                                   class="link_value theme_btn small_btn4 icon-only  mt_32  mt-repeater-delete">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mt-3">
                                <a href="javascript:void(0);" data-repeater-create
                                   class="link_value theme_btn small_btn4 radius_30px  mt-repeater-add "><i
                                        class="fa fa-plus me-1"></i><?php echo e(__('common.Add More')); ?></a>
                            </div>
                        </div>
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
<?php /**PATH /home/u709483251/domains/infixedulms.madhutechnoworld.in/public_html/resources/views/frontend/infixlmstheme/profile/_social_tab.blade.php ENDPATH**/ ?>