<div data-type="component-text"
     data-preview="<?php echo e(!function_exists('themeAsset')?'':themeAsset('img/snippets/preview/home/homepage_course_section.jpg')); ?>"
     data-aoraeditor-title="HomePage Course Section" data-aoraeditor-categories="Home Page">

    <div class="course_area section_spacing">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section__title text-center mb_80">
                        <h3>
                            <?php echo e(@$homeContent->course_title); ?>

                        </h3>
                        <p>
                            <?php echo e(@$homeContent->course_sub_title); ?>

                        </p>
                    </div>
                </div>
            </div>

            <div data-type="component-nonExisting"
                 data-preview=""
                 data-table=""
                 data-select="id,type,slug,title,thumbnail,price,discount_price,mode_of_delivery"
                 data-order="total_enrolled"
                 data-dir="desc"
                 data-limit="4"
                 data-where-type="1"
                 data-where-status="1"
                 data-view="_single_home_page_course"
                 data-model="Modules\CourseSetting\Entities\Course"
                 data-with="lessons"
            >
                <div class="dynamicData"
                     data-dynamic-href="<?php echo e(routeIsExist('getDynamicData')?route('getDynamicData'):''); ?>"></div>
            </div>

            <div class="row">
                <div class="col-12 text-center pt_70">
                    <a href="<?php echo e(route('courses')); ?>"
                       class="theme_btn mb_30"><?php echo e(__('frontend.View All Courses')); ?></a>
                </div>
            </div>
        </div>
    </div>

</div>
<?php /**PATH /home/u709483251/domains/infixedulms.madhutechnoworld.in/public_html/resources/views/frontend/infixlmstheme/snippets/components/_home_page_course_section.blade.php ENDPATH**/ ?>