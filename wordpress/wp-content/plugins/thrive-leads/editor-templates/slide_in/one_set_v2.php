<?php
$config = array(
    'email' => 'Please enter a valid email address',
    'phone' => 'Please enter a valid phone number',
    'required' => 'Name and Email fields are required'
)
/* always include all elements inside a thrv-leads-slide-in element */
?>
<div class="thrv-leads-slide-in tve_no_drag tve_no_icons tve_element_hover thrv_wrapper tve_editor_main_content tve_one_set tve_one_set_v2 tve_brdr_solid">
    <div class="thrv_wrapper thrv_contentbox_shortcode tve_first_cb" data-tve-style="5">
        <div class="tve_cb tve_cb5 tve_green" style="margin-left: -20px;margin-right: -20px;margin-top: -40px;margin-bottom: 80px;">
            <div class="tve_cb_cnt">
                <h2 class="tve_p_center" style="color: #fff;font-size: 36px;line-height: 45px;margin-top: 10px;margin-bottom: 0;">Sign up to download
                    this FREE Ebook</h2>
                <div style="width: 188px;margin-top: 20px;" class="thrv_wrapper tve_image_caption aligncenter">
                     <span class="tve_image_frame">
                        <img class="tve_image"
                             src="<?php echo TVE_LEADS_URL . 'editor-templates/_form_css/images/uiuxpatterns-small.png' ?>"
                             style="width: 188px"/>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div data-tve-style="1" class="thrv_wrapper thrv_lead_generation tve_clearfix tve_green tve_draggable thrv_lead_generation_vertical tve_2" data-inputs-count="2" draggable="true">
        <div style="display: none;" class="thrv_lead_generation_code"></div>
        <input type="hidden" class="tve-lg-err-msg" value="<?php echo htmlspecialchars(json_encode($config)) ?>" />
        <div class="thrv_lead_generation_container tve_clearfix">
            <div class="tve_lead_generated_inputs_container tve_clearfix">
                <div class="tve_lead_fields_overlay"></div>
                <div class="tve_lg_input_container  tve_lg_2 tve_lg_input">
                    <input type="text" name="email" value="" data-placeholder="Email Address" placeholder="Email Address">
                </div>
                <div class="tve_lg_input_container tve_submit_container tve_lg_2 tve_lg_submit">
                    <button type="Submit">Get this Ebook</button>
                </div>
            </div>
        </div>
    </div>

    <a href="javascript:void(0)" class="tve-leads-close" title="<?php echo __('Close', 'thrive-leads') ?>">x</a>
</div>