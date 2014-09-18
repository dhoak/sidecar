<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index()
	{
        $viewData = array();
        if(isset($_GET['q']))
        {
            $code = $_GET['q'];
            $lead = DB::select('select * from LEAD where CODE = ?', array($code));
            if($lead !=null)
            {
                $viewData['lead'] = $lead;
            }
        }

        return View::make('home')->with('data', $viewData);
	}

}
