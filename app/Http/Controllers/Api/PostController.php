<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
    	$post_json = file_get_contents("php://input");
    	$post_array = json_decode($post_json, true);
    	print($post_array['title'] . ' $and$ ' . $post_array['body']);
    }

    public function get() {
    	if (isset($_POST['userId'])) {
    		$id = $_POST['userId'];
	    	if ($id == 1) {
		    	return $this->response->array([
		    		'body' => 'How are you all today?',
		    		'id' => '1',
		    		'title' => 'Hello World',
		    		'userId' => '1'
		    	]);
		    }
    	}
	}
}
