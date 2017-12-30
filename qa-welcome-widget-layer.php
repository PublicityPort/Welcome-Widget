<?php

class qa_html_theme_layer extends qa_html_theme_base
{

	function head_script() // add a Javascript file from plugin directory
    {
        if ($this->template !='admin') // check it's a question page
            $this->content['script'][]='<script src="'.
            qa_html(QA_HTML_THEME_LAYER_URLTOROOT.'js/qa-welcome-widget.js').
            '" TYPE="text/javascript"></script>';

        parent::head_script();
    }

    function head_css() // add a Javascript file from plugin directory
    {
        $this-> output('<link rel="stylesheet" href="'.
            QA_HTML_THEME_LAYER_URLTOROOT.'welcome-widget.css'.'" TYPE="text/css">');
        $this-> output('<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">');

        parent::head_css();
    }
}