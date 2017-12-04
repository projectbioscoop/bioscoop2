<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(['middleware'=>'auth'], function(){

    Route::get('/chairselect', function (){
        return view('ChairSelect');
    });

});



Route::get('/home', 'HomeController@index');
Route::get('/', function () {
    return view('dashboard');
})->name('home');


if(env('APP_ENV') == 'production')
{
    Auth::routes();
}
elseif (env('APP_ENV') == 'local') 
{
    Route::get('/login', function(){return view('debug.login');});
    Route::post('/login', function(){

        $id = 1;
		$user = \App\User::find($id);

		if(!$user){
			$user = new \App\User();
			$user->id = $id;
			$user->name = "test_Acount";
            $user->email = 'test_Acount@rocwb.nl';
            $user->password = "1234567890";
			$user->save();
		}

        \Auth::login($user);
		return redirect()->route('home');
    
    })->name('login');

	Route::get('logout', function(){
		Auth::logout();
		return redirect()->route('login');
	});
}