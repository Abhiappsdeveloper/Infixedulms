<div class="tab-pane active" id="basic_information_tab">
    <div class="account_profile_form row">
        <div class="col-12">

            <h3><?php echo e(__('profile.basic_information')); ?></h3>
            <hr>

            <form action="<?php echo e(route('users.basic_info.update')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="row">
                    <div class="col-md-6 mt_20">
                        <label class="primary_label2" for="first_name"><?php echo e(__('common.First')); ?> <?php echo e(__('common.Name')); ?>

                            <span class="required_mark">*</span></label>
                        <input id="first_name" name="first_name" placeholder="<?php echo e(__('common.Name')); ?>"
                               onfocus="this.placeholder = ''"
                               onblur="this.placeholder = '<?php echo e(__('common.Name')); ?>'"
                               class="primary_input" <?php echo e($errors->first('first_name') ? 'autofocus' : ''); ?>

                               value="<?php echo e(old('first_name',$user->first_name)); ?>" type="text">
                        <span class="text-danger" role="alert"><?php echo e($errors->first('first_name')); ?></span>
                    </div>

                    <div class="col-md-6 mt_20">
                        <label class="primary_label2" for="last_name"><?php echo e(__('common.Last')); ?> <?php echo e(__('common.Name')); ?>

                        </label>
                        <input id="last_name" name="last_name" placeholder="<?php echo e(__('common.Name')); ?>"
                               onfocus="this.placeholder = ''"
                               onblur="this.placeholder = '<?php echo e(__('common.Name')); ?>'"
                               class="primary_input" <?php echo e($errors->first('name') ? 'autofocus' : ''); ?>

                               value="<?php echo e(old('last_name',$user->last_name)); ?>" type="text">
                        <span class="text-danger" role="alert"><?php echo e($errors->first('last_name')); ?></span>
                    </div>

                    <div class="col-md-6 mt_20">
                        <label class="primary_label2" for="name"><?php echo e(__('common.Name')); ?>

                            <span class="required_mark">*</span></label>
                        <input id="name" name="name" placeholder="<?php echo e(__('common.Name')); ?>"
                               onfocus="this.placeholder = ''"
                               onblur="this.placeholder = '<?php echo e(__('common.Name')); ?>'" readonly
                               class="primary_input" <?php echo e($errors->first('name') ? 'autofocus' : ''); ?>

                               value="<?php echo e(old('name',$user->name)); ?>" type="text">
                        <span class="text-danger" role="alert"><?php echo e($errors->first('name')); ?></span>
                    </div>
                    <div class="col-md-6 mt_20">
                        <label class="primary_label2" for="email"><?php echo e(__('common.Email')); ?>

                            <span class="required_mark">*</span></label>
                        <input id="email" name="email" placeholder="<?php echo e(__('common.Email')); ?>"
                               onfocus="this.placeholder = ''"
                               onblur="this.placeholder = '<?php echo e(__('common.Email')); ?>'"
                               class="primary_input" <?php echo e($errors->first('email') ? 'autofocus' : ''); ?>

                               value="<?php echo e(old("email")??@$user->email); ?>" type="email">
                        <span class="text-danger" role="alert"><?php echo e($errors->first('email')); ?></span>
                    </div>
                    <div class="col-md-6 mt_20">
                        <label class="primary_label2" for="phone"><?php echo e(__('common.Phone')); ?>

                            <small>(<?php echo e(__('profile.With Country Code without plus')); ?>

                                )</small>
                            <span class="required_mark">*</span></label>
                        <input id="phone" name="phone" placeholder="<?php echo e(__('common.Phone')); ?>"
                               onfocus="this.placeholder = ''"
                               onblur="this.placeholder = '<?php echo e(__('common.Phone')); ?>'"
                               class="primary_input" <?php echo e($errors->first('phone') ? 'autofocus' : ''); ?>

                               value="<?php echo e(old("phone")??@$user->phone); ?>" type="text">
                        <span class="text-danger" role="alert"><?php echo e($errors->first('phone')); ?></span>
                    </div>

                    <div class="col-md-6 mt_20">
                        <label class="primary_label2" for="identification_number"><?php echo e(__('common.identification_number')); ?>

                        </label>
                        <input id="identification_number" name="identification_number"
                               class="primary_input" <?php echo e($errors->first('identification_number') ? 'autofocus' : ''); ?>

                               value="<?php echo e(old('identification_number',$user->identification_number)); ?>" type="text">
                        <span class="text-danger" role="alert"><?php echo e($errors->first('identification_number')); ?></span>
                    </div>
                    <div class="col-md-6 mt_20">
                        <div class="single_input ">
                            <span class="primary_label2"><?php echo e(__('common.Currency')); ?>  </span>
                            <select class="theme_select wide mb_20"
                                    name="currency" <?php echo e($errors->first('currency') ? 'autofocus' : ''); ?>>
                                <option value=""> <?php echo e(__('profile.select_one')); ?></option>
                                <?php $__currentLoopData = $currencies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $currency): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option
                                        value="<?php echo e(@$currency->id); ?>"
                                        <?php if(old('currency')): ?>
                                            <?php if(old('currency')==$currency->id): ?> selected <?php endif; ?>
                                        <?php else: ?>
                                            <?php if(@$user->currency_id==$currency->id): ?> selected <?php endif; ?>
                                        <?php endif; ?>>
                                        <?php echo e(@$currency->name); ?> (<?php echo e($currency->code); ?>)
                                    </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <span class="text-danger" role="alert"><?php echo e($errors->first('currency')); ?></span>
                        </div>

                    </div>
                    <div class="col-md-6 mt_20">
                        <div class="single_input ">
                            <span class="primary_label2"><?php echo e(__('common.Language')); ?>  </span>
                            <select class="theme_select wide mb_20"
                                    name="language" <?php echo e($errors->first('language') ? 'autofocus' : ''); ?>>
                                <option value=""> <?php echo e(__('profile.select_one')); ?></option>
                                <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e(@$language->id); ?>"
                                            <?php if(old('language')): ?>
                                                <?php if(old('language')==$language->id): ?> selected <?php endif; ?>
                                            <?php else: ?>
                                                <?php if(@$user->language_id==$language->id): ?> selected <?php endif; ?>
                                        <?php endif; ?>>
                                        <?php echo e(@$language->native); ?>

                                    </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <span class="text-danger" role="alert"><?php echo e($errors->first('language')); ?></span>
                        </div>

                    </div>
                    <div class="col-md-6 mt_20">
                        <div class="single_input ">
                            <span class="primary_label2"><?php echo e(__('profile.timezone')); ?>  </span>
                            <select class="theme_select wide mb_20"
                                    name="timezone" <?php echo e($errors->first('timezone') ? 'autofocus' : ''); ?>>
                                <option value=""> <?php echo e(__('profile.select_one')); ?></option>
                                <?php $__currentLoopData = $timezones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $timezone): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e(@$timezone->id); ?>"
                                            <?php if(old('timezone')): ?>
                                                <?php if(old('timezone')==$timezone->id): ?> selected <?php endif; ?>
                                            <?php else: ?>
                                                <?php if(@$user->userInfo->timezone_id == $timezone->id): ?> selected <?php endif; ?>
                                        <?php endif; ?>>
                                        <?php echo e(@$timezone->code); ?>

                                    </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <span class="text-danger" role="alert"><?php echo e($errors->first('timezone')); ?></span>
                        </div>

                    </div>
                    <div class="col-12 text-end">
                        <hr class="d-block">
                        <button class="theme_btn small_btn text-center" type="submit"><i
                                class="ti-check me-1"></i> <?php echo e(__('common.Save')); ?></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $(document).on('input', '#first_name, #last_name', function () {
                let first_name = $('#first_name').val();
                let last_name = $('#last_name').val();
                let name = first_name + ' ' + last_name;
                $('#name').val(name);
            })

        })
    </script>
</div>
<?php /**PATH /home/u709483251/domains/infixedulms.madhutechnoworld.in/public_html/resources/views/frontend/infixlmstheme/profile/_basic_information_tab.blade.php ENDPATH**/ ?>