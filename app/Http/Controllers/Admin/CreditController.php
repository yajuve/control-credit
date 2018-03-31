<?php namespace App\Http\Controllers\Admin;

use App\Client;
use App\Http\Requests\CreditRequest;
use App\Http\Controllers\Controller;

use App\Credit;
use Illuminate\Http\Request;

class CreditController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$credits = Credit::all();
        $credits = Credit::with(array('client'))->get();


		return view('admin.credits.index', compact('credits'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $clients = Client::all();
		return view('admin.credits.create', compact('clients'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(CreditRequest $request)
	{
		$credit = new Credit();

		$credit->amount = $request->input("amount");
        $credit->isPaid = ($request->input("isPaid") == 'true') ? 1 : 0;
        $credit->client_id = $request->input("client_id");

		$credit->save();

		return redirect()->route('credits.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$credit = Credit::findOrFail($id);

		return view('admin.credits.show', compact('credit'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$credit = Credit::findOrFail($id);

		return view('admin.credits.edit', compact('credit'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @param Request $request
	 * @return Response
	 */
	public function update(CreditRequest $request, $id)
	{
		$credit = Credit::findOrFail($id);

		$credit->amount = $request->input("amount");
        $credit->isPaid = ($request->input("isPaid") == 'true') ? 1 : 0;

		$credit->save();

		return redirect()->route('credits.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$credit = Credit::findOrFail($id);
		$credit->delete();

		return redirect()->route('credits.index')->with('message', 'Item deleted successfully.');
	}

}
