<?php

class PurchaseOrdersController extends \BaseController {

	/**
	 * Display a listing of purchaseorders
	 *
	 * @return Response
	 */
	public function index()
	{
		$purchaseorders = Purchaseorder::all();

		return View::make('purchaseorders.index', compact('purchaseorders'));
	}

	/**
	 * Show the form for creating a new purchaseorder
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('purchaseorders.create');
	}

	/**
	 * Store a newly created purchaseorder in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Purchaseorder::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Purchaseorder::create($data);

		return Redirect::route('purchaseorders.index');
	}

	/**
	 * Display the specified purchaseorder.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$purchaseorder = Purchaseorder::findOrFail($id);

		return View::make('purchaseorders.show', compact('purchaseorder'));
	}

	/**
	 * Show the form for editing the specified purchaseorder.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$purchaseorder = Purchaseorder::find($id);

		return View::make('purchaseorders.edit', compact('purchaseorder'));
	}

	/**
	 * Update the specified purchaseorder in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$purchaseorder = Purchaseorder::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Purchaseorder::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$purchaseorder->update($data);

		return Redirect::route('purchaseorders.index');
	}

	/**
	 * Remove the specified purchaseorder from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Purchaseorder::destroy($id);

		return Redirect::route('purchaseorders.index');
	}

}
