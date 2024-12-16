<div data-type="component-text"
     data-preview="<?php echo e(!function_exists('themeAsset')?'':themeAsset('img/snippets/preview/home/homepage_instructor_section.jpg')); ?>"
     data-aoraeditor-title="HomePage Instructor Section" data-aoraeditor-categories="Home Page">
    <div class="cta_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-1">
                    <div class="section__title white_text">
                        <h3 class="large_title">
                            <?php echo e(@$homeContent->instructor_title); ?>


                        </h3>
                        <p>

                            <?php echo e(@$homeContent->instructor_sub_title); ?>

                        </p>
                        <a href="<?php echo e(route('instructors')); ?>"
                           class="theme_btn"><?php echo e(__('frontend.Find Our Instructor')); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /home/u709483251/domains/infixedulms.madhutechnoworld.in/public_html/resources/views/frontend/infixlmstheme/snippets/components/_home_page_instructor_section.blade.php ENDPATH**/ ?>