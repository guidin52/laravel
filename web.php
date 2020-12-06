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

Route::get('/', function () {
    $helloWorld = 'Hello World';

    return view('welcome', compact('helloWorld'));
});

Route::get('/model', function () {
//    $products = \App\Product::all(); //select * from products

//  $user = new \App\User();
//    $user = \App\User::find(1);
//    $user->name = 'Usuário Teste Editado...';
  
//    $user->save();
//    return 

//    $user = \App\User::create([
//        'name' => 'Guilherme Ribeiro',
//        'email' => 'email0410@email.com',
//       'password' => bcrypt('123345566')
//    ]);
//
//  $loja = \App\Store::find(1);
//  dd($loja->products());
    
//    $user = \App\User::find(10);
//    $store = $user->store()->create([
//        'name' => 'Loja Teste',
//        'description' => 'Loja Teste de produtos de informatica',
//        'mobile_phone' => 'XX-xXXXX-XXXX',
//        'phone' => 'xx-xxxxx-xxxx',
//        'slug' => 'Loja Teste'
//    ]);
 
//    \App\Category::create([
//        'name' => 'Games',
//       'slug' => 'games'
//    ]);

//   \App\Category::create([
//        'name' => 'Notebooks',
//        'slug' => 'notebooks'
//    ]);

// return \App\Category::all();

    return \App\User::all();
});

Route::get('/admin/stores', 'Admin\\StoreController@index');
Route::get('/admin/stores/create', 'Admin\\StoreController@create');
Route::post('/admin/stores/store', 'Admin\\StoreController@store');