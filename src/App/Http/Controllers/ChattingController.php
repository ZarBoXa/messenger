<?php

namespace Zarboxa\Chatting\App\Http\Controllers;

use App\Http\Controllers\Controller;

class ChattingController extends Controller{


	public function index(){
		return view('chatting::index');
		return 'hello from index!';
	}

}
