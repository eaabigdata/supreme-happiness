<?php

class DiysController extends \BaseController {

	/**
	 * Display a listing of diys
	 *
	 * @return Response
	 */
	public function index()
	{
		$diys = Diy::all();

		return View::make('diys.index', compact('diys'));
	}

	/**
	 * Show the form for creating a new diy
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('diys.create');
	}

	/**
	 * Store a newly created diy in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Diy::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Diy::create($data);

		return Redirect::route('diys.index');
	}

	/**
	 * Display the specified diy.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$diy = Diy::findOrFail($id);

		return View::make('diys.show', compact('diy'));
	}

	/**
	 * Show the form for editing the specified diy.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$diy = Diy::find($id);

		return View::make('diys.edit', compact('diy'));
	}

	/**
	 * Update the specified diy in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$diy = Diy::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Diy::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$diy->update($data);

		return Redirect::route('diys.index');
	}

	/**
	 * Remove the specified diy from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Diy::destroy($id);

		return Redirect::route('diys.index');
	}

}
