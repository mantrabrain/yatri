<div class="repeater-item yatri-input-<?php echo esc_attr($field_type); ?>" data-title="<?php echo absint($is_title); ?>"
     data-field-type="<?php echo esc_attr($field_type) ?>"
     data-id="<?php echo esc_attr($field_id) ?>"
>
    <label for="<?php echo esc_attr($field_id); ?>" class="control-title">
        <?php echo esc_html($label); ?>
    </label>
    <input class="<?php echo esc_attr($field_id); ?> repeater-change-js" type="text"
           value="<?php echo esc_attr($field_value) ?>"/>
</div>
