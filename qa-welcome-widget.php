<?php

class qa_welcome_widget {

	function allow_template($template)
    {
        return true;
    }

    function allow_region($region)
    {
        return ($region == 'full');
    }

    function output_widget($region, $place, $themeobject, $template, $request, $qa_content)
    {

    	$themeobject->output('<div class="ww-wrapper">
					    		<div class="ww-icons-wrapper">
					    			<p id="ww-heading">'.qa_lang_html('plugin_ww/heading_option').'</p>
					    				<table class="ww-box">
											<tr>
												<td class="ww-first-block"><i class="fa fa-question-circle" aria-hidden="true"></i>
												<p>'.qa_lang_html('plugin_ww/first_option').'</p>
												<p><a href="/ask" class="ww-button">'.qa_lang_html('plugin_ww/first_button').'</a></p></td>

												<td class="ww-second-block"><i class="fa fa-comment" aria-hidden="true"></i>
												<p>'.qa_lang_html('plugin_ww/second_option').'</p>
												<p><a href="/questions" class="ww-button">'.qa_lang_html('plugin_ww/second_button').'</a></p></td>

												<td class="ww-third-block"><i class="fa fa-thumbs-up" aria-hidden="true"></i>
												<p>'.qa_lang_html('plugin_ww/third_option').'</p>
												<p><a href="/questions" class="ww-button">'.qa_lang_html('plugin_ww/third_button').'</a></p></td>
											</tr>
										</table>
								</div>
							</div>');
    }
}