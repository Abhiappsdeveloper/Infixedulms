<div class="tab-pane fade" id="extra_info_tab">
    <div class="account_profile_form row">
        <div class="col-12">

            <div class="d-flex justify-content-between align-items-center">
                <h3><?php echo e(__('profile.extra_information')); ?></h3>
            </div>
            <hr>
            <form action="<?php echo e(route('users.extra_info.update')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>

                <div class="row">
                    <div class="col-lg-6 col-md-6 mt_20">
                        <div class="single_input">
                            <span class="primary_label2"><?php echo e(__('common.gender')); ?> </span>
                            <select class="theme_select wide mb_20 rounded-pill"
                                    name="gender" <?php echo e($errors->first('gender') ? 'autofocus' : ''); ?>>
                                <option data-display="<?php echo e(__('common.Select')); ?> <?php echo e(__('common.gender')); ?>"
                                        value=""><?php echo e(__('common.Select')); ?> <?php echo e(__('common.gender')); ?> </option>
                                <option <?php echo e(@$user->gender == 'male' ?'selected':''); ?> value="male">Male</option>
                                <option <?php echo e(@$user->gender == 'female' ?'selected':''); ?> value="female">Female</option>
                                <option <?php echo e(@$user->gender == 'other' ?'selected':''); ?> value="other">Other</option>
                            </select>
                            <span class="text-danger" role="alert"><?php echo e($errors->first('gender')); ?></span>
                        </div>
                    </div>
                    <div class="col-lg-6 mt_20">
                        <label class="primary_label2" for="dob"><?php echo e(__('common.Date of Birth')); ?></label>
                        <input id="dob" name="dob" placeholder="<?php echo e(__('common.Date of Birth')); ?>"
                               class="primary_input datepicker"
                               value="<?php echo e(old('dob')??@$user->dob?date('m/d/Y',strtotime(@$user->dob)):''); ?>" type="text"
                               autocomplete="off" <?php echo e($errors->first('dob') ? 'autofocus' : ''); ?>>
                        <span class="text-danger" id="error_end_date"></span>
                    </div>

                </div>

                <div class="row mt_20">
                    <div class="col-md-12 d-flex align-items-center">
                        <h4 class="mb-0"><?php echo e(__('profile.region')); ?></h4>
                        <div class="custom-hr ms-2 mt-1"></div>


                    </div>
                    <div class="col-md-6 mt_20">
                        <div class="single_input ">
                            <span class="primary_label2"><?php echo e(__('common.Country')); ?> </span>
                            <select id="country" class="theme_select rounded-pill wide mb_20"
                                    name="country" <?php echo e($errors->first('country') ? 'autofocus' : ''); ?>>
                                <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e(@$country->id); ?>"
                                            <?php if(@$user->country==$country->id): ?> selected <?php endif; ?>><?php echo e(@$country->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <span class="text-danger" role="alert"><?php echo e($errors->first('country')); ?></span>
                        </div>
                    </div>
                    <div class="col-md-6 mt_20">
                        <div class="single_input " id="state_div">
                            <span class="primary_label2"><?php echo e(__('common.State')); ?> </span>
                            <select class="wide rounded-pill mb_20 stateList" name="state"
                                    id="state" <?php echo e($errors->first('state') ? 'autofocus' : ''); ?>>
                                <option data-display="<?php echo e(__('common.State')); ?>"
                                        value="#"><?php echo e(__('common.Select')); ?> <?php echo e(__('common.State')); ?></option>
                                <?php $__currentLoopData = $states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e(@$state->id); ?>"
                                            <?php if(@$user->state==$state->id): ?> selected <?php endif; ?>><?php echo e(@$state->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <span class="text-danger" role="alert"><?php echo e($errors->first('state')); ?></span>
                        </div>
                    </div>
                    <div class="col-md-6 mt_20">
                        <div class="single_input " id="city_div">
                            <span class="primary_label2"><?php echo e(__('common.City')); ?>  </span>
                            <select class="rounded-pill wide mb_20 cityList" name="city"
                                    id="city" <?php echo e($errors->first('city') ? 'autofocus' : ''); ?>>
                                <option data-display="<?php echo e(__('common.City')); ?>"
                                        value="#"><?php echo e(__('common.Select')); ?> <?php echo e(__('common.City')); ?></option>
                                <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e(@$city->id); ?>"
                                            <?php if(@$user->city==$city->id): ?> selected <?php endif; ?>><?php echo e(@$city->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <span class="text-danger" role="alert"><?php echo e($errors->first('city')); ?></span>
                        </div>
                    </div>
                    <div class="col-md-6 mt_20">
                        <label class="primary_label2" for="zip"><?php echo e(__('common.Zip Code')); ?>

                        </label>
                        <input id="zip" name="zip" placeholder="<?php echo e(__('common.Zip Code')); ?>"
                               onfocus="this.placeholder = ''"
                               onblur="this.placeholder = '<?php echo e(__('common.Zip Code')); ?>'"
                               class="primary_input rounded-pill" <?php echo e($errors->first('zip') ? 'autofocus' : ''); ?>

                               value="<?php echo e(old('zip')??@$user->zip); ?>" type="text">
                        <span class="text-danger" role="alert"><?php echo e($errors->first('zip')); ?></span>
                    </div>
                    <div class="col-md-6 mt_20">
                        <label class="primary_label2" for="address"><?php echo e(__('common.Address')); ?>

                        </label>
                        <input id="address" name="address" placeholder="<?php echo e(__('common.Address')); ?>"
                               onfocus="this.placeholder = ''"
                               onblur="this.placeholder = '<?php echo e(__('common.Address')); ?>'"
                               class="primary_input rounded-pill" <?php echo e($errors->first('address') ? 'autofocus' : ''); ?>

                               value="<?php echo e(old('address')??@$user->address); ?>" type="text">
                        <span class="text-danger" role="alert"><?php echo e($errors->first('address')); ?></span>
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
<?php /**PATH /home/u709483251/domains/infixedulms.madhutechnoworld.in/public_html/resources/views/frontend/infixlmstheme/profile/_extra_info_tab.blade.php ENDPATH**/ ?>