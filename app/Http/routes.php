<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::get('/',function(){	return view('lowongan.lowongan');   });

Route::get('detail',function(){	return view('lowongan.detail');  });

Route::get('input_pelamar',function(){	return view('lowongan.input_pelamar');  });

Route::get('tambah_pelamar',function(){	return view('lowongan.tambah_pelamar');  });

Route::get('input_nilai_psikotes',function(){	return view('lowongan.input_nilai_psikotes');  });

Route::get('input_nilai_tertulis',function(){	return view('lowongan.input_nilai_tertulis');  });

Route::get('input_nilai_wawancara',function(){	return view('lowongan.input_nilai_wawancara');  });

Route::get('hasil',function(){	return view('lowongan.hasil');  });


Route::get('login/',function()
{
	return view('template.index');
});

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

