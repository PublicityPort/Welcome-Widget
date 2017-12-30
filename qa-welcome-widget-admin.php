<?php
/*

*/
class qa_welcome_widget_admin
{
  function admin_form(&$qa_content)
  {
    $saved=false;

    if (qa_clicked('ww_save_button')) {
      qa_opt('ww_header_message', qa_post_text('ww_header_message_text'));
      qa_opt('ww_first_button_message', qa_post_text('ww_first_button_message_text'));
      qa_opt('ww_second_button_message', qa_post_text('ww_second_button_message_text'));
      qa_opt('ww_thrid_button_message', qa_post_text('ww_thrid_button_message_text'));
      $saved=true;
    }

    return array(
      'ok' => $saved ? 'Welcome Widget settings saved' : null,

      'fields' => array(
        array(
          'label' => 'Enter your header message.',
          'value' => qa_opt('ww_header_message'),
          'tags' => 'NAME="ww_header_message_text"',
        ),
        array(
            'label' => 'Enter your first buttom message.',
            'value' => qa_opt('ww_first_button_message'),
            'tags' => 'NAME="ww_first_button_message_text"',
        ),
        array(
            'label' => 'Enter your second buttom message.',
            'value' => qa_opt('ww_second_button_message'),
            'tags' => 'NAME="ww_second_button_message_text"',
        ),
        array(
            'label' => 'Enter your thrid buttom message.',
            'value' => qa_opt('ww_thrid_button_message'),
            'tags' => 'NAME="ww_thrid_button_message_text"',
        ),
      ),

      'buttons' => array(
        array(
          'label' => 'Save Changes',
          'tags' => 'name="ww_save_button"',
        ),
      ),
    );
  }
}