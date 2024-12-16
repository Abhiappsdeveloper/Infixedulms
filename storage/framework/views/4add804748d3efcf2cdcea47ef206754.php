<div data-type="component-text"
     data-preview="<?php echo e(!function_exists('themeAsset')?'':themeAsset('img/snippets/preview/instractor/popular_instructor.jpg')); ?>"
     data-aoraeditor-title="Popular Instructor" data-aoraeditor-categories="Instructor Page">
    <div class="instractors_wrapper">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section__title2 mb_76 text-center">
                        <span class="text-center"><?php echo e(__('frontend.Popular Instructors')); ?></span>
                        <h4 class="text-center"><?php echo e(__('frontend.Making sure that our products exceed customer expectations')); ?>

                            <br><?php echo e(__('frontend.for quality, style and performance')); ?>.</h4>
                    </div>
                </div>
            </div>


            <div data-type="component-nonExisting"
                 data-preview=""
                 data-table="users"
                 data-select="image,name,id,headline,total_rating,facebook,twitter,linkedin,instagram,youtube"
                 data-order="total_rating"
                 data-dir="desc"
                 data-limit="10"
                 data-view="_single_popular_instructor"
                 data-model=""
                 data-with=""
                 data-with-count=""
                 data-where-role_id="2"
                 data-where-status="1"
            >
                <div class="dynamicData"
                     data-dynamic-href="<?php echo e(routeIsExist('getDynamicData')?route('getDynamicData'):''); ?>"></div>
            </div>


        </div>
    </div>
</div>
<?php /**PATH /home/u709483251/domains/infixedulms.madhutechnoworld.in/public_html/resources/views/frontend/infixlmstheme/snippets/components/_popular_instructors.blade.php ENDPATH**/ ?>