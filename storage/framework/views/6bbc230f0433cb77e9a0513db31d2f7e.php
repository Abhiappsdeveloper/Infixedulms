<div data-type="component-text"
     data-preview="<?php echo e(!function_exists('themeAsset')?'':themeAsset('img/snippets/preview/become_instructor_page/join_top_section.jpg')); ?>"
     data-aoraeditor-title="Join top section"
     data-aoraeditor-categories="Become Instructor Page"
>
    <?php
        $joining_part=  $become_instructor->where('id',4)->first();
    ?>
    <style>
        .instructor_cta {
            background-image: url('<?php echo e($joining_part->bg_image); ?>');
            background-size: cover;
            background-position: center center;
        }
    </style>
    <section class="cta_part instructor_cta section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8">
                    <div class="cta_part_iner">
                        <h2><?php echo e($joining_part->title??''); ?></h2>
                        <p> <?php echo e($joining_part->description??''); ?></p>
                        <a href="#" class="theme_btn" data-bs-toggle="modal"
                           data-bs-target="#Instructor">
                            <?php if(!empty($joining_part->btn_name)): ?>
                                <?php echo e($joining_part->btn_name); ?>

                            <?php else: ?>
                                <?php echo e(__('frontendmanage.Become Instructor')); ?>

                            <?php endif; ?>
                        </a>
                        <div data-type="component-nonExisting"
                             data-preview=""
                             data-table=""
                             data-select=""
                             data-order=""
                             data-dir=""
                             data-limit=""
                             data-view="_single_popup_instructor_sign_up"
                             data-model=""
                             data-with=""
                        >
                            <div class="dynamicData"
                                 data-dynamic-href="<?php echo e(routeIsExist('getDynamicData')?route('getDynamicData'):''); ?>"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php /**PATH /home/u709483251/domains/infixedulms.madhutechnoworld.in/public_html/resources/views/frontend/infixlmstheme/snippets/components/_become-instructor-page-join-top.blade.php ENDPATH**/ ?>