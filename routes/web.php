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

/*
|--------------------------------------------------------------------------
| Frontend
|--------------------------------------------------------------------------|
*/
// Authentification
Auth::routes();
// Home
Route::name('home')->get('/', 'Front\PostController@index');

Route::name('about')->get('/about', function () {
    //return view('welcome');
    return view('front/about');
});

Route::name('verify')->get('/verify', function () {
    //return view('welcome');
    return view('auth/verify');
});

// Contact
Route::name('contact')->get('/contact', function () {
    //return view('welcome');
    return view('front/contact');
});

Route::name('content')->get('/content', function () {
    //return view('welcome');
    return view('front/content');
});
Route::name('creative')->get('/creative', function () {
    //return view('welcome');
    return view('front/creative');
});

Route::name('consulting')->get('/consulting', function () {
    //return view('welcome');
    return view('front/consulting');
});
// Posts and comments
Route::prefix('posts')->namespace('Front')->group(function () {
    Route::name('posts.display')->get('{slug}', 'PostController@show');
    Route::name('posts.tag')->get('tag/{tag}', 'PostController@tag');
    Route::name('posts.search')->get('', 'PostController@search');
    Route::name('posts.comments.store')->post('{post}/comments', 'CommentController@store');
    Route::name('posts.comments.comments.store')->post('{post}/comments/{comment}/comments', 'CommentController@store');
    Route::name('posts.comments')->get('{post}/comments/{page}', 'CommentController@comments');
});

Route::resource('comments', 'Front\CommentController', [
    'only' => ['update', 'destroy'],
    'names' => ['destroy' => 'front.comments.destroy']
]);

Route::name('category')->get('category/{category}', 'Front\PostController@category');




/*
|--------------------------------------------------------------------------
| Backend
|--------------------------------------------------------------------------|
*/

Route::prefix('admin')->namespace('Back')->group(function () {

    Route::middleware('redac')->group(function () {

        Route::name('admin')->get('/', 'AdminController@index');

        // Posts
        Route::name('posts.seen')->put('posts/seen/{post}', 'PostController@updateSeen')->middleware('can:manage,post');
        Route::name('posts.active')->put('posts/active/{post}/{status?}', 'PostController@updateActive')->middleware('can:manage,post');
        Route::resource('posts', 'PostController');

        // Notifications
        Route::name('notifications.index')->get('notifications/{user}', 'NotificationController@index');
        Route::name('notifications.update')->put('notifications/{notification}', 'NotificationController@update');

        // Medias
        Route::view('medias', 'back.medias')->name('medias.index');

    });

    Route::middleware('admin')->group(function () {

        // Users
        Route::name('users.seen')->put('users/seen/{user}', 'UserController@updateSeen');
        Route::name('users.valid')->put('users/valid/{user}', 'UserController@updateValid');
        Route::resource('users', 'UserController', ['only' => [
            'index', 'edit', 'update', 'destroy'
        ]]);

        // Categories
        Route::resource('categories', 'CategoryController', ['except' => 'show']);

        // Contacts
        Route::name('contacts.seen')->put('contacts/seen/{contact}', 'ContactController@updateSeen');
        Route::resource('contacts', 'ContactController', ['only' => [
            'index', 'destroy'
        ]]);

        // Comments
        Route::name('comments.seen')->put('comments/seen/{comment}', 'CommentController@updateSeen');
        Route::resource('comments', 'CommentController', ['only' => [
            'index', 'destroy'
        ]]);

        // Settings
        Route::name('settings.edit')->get('settings', 'AdminController@settingsEdit');
        Route::name('settings.update')->put('settings', 'AdminController@settingsUpdate');

    });

});
