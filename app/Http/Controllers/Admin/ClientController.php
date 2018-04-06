<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests\ClientRequest;
use App\Http\Controllers\Controller;

use App\Client;
use App\Credit;
use App\Model\ClientReport;
use Illuminate\Http\Request;

class ClientController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$clients = Client::all();

		return view('admin.clients.index', compact('clients'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.clients.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(ClientRequest $request)
	{
		$client = new \App\Client();

		$client->name = $request->input("name");
        $client->phone = $request->input("phone");
        $client->note = $request->input("note");

		$client->save();

		return redirect()->route('clients.index')->with('success', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$client = Client::findOrFail($id);
        $report = new ClientReport();

        foreach($client->credits as $credit){
            if($credit->isPaid){ // Paid
                $report->countPaid += $credit->amount;
                $report->nbrPaid++;
            }
            else{ // Not paid
                $report->countNotPaid += $credit->amount;
                $report->nbrNotPaid++;
            }
        }


		return view('admin.clients.show', compact('client', 'report'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$client = Client::findOrFail($id);

		return view('admin.clients.edit', compact('client'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @param Request $request
	 * @return Response
	 */
	public function update(ClientRequest $request, $id)
	{
		$client = Client::findOrFail($id);

		$client->name = $request->input("name");
        $client->phone = $request->input("phone");
        $client->note = $request->input("note");

		$client->save();

		return redirect()->route('clients.index')->with('success', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$client = Client::findOrFail($id);
		$client->delete();

		return redirect()->route('clients.index')->with('success', 'Item deleted successfully.');
	}

}
