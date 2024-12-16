<div data-type="component-text"
     data-preview="<?php echo e(!function_exists('themeAsset')?'':themeAsset('img/snippets/preview/become_instructor_page/join_bottom_section.jpg')); ?>"
     data-aoraeditor-title="Join Bottom section"
     data-aoraeditor-categories="Become Instructor Page"
>
    <?php
        $cta_part=  $become_instructor->where('id',5)->first();
    ?>
    <section class="cta_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="cta_part_iner">
                        <h2><?php echo e($cta_part->title); ?></h2>
                        <p><?php echo e($cta_part->description); ?></p>
                        <?php if(Settings('instructor_reg') ==1): ?>
                            <a href="#" class="theme_btn" data-bs-toggle="modal"
                               data-bs-target="#Instructor">
                                <?php echo e(__('frontendmanage.Become Instructor')); ?>

                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php /**PATH /home/u709483251/domains/infixedulms.madhutechnoworld.in/public_html/resources/views/frontend/infixlmstheme/snippets/components/_become-instructor-page-join-bottom.blade.php ENDPATH**/ ?>