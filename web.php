<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\Userscontroller;
use App\Http\Controllers\CarController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;


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
route:: get ('Posts',[PostController::class,'index'])->name('posts');

route::get('editPost/{id}',[PostController::class,'edit'])->name('editPost');
route::put('updatePost/{id}',[PostController::class,'update'])->name('updatePost');
route::get('showPost/{id}',[PostController::class,'show'])->name('showPost');
route::get('deletePost/{id}',[PostController::class,'destroy']);
route::get('trashedposts',[PostController::class,'trashed'])->name('trashedposts');
route::get('forceDeleteposts/{id}',[PostController::class,'forceDelete'])->name('forceDeleteposts');
route::get('restorePost/{id}',[PostController::class,'restore'])->name('restorePost');





//car routes
route:: get ('createCar',[CarController::class,'create'])->middleware('verified')->name('createCar');
route:: post('storeCar',[CarController:: class, 'store'])->name('storeCar');
route:: get ('Cars',[CarController::class,'index']);
route::get('updateCar/{id}',[CarController::class,'edit'])->name('updateCar');
route::put('update/{id}',[CarController::class,'update'])->name('update');
route::get('showCar/{id}',[CarController::class,'show'])->name('showCar');
route::get('deleteCar/{id}',[CarController::class,'destroy']);
route::get('trashed',[CarController::class,'trashed'])->name('trashed'); 
route::get('forceDelete/{id}',[CarController::class,'forceDelete'])->name('forceDelete'); 
route::get('restoreCar/{id}',[CarController::class,'restore'])->name('restoreCar');
 
route::post('uploadimage',[ExampleController::class,'upload'])->name('uploadimage'); 

route::get('test20',[ExampleController::class,'createSession'])->name('createSession'); 


route ::get('login', function(){
    return view('login');
});

route:: post('login',[Userscontroller:: class, 'store'])->name('logged');

route::post('uploadimage',[ExampleController::class,'upload'])->name('uploadimage'); 




route:: post('contact_mail',[HomeController::class,'contact_mail_send']);

route::get('test',function(){
    return view('test');
});
route::get('images',function(){
    return view('images');
});

route::get('testHome',function(){
    return view('testHome');
});

route::get('contact',function(){
    return view('contact');
})->name('contact');

route::get('404',function(){
    return view('404');
})->name('404');

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


Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
