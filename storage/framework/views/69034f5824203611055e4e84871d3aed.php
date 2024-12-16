<div data-type="component-text"
     data-preview="<?php echo e(!function_exists('themeAsset')?'':themeAsset('img/snippets/preview/home/homepage_category_section.jpg')); ?>"
     data-aoraeditor-title="HomePage Category Section" data-aoraeditor-categories="Home Page">

    <div class="category_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <?php if(isset($homeContent)): ?>
                        <?php if($homeContent->show_key_feature==1): ?>
                            <div class="couses_category">
                                <div class="row">


                                    <div class="col-xl-4 col-md-4">
                                        <div class="single_course_cat">
                                            <div class="icon">
                                                <?php if(!empty($homeContent->key_feature_logo1)): ?>
                                                    <img
                                                        src="<?php echo e(asset($homeContent->key_feature_logo1)); ?>"
                                                        alt="">
                                                <?php endif; ?>
                                            </div>
                                            <div class="course_content">
                                                <h4>
                                                    <?php if(!empty($homeContent->feature_link1)): ?>
                                                        <a
                                                            href="<?php echo e($homeContent->feature_link1); ?>"> <?php endif; ?>
                                                            <?php echo e($homeContent->key_feature_title1); ?>

                                                            <?php if(!empty($homeContent->feature_link1)): ?>   </a>
                                                    <?php endif; ?>
                                                </h4>
                                                <p><?php echo e($homeContent->key_feature_subtitle1); ?> </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-4 col-md-4">
                                        <div class="single_course_cat">
                                            <div class="icon">
                                                <?php if(!empty($homeContent->key_feature_logo2)): ?>
                                                    <img
                                                        src="<?php echo e(asset($homeContent->key_feature_logo2)); ?>"
                                                        alt="">
                                                <?php endif; ?>
                                            </div>
                                            <div class="course_content">
                                                <h4>
                                                    <?php if(!empty($homeContent->feature_link2)): ?>
                                                        <a
                                                            href="<?php echo e($homeContent->feature_link2); ?>"> <?php endif; ?>
                                                            <?php echo e($homeContent->key_feature_title2); ?>

                                                            <?php if(!empty($homeContent->feature_link2)): ?>   </a>
                                                    <?php endif; ?>
                                                </h4>
                                                <p><?php echo e($homeContent->key_feature_subtitle2); ?> </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-4 col-md-4">
                                        <div class="single_course_cat">
                                            <div class="icon">
                                                <?php if(!empty($homeContent->key_feature_logo3)): ?>
                                                    <img
                                                        src="<?php echo e(asset($homeContent->key_feature_logo3)); ?>"
                                                        alt="">
                                                <?php endif; ?>
                                            </div>
                                            <div class="course_content">
                                                <h4>
                                                    <?php if(!empty($homeContent->feature_link3)): ?>
                                                        <a
                                                            href="<?php echo e($homeContent->feature_link3); ?>"> <?php endif; ?>
                                                            <?php echo e($homeContent->key_feature_title3); ?>

                                                            <?php if(!empty($homeContent->feature_link3)): ?>   </a>
                                                    <?php endif; ?>
                                                </h4>
                                                <p><?php echo e($homeContent->key_feature_subtitle3); ?> </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>

                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="section__title mb_40">
                        <h3>
                            <?php echo e(@$homeContent->category_title); ?>

                        </h3>
                        <p>
                            <?php echo e(@$homeContent->category_sub_title); ?>

                        </p>

                        <a href="<?php echo e(route('courses')); ?>"
                           class="line_link"><?php echo e(__('frontend.View All Courses')); ?></a>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div data-type="component-nonExisting"
                         data-preview=""
                         data-table=""
                         data-select="image,name,id,thumbnail,total_courses"
                         data-order="id"
                         data-limit="4"
                         data-where-status="1"
                         data-view="_single_category_browse"
                         data-model="Modules\CourseSetting\Entities\Category"
                         data-with=""
                         data-with-count="courses"
                    >
                        <div class="dynamicData"
                             data-dynamic-href="<?php echo e(routeIsExist('getDynamicData')?route('getDynamicData'):''); ?>"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?php /**PATH /home/u709483251/domains/infixedulms.madhutechnoworld.in/public_html/resources/views/frontend/infixlmstheme/snippets/components/_home_page_category_section.blade.php ENDPATH**/ ?>