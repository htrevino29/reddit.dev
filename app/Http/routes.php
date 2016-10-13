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

Route::get('/', 'HomeController@showWelcome');

Route::get('/uppercase/{word?}', 'HomeController@uppercase');

Route::get('/increment/{number?}', 'HomeController@increment');

Route::resource('posts', 'PostsController');

Route::get('orm-test', function ()
{
    $post1 = new \App\Models\Post();
    $post1->title = 'Eloquent is awesome!';
    $post1->url='https://laravel.com/docs/5.1/eloquent';
    $post1->content  = 'It is super easy to create a new post.';
    $post1->created_by = 1;
    $post1->save();

    $post2 = new \App\Models\Post();
    $post2->title = 'Eloquent is really easy!';
    $post2->url='https://laravel.com/docs/5.1/eloquent';
    $post2->content = 'It is super easy to create a new post.';
    $post2->created_by = 1;
    $post2->save();
});










Route::get('/sayhello/{name?}', function ($name = 'Lassen') {
    $data = array('name' => $name);
    return view('my-first-view')->with($data);
});

// ==================================== exercise 1 =====================================




// route to uppercase word given












// route to add one to number given
// route to add the two numbers given together
Route::get('/add/{a?}/{b?}', function($a = 2, $b = 2) {
  
    return ($a + $b);
});

// =========================================================================================

Route::get('/rolldice/{guess?}', function($guess = 1) {
    $data['dice_roll'] = mt_rand(1, 6);
    $data['guess'] = $guess;
    $data['correct'] = ($data['dice_roll'] == $data['guess']);
    return view('roll-dice')->with($data);
});


















