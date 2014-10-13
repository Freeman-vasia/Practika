<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Pageregister extends Controller_Common{

   public function action_register()
    {
       if(isset($_POST['submit'])){
        
   
        $tests = ORM::factory('test');
        $tests->name = $_POST['name'];
        $tests->email = $_POST['email'];
        $tests->text = $_POST['text'];
       
        $tests->save(); 
       }
       
        $content = View::factory('/pages/register');
        $this->template->content = $content;

   }
 
} 