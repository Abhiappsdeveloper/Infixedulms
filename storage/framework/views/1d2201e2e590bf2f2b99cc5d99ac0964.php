<div class="course-filter-sidebar show">
    <button type="button" class="close text-reset d-lg-none" aria-label="Close" data-bs-dismiss="filter">
        <span aria-hidden="true">×</span>
    </button>
    <div class="course-filter-limit">
        <div class="course-filter-item w-100">
            <h5>
                <?php echo e(__('frontend.Category')); ?>

            </h5>

            <div data-type="component-nonExisting"
                 data-preview=""
                 data-table=""
                 data-select="id,title"
                 data-order=""
                 data-limit=""
                 data-where-status="1"
                 data-view="_store_single_sidebar_category"
                 data-model="Modules\Store\Entities\ProductCategory"
                 data-with=""
            >
                <div class="dynamicData"
                     data-dynamic-href="<?php echo e(routeIsExist('getDynamicData')?route('getDynamicData'):''); ?>"></div>
            </div>

        </div>
        <div class="course-filter-item w-100">
            <h5>
                <?php echo e(__('product.Sort By')); ?>

            </h5>
            <div data-type="component-nonExisting"
                 data-preview=""
                 data-table=""
                 data-select="id,title"
                 data-order=""
                 data-limit=""
                 data-view="_single_sidebar_sort_by"
                 data-model=""
                 data-with=""
            >
                <div class="dynamicData"
                     data-dynamic-href="<?php echo e(routeIsExist('getDynamicData')?route('getDynamicData'):''); ?>"></div>
            </div>


        </div>
        
        
        
        

        
        
        
        
        
        
        
        
        
        
        
        
        
        
        

        

    </div>

</div>
<?php /**PATH /home/u709483251/domains/infixedulms.madhutechnoworld.in/public_html/resources/views/frontend/infixlmstheme/snippets/components/_store_sidebar.blade.php ENDPATH**/ ?>