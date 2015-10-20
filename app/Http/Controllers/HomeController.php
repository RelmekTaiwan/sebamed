<?php namespace App\Http\Controllers;

use App\Banner;
use App\News;
use App\video;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
    /*
	public function __construct()
	{
		$this->middleware('auth');
	}
    */
	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{

        $banners = Banner::where('active', 'Y')
                        ->orderBy('id', 'desc')
                        ->get();
        $news = News::orderBy('date', 'desc')
                    ->take(5)
                    ->get();

        $videos = Video::orderBy('id', 'desc')->take(5)->get();
        return view('home', compact('banners', 'news', 'videos'));

	}
	

}
