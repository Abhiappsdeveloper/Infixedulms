<div data-type="component-text"
     data-preview="<?php echo e(!function_exists('themeAsset')?'':themeAsset('img/snippets/preview/about/story.jpg')); ?>"
     data-aoraeditor-title="Story" data-aoraeditor-categories="About Us Page">
    <div class="about_gallery_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 mb_30">
                    <div class="about_gallery">
                        <div class="gallery_box">
                            <div class="thumb">
                                <img class="w-100" src="<?php echo e(asset($about_page->image1)); ?>" alt="">
                            </div>
                            <div class="thumb small_thumb">
                                <img class="w-100" src="<?php echo e(asset($about_page->image2)); ?>" alt="">
                            </div>
                        </div>
                        <div class="gallery_box">
                            <div class="thumb">
                                <img class="w-100" src="<?php echo e(asset($about_page->image3)); ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="section__title">
                        <h3><?php echo e($about_page->story_title); ?></h3>
                        <p><?php echo e($about_page->story_description); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /home/u709483251/domains/infixedulms.madhutechnoworld.in/public_html/resources/views/frontend/infixlmstheme/snippets/components/_about_story.blade.php ENDPATH**/ ?>