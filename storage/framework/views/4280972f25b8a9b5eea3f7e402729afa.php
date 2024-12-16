<div data-type="component-text"
     data-preview="<?php echo e(!function_exists('themeAsset')?'':themeAsset('img/snippets/preview/home/homepage_instructor_section.jpg')); ?>"
     data-aoraeditor-title="HomePage Default Instructor Section" data-aoraeditor-categories="Home Page">
    <link rel="stylesheet" href="<?php echo e(themeAsset('css/homepageV7/team-v7.css')); ?>">

    <div class="container">
        <div class="team-section">
            <div class="section_head">
                <h2><?php echo e(__('frontend.Popular Instructors')); ?></h2>
                <h5><?php echo e(__('frontend.Making sure that our products exceed customer expectations')); ?></h5>
            </div>


            <div data-type="component-nonExisting"
                 data-preview=""
                 data-table="users"
                 data-select="image,name,id,headline,total_rating,facebook,twitter,linkedin,youtube"
                 data-order="total_rating"
                 data-dir="desc"
                 data-limit="10"
                 data-view="_single_instructor_v7"
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
<?php /**PATH /home/u709483251/domains/infixedulms.madhutechnoworld.in/public_html/resources/views/frontend/infixlmstheme/snippets/components/_home_page_instructor_section_v7.blade.php ENDPATH**/ ?>