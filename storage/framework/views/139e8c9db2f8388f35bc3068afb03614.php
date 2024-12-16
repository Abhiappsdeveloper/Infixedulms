<div data-type="component-text"
     data-preview="<?php echo e(!function_exists('themeAsset')?'':themeAsset('img/snippets/preview/class/class_page_section.jpg')); ?>"
     data-aoraeditor-title="Store Page Section"
     data-aoraeditor-categories="Store Page"
>
    <link rel="stylesheet" href="<?php echo e(asset('public/frontend/infixlmstheme/css/store_style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/frontend/infixlmstheme/css/select2Store.min.css')); ?>">
    <div class="section-padding-medium shop pb-5">
        <div class="container">

            <div class="row">
                <div class="col-lg-4 col-xl-3">
                    <?php echo $__env->make(theme('snippets.components._store_sidebar'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
                <div class="col-lg-8 col-xl-9">
                    <div data-type="component-nonExisting"
                         data-preview=""
                         data-table=""
                         data-select=""
                         data-order=""
                         data-limit=""
                         data-where-type="5"
                         data-where-status="1"
                         data-pagination="12"
                         data-view="_single_store"
                         data-model="Modules\CourseSetting\Entities\Course"
                         data-with=""
                         data-request="product_category,user_id,sort_by,custom_pagination"
                    >
                        <div class="dynamicData"
                             data-dynamic-href="<?php echo e(routeIsExist('getDynamicData')?route('getDynamicData'):''); ?>"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?php /**PATH /home/u709483251/domains/infixedulms.madhutechnoworld.in/public_html/resources/views/frontend/infixlmstheme/snippets/components/_store_page_section.blade.php ENDPATH**/ ?>