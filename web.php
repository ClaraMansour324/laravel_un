<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\ExampleController;
use App\Http\Controllers\Userscontroller;
use App\Http\Controllers\CarController;
use App\Http\Controllers\PostController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//posts routes
route::get('createpost',[PostController::class,'create']);
route::post('storepost',[PostController:: class, 'store'])->name('storepost');
route:: get ('Posts',[PostController::class,'index']);



//car routes
route:: get ('createCar',[CarController::class,'create']);
route:: post('storeCar',[CarController:: class, 'store'])->name('storeCar');
route:: get ('Cars',[CarController::class,'index']);



route ::get('login', function(){
    return view('login');
});

route:: post('login',[Userscontroller:: class, 'store'])->name('logged');

// route ::post('login', function(){
//     return 'you are logged in';
// })->name('logged');

// route ::post('login', function(){
//     return view('');
// })->name('logged');

// route :: prefix('task2')->group(function(){
//     route ::get('about', function(){
//         return view('about');
//     });

//     route ::get('contact_us', function(){
//         return view('contact_us');
//     });
//     route::get('/blog/{subject}',function($sub){
//         return 'Your Subject is : ' . $sub;
//           })->whereIn('subject',['science', 'math', 'medical','sports']);
// });


            //lw 3aiza a5lih yrg3 ll page alasasia
// route :: fallback(function(){
//         return redirect('/');
//     });

// route::get('test',function(){
//     return'welcome to my first laravel website';
// });

// route::get('/test1/{id}',function($id){
//     return'your id is : '. $id;
// });

// route::get('/test2/{id?}',function($id = 1){
//     return'your id is : '. $id;
// });

// route::get('/test3/{id?}',function($id = 1){
//     return'your id is : '. $id;
// })->where (['id'=> '[0-9]+']);

// route::get('/test4/{id?}',function($id = 1){
//     return'your id is : '. $id;
// })->whereNumber ('id');

// route::get('/test5/{name?}',function($name = null){
//     return'your name is : '. $name;
// })->wherealpha ('name');

             // mommken mn 8er where  //[a-zA-Z]+//

// route::get('/test6/{id}/{name}',function($id, $name){
//     return 'your id is: '. $id .', and your name is : '. $name;
// })->where(['id'=> '[0-9]+', 'name' =>'[a-z]+']);

// route::get('/product/{category}',function($cat){
//     return 'the category is : '. $cat;
// })->whereIn('category',['pc', 'laptop', 'mobile']);

// route::get('test',function(){
//     return view('test');
// });

// route::get('food',function(){
//     return view('food');
// });

                //lw 3aiza a7ot options kter 
                
// route :: prefix('lar')->group(function(){
//     route::get('lec22',function(){
//         return view('food');
//     });

//     route::get('/',function(){
//         return view('test');
//     });

//     route::get('test',function(){
//         return'welcome to my first laravel website';
//     });
    
//     route::get('/test1/{id}',function($id){
//         return'your id is : '. $id;
//     });
    
//     route::get('/test2/{id?}',function(int $id = 1){
//         return'your id is : '. $id;
//     });
    
//     route::get('/test3/{id?}',function($id = 1){
//         return'your id is : '. $id;
//     })->where (['id'=> '[0-9]+']);
    
//     route::get('/test4/{id?}',function($id = 1){
//         return'your id is : '. $id;
//     })->whereNumber ('id');
    
//     route::get('/test5/{name?}',function($name = null){
//         return'your name is : '. $name;
//     })->wherealpha ('name');


                   // mommken mn 8er where  //[a-zA-Z]+//
    
//     route::get('/test6/{id}/{name}',function($id, $name){
//         return 'your id is: '. $id .', and your name is : '. $name;
//     })->where(['id'=> '[0-9]+', 'name' =>'[a-z]+']);
    
//     route::get('/product/{category}',function($cat){
//         return 'the category is : '. $cat;
//     })->whereIn('category',['pc', 'laptop', 'mobile']);
// });

