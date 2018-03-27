<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
    	$post_json = file_get_contents("php://input");
    	$post_array = json_decode($post_json, true);
    	print($post_array['title'] . ' $and$ ' . $post_array['body']);
    }
}
