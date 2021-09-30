<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Shipment;
use App\Models\Order;
use App\Models\Payment;


class DashboardController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		/* $payment= Payment::all();
		$order = Order::all();
		$shipment = Shipment::all(); */
		$this->data['payments'] = Payment::all()->count();
		$this->data['shipments'] = Shipment::all()->count();
		$this->data['orders'] = Order::all()->count(); 

		return view('admin.dashboard.index', $this->data);
	}
}
// compact(['payment'],['order'],['shipment'])