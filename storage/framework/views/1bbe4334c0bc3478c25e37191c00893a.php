<div data-type="component-nonExisting"
     data-preview="<?php echo e(!function_exists('themeAsset')?'':themeAsset('img/snippets/preview/home/home_sponsor.jpg')); ?>"
     data-aoraeditor-title="Homepage Default Sponsor"
     data-aoraeditor-categories="Home Page;Dynamic component"
>
    <link rel="stylesheet" href="<?php echo e(themeAsset('css/homepageV7/clients-v7.css')); ?>">

    <div class="container">
        <div class="clients-area">
            <h3 class="clients-area-title">
                Over <span class="count">6,000</span> users worldwide place their trust in us
            </h3>

            <div
                data-preview=""
                data-table=""
                data-select="image"
                data-order="id"
                data-limit="0"
                data-view="_single_sponsor_v7"
                data-model="Modules\FrontendManage\Entities\Sponsor"
                data-where-status="1"
                data-with="">
                <div class="dynamicData"
                     data-dynamic-href="<?php echo e(routeIsExist('getDynamicData')?route('getDynamicData'):''); ?>"></div>
            </div>


        </div>
    </div>


</div>
<?php /**PATH /home/u709483251/domains/infixedulms.madhutechnoworld.in/public_html/resources/views/frontend/infixlmstheme/snippets/components/_home_page_client_section_v7.blade.php ENDPATH**/ ?>