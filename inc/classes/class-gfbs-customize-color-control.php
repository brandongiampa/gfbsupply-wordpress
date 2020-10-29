<?php

class GFBS_Customize_Color_Control extends WP_Customize_Color_Control {

    function content_template() {
            ?>
            <select name="" id=""></select>
        		<# var defaultValue = '#RRGGBB', defaultValueAttr = '',
			isHueSlider = data.mode === 'hue';
            if ( data.defaultValue && _.isString( data.defaultValue ) && ! isHueSlider ) {
                if ( '#' !== data.defaultValue.substring( 0, 1 ) ) {
                    defaultValue = '#' + data.defaultValue;
                } else {
                    defaultValue = data.defaultValue;
                }
                defaultValueAttr = ' data-default-color=' + defaultValue; // Quotes added automatically.
            } #>
            <# if ( data.label ) { #>
                <span class="customize-control-title">{{{ data.label }}}</span>
            <# } #>
            <# if ( data.description ) { #>
                <span class="description customize-control-description">{{{ data.description }}}</span>
            <# } #>
            <div class="customize-control-content">
                <label><span class="screen-reader-text">{{{ data.label }}}</span>
                <# if ( isHueSlider ) { #>
                    <input class="color-picker-hue" type="text" data-type="hue" />
                <# } else { #>
                    <input class="color-picker-hex" type="text" maxlength="7" placeholder="{{ defaultValue }}" {{ defaultValueAttr }} />
                <# } #>
                </label>
            </div>
            <?php
    }
}

?>