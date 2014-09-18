<?php

class WorkController extends BaseController {

	public function index()
	{
        $viewData = array();

        $works = DB::select('select * from WORK order by WORK_YEAR desc');
        $viewData['works'] = $works;
        return View::make('work')->with('data', $viewData);
	}

}
