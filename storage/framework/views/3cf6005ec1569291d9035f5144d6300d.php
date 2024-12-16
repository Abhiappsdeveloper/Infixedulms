<div class="course_category_chose  mt_10">
    <div class="course_title d-flex align-items-center">
        
        <div class="popupClose"><i class="ti-close"></i></div>
    </div>

    <div class="course_category_inner">
        <div class="single_course_categry">
            <h4 class="font_18 f_w_700">
                <?php echo e(__('frontend.Category')); ?>

            </h4>

            <div data-type="component-nonExisting"
                 data-preview=""
                 data-table=""
                 data-select="id,name"
                 data-order=""
                 data-limit=""
                 data-where-status="1"
                 data-view="_single_sidebar_category"
                 data-model="Modules\CourseSetting\Entities\Category"
                 data-with=""
            >
                <div class="dynamicData"
                     data-dynamic-href="<?php echo e(routeIsExist('getDynamicData')?route('getDynamicData'):''); ?>"></div>
            </div>

        </div>
        <div class="single_course_categry">
            <h4 class="font_18 f_w_700">
                <?php echo e(__('frontend.Level')); ?>

            </h4>
            <div data-type="component-nonExisting"
                 data-preview=""
                 data-table=""
                 data-select="id,title"
                 data-order=""
                 data-limit=""
                 data-view="_single_sidebar_level"
                 data-model="Modules\CourseSetting\Entities\CourseLevel"
                 data-with=""
            >
                <div class="dynamicData"
                     data-dynamic-href="<?php echo e(routeIsExist('getDynamicData')?route('getDynamicData'):''); ?>"></div>
            </div>


        </div>
        <div class="single_course_categry">
            <h4 class="font_18 f_w_700">
                <?php echo e(__('frontend.Price')); ?>

            </h4>
            <div data-type="component-nonExisting"
                 data-preview=""
                 data-table=""
                 data-select=""
                 data-order=""
                 data-limit=""
                 data-view="_single_sidebar_price"
                 data-model=""
                 data-with=""
            >
                <div class="dynamicData"
                     data-dynamic-href="<?php echo e(routeIsExist('getDynamicData')?route('getDynamicData'):''); ?>"></div>
            </div>
        </div>
        <div class="single_course_categry">
            <h4 class="font_18 f_w_700">
                <?php echo e(__('frontend.Language')); ?>

            </h4>
            <div data-type="component-nonExisting"
                 data-preview=""
                 data-table="languages"
                 data-select="id,name"
                 data-order=""
                 data-limit=""
                 data-where-status="1"
                 data-view="_single_sidebar_language"
                 data-model=""
                 data-with=""
            >
                <div class="dynamicData"
                     data-dynamic-href="<?php echo e(routeIsExist('getDynamicData')?route('getDynamicData'):''); ?>"></div>
            </div>
        </div>

        <div class="single_course_categry">
            <h4 class="font_18 f_w_700">
                <?php echo e(__('frontend.Instructors')); ?>

            </h4>
            <div data-type="component-nonExisting"
                 data-preview=""
                 data-table="users"
                 data-select="id,name"
                 data-order="id"
                 data-dir="asc"
                 data-limit=""
                 data-where_not-role_id="3"
                 data-where-status="1"
                 data-view="_single_sidebar_instructor"
                 data-model=""
                 data-with=""
            >
                <div class="dynamicData"
                     data-dynamic-href="<?php echo e(routeIsExist('getDynamicData')?route('getDynamicData'):''); ?>"></div>
            </div>
        </div>
        <div class="single_course_categry">
            <h4 class="font_18 f_w_700">
                <?php echo e(__('frontend.Rating')); ?>

            </h4>
            <div data-type="component-nonExisting"
                 data-preview=""
                 data-table=""
                 data-select=""
                 data-order=""
                 data-limit=""
                 data-where-status="1"
                 data-view="_single_sidebar_rating"
                 data-model=""
                 data-with="course"
            >
                <div class="dynamicData"
                     data-dynamic-href="<?php echo e(routeIsExist('getDynamicData')?route('getDynamicData'):''); ?>"></div>
            </div>
        </div>
    </div>

</div>
<?php /**PATH /home/u709483251/domains/infixedulms.madhutechnoworld.in/public_html/resources/views/frontend/infixlmstheme/snippets/components/_sidebar.blade.php ENDPATH**/ ?>