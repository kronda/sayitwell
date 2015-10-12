<?php
$config = array(
    'email' => 'Please enter a valid email address',
    'phone' => 'Please enter a valid phone number',
    'required' => 'Name and Email fields are required'
)
/**
 * STATE EVENTS examples (important bits: data-tcb-events and the "tve_evt_manager_listen tve_et_click" classes
 *
 * -close lb:
 * <a href="#" data-tcb-events="|close_lightbox|" class="tve_evt_manager_listen tve_et_click">CLOSE THIS LIGHTBOX</a>
 * <a href="#" data-tcb-events="|close_form|" class="tve_evt_manager_listen tve_et_click">CLOSE THIS LIGHTBOX</a>
 *
 * -state switch example ( open_state_x, where x is the index in the _config / multi_step / states array:
 * <a href="#" data-tcb-events="|open_state_2|" class="tve_evt_manager_listen tve_et_click">open state 2</a>
 */
?>
<div
    class="thrv-leads-form-box tve_no_drag tve_no_icons tve_element_hover thrv_wrapper tve_editor_main_content tve_52_set_vms_step1 tve_white tve_brdr_solid">
    <div class="thrv_wrapper thrv_contentbox_shortcode" data-tve-style="5">
        <div class="tve_cb tve_cb5 tve_white" style="margin: -20px -60px 0;">
            <div class="tve_cb_cnt">
                <h2 style="color: #333333; font-size: 40px;margin-top: 5px;margin-bottom: 0;" class="rft">
	                Get the <font color="#e60000">FREE</font> Insider’s Guide to
	                Building Landing Pages that Convert
                </h2>
            </div>
        </div>
    </div>
	<div class="thrv_wrapper" style="margin: 0 -50px;">
		<hr class="tve_sep tve_sep1"/>
	</div>
	<div class="thrv_wrapper thrv_columns tve_clearfix">
		<div class="tve_colm tve_oth">
			<div style="width: 185px;margin-top: 0;margin-bottom: 0;"
			     class="thrv_wrapper tve_image_caption aligncenter">
                                 <span class="tve_image_frame">
                                    <img class="tve_image"
                                         src="<?php echo TVE_LEADS_URL . 'editor-templates/_form_css/images/51_set_image.png' ?>"
                                         style="width: 185px;"/>
                                </span>
			</div>
		</div>
		<div class="tve_colm tve_tth tve_lst">
			<p style="color: #3f3f3f; font-size: 22px;margin-top: 20px;margin-bottom: 35px;">
				Learn how to build an effective landing page
				using my personal hand-picked selection
				of tools
			</p>
			<div data-tve-style="1"
			     class="thrv_wrapper thrv_button_shortcode tve_draggable tve_ea_tl_state_lightbox tve_fullwidthBtn"
			     draggable="true">
				<div class="tve_btn tve_nb tve_btn5 tve_normalBtn tve_red">
					<a class="tve_btnLink tve_evt_manager_listen tve_et_click" href=""
					   data-tcb-events="|open_state_2|">
                    <span class="tve_left tve_btn_im">
	                    <i class="tve_sc_icon set-52-icon" data-tve-icon="set-52-icon" style="background-image: none;"></i>
                        <span class="tve_btn_divider"></span>
                    </span>
						<span class="tve_btn_txt">Yes, I want this FREE DOWNLOAD</span>
					</a>
				</div>
			</div>
		</div>
	</div>
    <p class="tve-form-close tve_evt_manager_listen" data-tcb-events="|close_form|">
        x
    </p>
</div>




