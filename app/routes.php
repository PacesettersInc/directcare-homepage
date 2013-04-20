<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make( 'index', array(
		'bookmarks' => array(
			array(
				'url' => 'http://pacesetterstn.com',
				'img' => 'pacesetters.png',
				'title' => 'Pacesetters, Inc. Home Page'
			),

			array(
				'url' => 'http://infoservdd.com/login',
				'img' => 'phs.png',
				'title' => 'Practical Health Systems'
			),

			array(
				'url' => 'http://webmd.com',
				'img' => 'webmd.png',
				'title' => 'WebMD'
			),

			array(
				'url' => 'http://collegeofdirectsupport.com/tn',
				'img' => 'cds.png',
				'title' => 'College of Direct Support'
			),

			array(
				'url' => 'http://mitc.pacesetterstn.com',
				'img' => 'mitc.png',
				'title' => 'My MITC'
			),

			array(
				'url' => 'http://weather.com',
				'img' => 'weather.png',
				'title' => 'Weather'
			),

			array(
				'url' => 'http://newschannel5.com',
				'img' => 'newschannel5.png',
				'title' => 'News Channel 5'
			),
		)
	) );
});
