<?php

class TweetsController extends \BaseController {

    /**
     * Display a listing of the resource.
     * GET /tweets
     *
     * @param $query
     * @return Response
     */
	public function index($query)
	{

        $tweets = TwitterThu::getSearch(array('q' => $query, 'count' => 100, 'format' => 'array'));

        return View::make('tweets.index', compact('tweets', 'query'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /tweets/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /tweets
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /tweets/{id}
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
	 * GET /tweets/{id}/edit
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
	 * PUT /tweets/{id}
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
	 * DELETE /tweets/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}