<?php

namespace App\Http\Controllers;

use App\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    //
	public function index($message='')
	{
		$group = new Group();
		$groups=  $group->all();
		return view('groups')->with(['groups' => $groups, 'message' =>$message]);
	}

	public function store(Request $request) {
		$this->validate($request, [
			'name' => 'required',
		]);

		$group = new Group();
		$group->name = $request->get('name');
		$group->save();
		return redirect()->action('CustomerController@index', ['message' => 'success']); //view('/welcome')->with('message', 'applied');
	}
}
