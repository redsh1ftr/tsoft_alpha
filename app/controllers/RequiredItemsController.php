<?php

class RequiredItemsController extends \BaseController {

	/**
	 * Display a listing of requireditems
	 *
	 * @return Response
	 */
	public function index()
	{
		$requireditems = Requireditem::all();

		return View::make('requireditems.index', compact('requireditems'));
	}

	/**
	 * Show the form for creating a new requireditem
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('requireditems.create');
	}

	/**
	 * Store a newly created requireditem in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Requireditem::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Requireditem::create($data);

		return Redirect::route('requireditems.index');
	}

	/**
	 * Display the specified requireditem.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$requireditem = Requireditem::findOrFail($id);

		return View::make('requireditems.show', compact('requireditem'));
	}

	/**
	 * Show the form for editing the specified requireditem.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$requireditem = Requireditem::find($id);

		return View::make('requireditems.edit', compact('requireditem'));
	}

	/**
	 * Update the specified requireditem in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$requireditem = Requireditem::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Requireditem::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$requireditem->update($data);

		return Redirect::route('requireditems.index');
	}

	/**
	 * Remove the specified requireditem from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Requireditem::destroy($id);

		return Redirect::route('requireditems.index');
	}

}
