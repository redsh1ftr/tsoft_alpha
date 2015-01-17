<?php

class InvoiceServicesController extends \BaseController {

	/**
	 * Display a listing of invoiceservices
	 *
	 * @return Response
	 */
	public function index()
	{
		$invoiceservices = Invoiceservice::all();

		return View::make('invoiceservices.index', compact('invoiceservices'));
	}

	/**
	 * Show the form for creating a new invoiceservice
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('invoiceservices.create');
	}

	/**
	 * Store a newly created invoiceservice in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::except('_token'), Invoiceservice::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Invoiceservice::create($data);

		return Redirect::back();
	}

	/**
	 * Display the specified invoiceservice.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$invoiceservice = Invoiceservice::findOrFail($id);

		return View::make('invoiceservices.show', compact('invoiceservice'));
	}

	/**
	 * Show the form for editing the specified invoiceservice.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$invoiceservice = Invoiceservice::find($id);

		return View::make('invoiceservices.edit', compact('invoiceservice'));
	}

	/**
	 * Update the specified invoiceservice in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$invoiceservice = Invoiceservice::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Invoiceservice::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$invoiceservice->update($data);

		return Redirect::back();
	}

	/**
	 * Remove the specified invoiceservice from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Invoiceservice::destroy($id);

		return Redirect::route('invoiceservices.index');
	}

}
