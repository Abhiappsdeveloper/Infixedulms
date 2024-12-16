<div data-type="component-text"
     data-preview="<?php echo e(!function_exists('themeAsset')?'':themeAsset('img/snippets/preview/home/homepage_blog_section.jpg')); ?>"
     data-aoraeditor-title="HomePage Blog Section" data-aoraeditor-categories="Home Page;Blog">
    <div class="blog_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="section__title text-center mb_80">
                        <h3>
                            <?php echo e(@$homeContent->article_title); ?>

                        </h3>
                        <p>
                            <?php echo e(@$homeContent->article_sub_title); ?>

                        </p>
                    </div>
                </div>
            </div>


            <div data-type="component-nonExisting"
                 data-preview=""
                 data-table=""
                 data-select="slug,thumbnail,authored_date,title"
                 data-order="id"
                 data-limit="4"
                 data-where-status="1"
                 data-view="_single_home_blog"
                 data-model="Modules\Blog\Entities\Blog"
                 data-with="user"
            >

                <div class="dynamicData"
                     data-dynamic-href="<?php echo e(routeIsExist('getDynamicData')?route('getDynamicData'):''); ?>"></div>

            </div>


            <div class="row ">
                <div class="col-12 text-center pt_70">
                    <a href="<?php echo e(route('blogs')); ?>"
                       class="theme_btn mb_30"><?php echo e(__('frontend.View All Articles & News')); ?></a>
                </div>
            </div>

        </div>
    </div>

</div>
<?php /**PATH /home/u709483251/domains/infixedulms.madhutechnoworld.in/public_html/resources/views/frontend/infixlmstheme/snippets/components/_home_page_blog_section.blade.php ENDPATH**/ ?>