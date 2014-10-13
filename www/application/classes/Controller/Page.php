<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Page extends Controller_Common {
 
    public function action_index()
    {
        $content = View::factory('/pages/about');
        $this->template->content = $content;
    }    
      public function action_weddin()
    {
        $content = View::factory('/pages/weddin');
        $this->template->content = $content;
    }  
     public function action_album()
    {
        $content = View::factory('/pages/album');
        $this->template->content = $content;
    } 
       public function action_links()
    {
        $content = View::factory('/pages/links');
        $this->template->content = $content;
    }
        public function action_register()
    {
        $content = View::factory('/pages/register');
        $this->template->content = $content;
    }
    
    
  
} 
