<div class="tab-pane fade" id="financial_tab">
    <div class="account_profile_form row">
        <div class="col-12">

            <div class="d-flex justify-content-between align-items-center">
                <h3><?php echo e(__('profile.financial')); ?></h3>
            </div>
            <hr>
            <form action="<?php echo e(route('users.finance.account')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>

                <div class="row">
                    <div class="col-lg-6 col-md-6 mt_20">
                        <div class="single_input ">
                            <span class="primary_label2"><?php echo e(__('profile.account_type')); ?> </span>
                            <select class="theme_select wide mb_20"
                                    name="account_type"
                                    <?php echo e($errors->first('account_type') ? 'autofocus' : ''); ?> id="account_type">
                                <option value=""> <?php echo e(__('profile.select_one')); ?></option>
                                <?php $__currentLoopData = $payout_accounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payout_account): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option
                                        <?php echo e(@$user->userPayoutAccount->payout_accounts_id == $payout_account->id ?'selected':""); ?> value="<?php echo e($payout_account->id); ?>"><?php echo e($payout_account->title); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <span class="text-danger" role="alert"><?php echo e($errors->first('account_type')); ?></span>
                        </div>

                    </div>
                </div>


                <div id="payout_data_div">

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
<?php /**PATH /home/u709483251/domains/infixedulms.madhutechnoworld.in/public_html/resources/views/frontend/infixlmstheme/profile/_financial_tab.blade.php ENDPATH**/ ?>