<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Group;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
	public function index($message='')
	{
		$customer = new Customer();
		$customers=  $customer->all();
		$group = new Group();
		$groups=  $group->all();
		return view('customer')->with(['customers' => $customers, 'groups' => $groups, 'message' =>$message]);
	}

	public function store(Request $request) {
		$this->validate($request, [
			'firstname' => 'required',
			'surname' => 'required',
			'phonenum' => 'required',
			'email' => 'required|email',
		]);

		$customer = new Customer();
		$customer->firstname = $request->get('firstname');
		$customer->surname = $request->get('surname');
		$customer->phonenum = $request->get('phonenum');
		$customer->email = $request->get('email');
		$customer->save();
		return redirect()->action('CustomerController@index', ['message' => 'success']); //view('/welcome')->with('message', 'applied');
	}
}
