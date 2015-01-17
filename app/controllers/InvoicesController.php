<?php

class InvoicesController extends \BaseController {

	/**
	 * Display a listing of invoices
	 *
	 * @return Response
	 */
	public function index()
	{
		$invoices = Invoice::all();
		$clients = Client::all();

		return View::make('invoices.index', compact('invoices', 'clients'));
	}

	/**
	 * Show the form for creating a new invoice
	 *
	 * @return Response
	 */
	public function create()
	{
		$clients = Client::all();
		$items = Item::all();
		$contacts = Contact::all();
		

		return View::make('invoices.create', compact('items', 'clients', 'contacts'));
	}

	public function makePDF($id)
	{
		$invoice = Invoice::findOrFail($id);

		$npdf = PDF::loadView('invoices.pdf', compact('invoice'));
		$name =  $invoice->clientName($invoice->client_id);

			return $npdf->stream();
	}

	/**
	 * Store a newly created invoice in storage.
	 *
	 * @return Response
	 */


	public function store()
	{
		$validator = Validator::make($data = Input::except('_token'), Invoice::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Invoice::create($data);

		$update_invnum = Defaults::where('id', '1')->first();

			$update_invnum->invoice_number = Input::get('invoice_number')+1;

		$update_invnum->save();


		return Redirect::route('invoices.index');
	}

	/**
	 * Display the specified invoice.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$invoice = Invoice::findOrFail($id);
		$lineitems = InvoiceService::where('invoice_id', $id)->get();

		return View::make('invoices.show', compact('invoice', 'lineitems'));
	}

	/**
	 * Show the form for editing the specified invoice.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$invoice = Invoice::find($id);

		return View::make('invoices.edit', compact('invoice'));
	}

	/**
	 * Update the specified invoice in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$invoice = Invoice::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Invoice::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$invoice->update($data);

		return Redirect::route('invoices.index');
	}

	/**
	 * Remove the specified invoice from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Invoice::destroy($id);

		return Redirect::route('invoices.index');
	}

}
