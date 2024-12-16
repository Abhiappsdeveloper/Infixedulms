<ul class="Check_sidebar">
    <li>
        <label class="primary_checkbox d-flex">
            <input type="checkbox" class="price"
                   value="paid" <?php echo e(in_array("paid",explode(',',request('price')))?'checked':''); ?>>
            <span class="checkmark mr_15"></span>
            <span class="label_name"><?php echo e(__('frontend.Paid')); ?></span>
        </label>
    </li>
    <li>
        <label class="primary_checkbox d-flex">
            <input type="checkbox" class="price"
                   value="free" <?php echo e(in_array("free",explode(',',request('price')))?'checked':''); ?>>
            <span class="checkmark mr_15"></span>
            <span class="label_name"><?php echo e(__('frontend.Free')); ?></span>
        </label>
    </li>
</ul>
<?php /**PATH /home/u709483251/domains/infixedulms.madhutechnoworld.in/public_html/resources/views/frontend/infixlmstheme/snippets/components/_single_sidebar_price.blade.php ENDPATH**/ ?>