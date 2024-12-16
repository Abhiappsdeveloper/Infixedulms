<div class="tab-pane fade" id="about_tab">
    <div class="row">
        <div class="col-12">

            <h3><?php echo e(__('common.About')); ?></h3>
            <hr>
            <form action="<?php echo e(route('users.about.update')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="row">
                    <div class="col-lg-8">
                        <label class="primary_label2" for="job_title"><?php echo e(__('profile.job_title')); ?>

                        </label>
                        <input id="job_title" name="job_title" placeholder=""
                               onfocus="this.placeholder = ''"
                               onblur="this.placeholder = 'Ex: Sales Manager, Software Engineer'"
                               class="primary_input" <?php echo e($errors->first('job_title') ? 'autofocus' : ''); ?>

                               value="<?php echo e(old('job_title')??@$user->job_title); ?>" type="text">
                        <span class="text-danger" role="alert"><?php echo e($errors->first('job_title')); ?></span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-8 mt_20">
                        <div class="single_input mb_25">
                            <label class="primary_label2"
                                   for=""><?php echo e(__('profile.short_description')); ?>

                            </label>
                            <textarea
                                placeholder=""
                                name="short_description"
                                class="primary_textarea gray_input short_description_field"><?php echo e(old("short_description")??@$user->userInfo->short_description); ?></textarea>
                            <small style="color: var(--system_primery_color)">"<?php echo e(__('profile.short_description')); ?>

                                " <?php echo e(__("profile.will be displayed at the bottom of your name on the profile cards. Keep it short (80 to 100 words)")); ?>

                                . <span class="short_description_character_count text-danger"></span></small>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-8 mt_20 mb-3">
                        <label class="primary_label2"><?php echo e(__('profile.biography')); ?></label>
                        <textarea name="about" class="primary_textarea4 mb_20"
                                  placeholder="<?php echo e(__('student.Write Note here')); ?>"
                                  onfocus="this.placeholder = ''"
                                  onblur="this.placeholder = '<?php echo e(__('student.Write Note here')); ?>'">
                             <?php if(old('about')): ?>
                                <?php echo e(old('about')); ?>

                            <?php else: ?>
                                <?php echo @$user->about !=""? @$user->about:old('about'); ?>

                            <?php endif; ?>

                        </textarea>
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
<?php /**PATH /home/u709483251/domains/infixedulms.madhutechnoworld.in/public_html/resources/views/frontend/infixlmstheme/profile/_about_tab.blade.php ENDPATH**/ ?>