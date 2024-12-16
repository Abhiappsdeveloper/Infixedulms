<style>
    .popular-course-carousel .owl-stage{
        display: flex;
    }

    .popular-course-carousel .course-item-footer {
        align-items: flex-end;
    }
</style>

<div data-type="component-text"
     data-preview="<?php echo e(!function_exists('themeAsset')?'':themeAsset('img/snippets/preview/home/homepage_course_section.jpg')); ?>"
     data-aoraeditor-title="HomePage Default Course Section" data-aoraeditor-categories="Home Page">
    <link rel="stylesheet" href="<?php echo e(themeAsset('css/homepageV7/course-v7.css')); ?>">

    <div class="course">
        <div class="container">
            <div class="section_head withBtn">
                <div>
                    <h2>Our Popular Courses</h2>
                    <?php echo e(@$homeContent->course_sub_title); ?>

                </div>
                <div class="view-all-btn">
                    <a href="<?php echo e(route('courses')); ?>">View All <i class="fas fa-arrow-right fa-fw"></i></a>
                </div>
            </div>


            <div data-type="component-nonExisting"
                 data-preview=""
                 data-table=""
                 data-select="id,type,slug,title,thumbnail,price,discount_price,mode_of_delivery,about,total_reviews,total_enrolled,total_rating"
                 data-order="total_enrolled"
                 data-dir="desc"
                 data-limit="4"
                 data-where-type="1"
                 data-where-status="1"
                 data-view="_single_course_v7"
                 data-model="Modules\CourseSetting\Entities\Course"
                 data-with="lessons"
            >
                <div class="dynamicData"
                     data-dynamic-href="<?php echo e(routeIsExist('getDynamicData')?route('getDynamicData'):''); ?>"></div>
            </div>


        </div>
    </div>

</div>
<?php /**PATH /home/u709483251/domains/infixedulms.madhutechnoworld.in/public_html/resources/views/frontend/infixlmstheme/snippets/components/_home_page_course_section_v7.blade.php ENDPATH**/ ?>