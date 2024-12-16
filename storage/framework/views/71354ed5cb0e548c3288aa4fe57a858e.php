<div data-type="component-text"
     data-preview="<?php echo e(!function_exists('themeAsset')?'':themeAsset('img/snippets/preview/home/homepage_faq_section.jpg')); ?>"
     data-aoraeditor-title="HomePage Default FAQ Section" data-aoraeditor-categories="Home Page">
    <link rel="stylesheet" href="<?php echo e(themeAsset('css/homepageV7/faq-v7.css')); ?>">

    <div class="faq-section section_padding_90 header_clear" data-aos="fade-up">
        <div class="container">
            <div class="section_head">
                <h2>
                    <?php echo e(@$homeContent->home_page_faq_title); ?>


                </h2>
                <h5>
                    <?php echo e(@$homeContent->home_page_faq_sub_title); ?>

                </h5>
            </div>
            <div class="row justify-content-center mb-130 position-relative">

                <div class="col-md-12 col-xl-12">
                    <div data-type="component-nonExisting"
                         data-preview=""
                         data-table=""
                         data-select="question,answer"
                         data-order="order"
                         data-dir="asc"
                         data-limit="0"
                         data-where-status="1"
                         data-view="_single_faq_v7"
                         data-model="Modules\FrontendManage\Entities\HomePageFaq"
                         data-with=""
                         data-aoraeditor-title="FAQ"
                    >
                        <div class="dynamicData"
                             data-dynamic-href="<?php echo e(routeIsExist('getDynamicData')?route('getDynamicData'):''); ?>"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /home/u709483251/domains/infixedulms.madhutechnoworld.in/public_html/resources/views/frontend/infixlmstheme/snippets/components/_home_page_faq_section_v7.blade.php ENDPATH**/ ?>