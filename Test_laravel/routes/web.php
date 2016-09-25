<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('customer/{id}', 'CustomerController@customer');

Route::get('orders', function(){
    $orders = App\Order::all();
    foreach($orders as $order){
        echo $order->name . ' belongs to '. $order->customer->name . '<br>';
    }
});

Route::get('homepage', function(){
    $data = array(
        'var1' => 'Hamburger',
        'var2' => 'Hotdog',
        'var3' => 'Soep',
        'orders' => App\Order::all()
        );

    return view('homepage', $data);

});









//Route::post('test', function(){
//    echo 'WE ARE';
//
//});
//
//Route::get('test', function(){
//    echo '<form action="test" method="POST">';
//    echo '<input type="submit">';
//    echo '<input type="hidden" value="' . csrf_token() . '" name="_token">';
//    echo '<input type="hidden" name=_method" value="PUT">';
//    echo '</form>';
//});
//
//
//Route::put('test', function(){
//    echo 'We have just updated!';
//});
//
//Route::delete('test', function(){
//    echo 'we delete you';
//});



Auth::routes();

Route::get('/home', 'HomeController@index');
