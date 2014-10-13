<?php defined('SYSPATH') or die('No direct script access.');
 
abstract class Controller_Common extends Controller_Template {
 
    public $template = 'start';
 
    public function before()
    {
        parent::before();
        $this->template->content = '';
        $this->template->styles = array('style', 'grid', 'reset');
        $this->template->scripts = array('public/js/html5.js', 'public/js/jquery.easing.1.3.js', 'public/js/jquery.galleriffic.js', 'public/js/jquery.opacityrollover.js', 'public/js/jquery-1.7.1.min.js', 'public/js/PIE.htc', 'public/js/tms_presets.js', 'public/js/tms-0.3.js');
    }
 
} 