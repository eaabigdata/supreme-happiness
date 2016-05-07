<?php

class InstancesController extends \BaseController {

	/**
	 * Display a listing of instances
	 *
	 * @return Response
	 */
	public function index()
	{
		$instances = Instance::all();

		return View::make('instances.index', compact('instances'));
	}

	/**
	 * Show the form for creating a new instance
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('instances.create');
	}

	/**
	 * Store a newly created instance in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Instance::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Instance::create($data);

		return Redirect::route('instances.index');
	}

	/**
	 * Display the specified instance.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$instance = Instance::findOrFail($id);

		return View::make('instances.show', compact('instance'));
	}

	/**
	 * Show the form for editing the specified instance.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$instance = Instance::find($id);

		return View::make('instances.edit', compact('instance'));
	}

	/**
	 * Update the specified instance in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$instance = Instance::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Instance::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$instance->update($data);

		return Redirect::route('instances.index');
	}

	/**
	 * Remove the specified instance from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Instance::destroy($id);

		return Redirect::route('instances.index');
	}

}
