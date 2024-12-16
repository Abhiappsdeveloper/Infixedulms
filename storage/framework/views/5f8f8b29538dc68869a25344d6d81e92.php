<?php
    $banner = $frontendContent->breadcrumb_page_banner ?? 'public/frontend/infixlmstheme/img/new_bread_crumb_bg.png';
?>
<div>
     <div class="breadcrumb_area"
         style="background-image: url('<?php echo e(asset($banner)); ?>')">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcam_wrap">
                        <h3>
                            <?php echo e(@$title); ?>

                        </h3>
                         <p>
                            <?php echo e(__('frontend.Home')); ?> / <?php echo e($sub_title); ?>

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /home/u709483251/domains/infixedulms.madhutechnoworld.in/public_html/resources/views/frontend/infixlmstheme/components/breadcrumb.blade.php ENDPATH**/ ?>