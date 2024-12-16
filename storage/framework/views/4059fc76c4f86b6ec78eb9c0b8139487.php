<style>
    .primary_input {
        border-radius: 30px !important
    }
</style>
<ul class="nav nav-tabs ms-0 mb-3 border-0">
    <li class="nav-item">
        <a class="nav-link active" data-bs-toggle="tab"
           href="#basic_information_tab"><?php echo e(__('profile.basic_information')); ?></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="tab" href="#change_password_tab"><?php echo e(__('profile.change_password')); ?></a>
    </li>
    <?php if(isModuleActive('TwoFA') && Settings('enable_student_two_fa')): ?>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#fa_tab"><?php echo e(__('profile.2FA')); ?></a>
        </li>
    <?php endif; ?>
    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="tab" href="#images_tab"><?php echo e(__('profile.images')); ?></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="tab" href="#about_tab"><?php echo e(__('common.About')); ?></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="tab" href="#education_tab"><?php echo e(__('profile.education')); ?></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="tab" href="#experience_tab"><?php echo e(__('profile.experience')); ?></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="tab" href="#skills_tab"><?php echo e(__('profile.skills')); ?></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="tab" href="#financial_tab"><?php echo e(__('profile.financial')); ?></a>
    </li>

    
    
    

    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="tab" href="#extra_info_tab"><?php echo e(__('profile.extra_information')); ?></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="tab" href="#identity_tab"><?php echo e(__('profile.identity_and_documents')); ?></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="tab" href="#social_tab"><?php echo e(__('profile.social_and_contact')); ?></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="tab" href="#delete_account_tab"><?php echo e(__('profile.delete_account')); ?></a>
    </li>
</ul>
<?php /**PATH /home/u709483251/domains/infixedulms.madhutechnoworld.in/public_html/resources/views/frontend/infixlmstheme/profile/_tab_link.blade.php ENDPATH**/ ?>