<?php namespace App\Http\Controllers;

use App\Models\MBWorks;
use Illuminate\Routing\Controller;

class MBWorksController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /mbworks
	 *
	 * @return Response
	 */
	public function index()
	{
        $config['tableName'] = 'Projects list';
        $config['ignore'] = ['id', 'count', 'created_at', 'updated_at', 'deleted_at'];
        $config['list'] = MBWorks::get()->toArray();
        $config['route'] = route('app.works.create');
        $config['create'] = 'app.works.create';
        $config['edit'] = 'app.works.edit';
        $config['delete'] = 'app.works.destroy';
        $config['show'] = 'app.works.show';
        dd($config);
        return view('admin.adminList',$config);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /mbworks/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /mbworks
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /mbworks/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /mbworks/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /mbworks/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /mbworks/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}