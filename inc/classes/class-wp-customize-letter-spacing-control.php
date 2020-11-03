<?php

class WP_Customize_Letter_Spacing_Control extends WP_Customize_Control {

    protected function render_content() {
		$input_id         = '_customize-input-' . $this->id;
		$description_id   = '_customize-description-' . $this->id;
        $describedby_attr = ( ! empty( $this->description ) ) ? ' aria-describedby="' . esc_attr( $description_id ) . '" ' : '';
        ?>
        <label class="customize-control-title" for="<?php echo esc_attr( $input_id ); ?>"><?php echo esc_html( $this->label ); ?></label>
        <?php if ( ! empty( $this->description ) ) : ?>
            <span id="<?php echo esc_attr( $description_id ); ?>" class="description customize-control-description"><?php echo $this->description; ?></span>
        <?php endif; ?>
        <input
            class="cust-font-size-input-range"
            style="width: 198px; margin-right: 2px;"
            id="<?php echo esc_attr( $input_id ) . '-range-input'; ?>"
            <?php echo $describedby_attr; ?>
            type="range"
            value="<?php echo esc_attr( $this->value() ); ?>"
            min="-5"
            max="20"
            <?php $this->link(); ?>
        />
        <input
            class="cust-font-size-input-number"
            style="max-width: 46px; padding-right: 0;"
            id="<?php echo esc_attr( $input_id ) . '-number-input' ; ?>"
            <?php echo $describedby_attr; ?>
            type="number"
            min="-5"
            max="20"
            value="<?php echo esc_attr( $this->value() ); ?>"
            <?php $this->link(); ?>
        /><span style="margin-left: 4px; font-size: 16px;" class="custom-control-label-px">px</span>
        <?php
    }

}


?>