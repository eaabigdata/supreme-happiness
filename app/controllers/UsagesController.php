<?php

class UsagesController extends \BaseController {

	/**
	 * Display a listing of usages
	 *
	 * @return Response
	 */
	public function index()
	{
		$usages = Usage::all();

		return View::make('usages.index', compact('usages'));
	}

	/**
	 * Show the form for creating a new usage
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('usages.create');
	}

	/**
	 * Store a newly created usage in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Usage::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Usage::create($data);

		return Redirect::route('usages.index');
	}

	/**
	 * Display the specified usage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$usage = Usage::findOrFail($id);

		return View::make('usages.show', compact('usage'));
	}

	/**
	 * Show the form for editing the specified usage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$usage = Usage::find($id);

		return View::make('usages.edit', compact('usage'));
	}

	/**
	 * Update the specified usage in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$usage = Usage::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Usage::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$usage->update($data);

		return Redirect::route('usages.index');
	}

	/**
	 * Remove the specified usage from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Usage::destroy($id);

		return Redirect::route('usages.index');
	}

}
