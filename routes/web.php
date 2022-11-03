<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TasksController;

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

Route::get('/', [TasksController::class, 'index']);
Route::resource('/mysample', 'App\Http\Controllers\MySampleResourceController');
Route::apiResource('/myapi', 'App\Http\Controllers\SampleApiResourceController');
/* Route::get('/tasks/create', [TasksContoller::class, 'create']); */
/* Route::post('/tasks', [TasksController::class, 'store']); */
/* Route::get('about', function () { */
/*     return view('about'); */
/* }); */
/* Route::get('product', function () { */
/*     return view('producs'); */
/* }); */
/* Route::get('services', function () { */
/*     return view('services'); */
/* }); */

/* // Fallback Routes */
/* Route::fallback(function () { */
/*     return 'Oops'; */
/* }); */


// Laravel's Controller/Method Reference Syntax
/* Route::get('/', 'WelcomeController@index'); */
/* Route::fet('/', [WelcomeController::class, 'index']); */

// HTTP verbs
/* Route::get('/', function () { */
/*     return 'Hello World'; */
/* }); */
/* Route::post('/', function () { */
/*     // Handle someone sending a POST request to this route */
/* }); */
/* Route::put('/', function () { */
/*     // Handle someone sending a PUT request to this route */
/* }); */
/* Route::delete('/', function () { */
/*     // Handle someone sending a DELETE request to this route */
/* }); */
/* Route::any('/', function () { */
/*     // Handle any verb request to this route */
/* }); */
/* Route::match(['get', 'post'], '/', function () { */
/*     // Handle GET or POST request to this route */
/* }); */
 
// Route Parameters
/* Route::get('users/{id}/friends', function ($id) { */
/*     // do something */
/* }); */
/* Route::get('users/{id}', function ($id = 'fallbackId') { */
/*     // do something */
/* }); */
// Regular expression route constraints
/* Route::get('users/{id}', function ($id) { */
/*     // */
/* })->where('id', '[0-9]+'); */
/* Route::get('users/{username}', function ($username) { */
/*     // */
/* })->where('username', '[A-Za-z]+'); */
/* Route::get('posts/{id}/{slug}', function ($id, $slug) { */

/* })->where(['id' => '[0-9]+', 'slug' => '[A-Za-z]+']); */

// Defining route names
/* Route::get('members/{id}', 'MembersController@show')->name('members.show'); */
// Linking the route in a view using the route() helper;
/* '<a href="<?php echo route('members.show', ['id' => 14]); ?>">' */

// Route Naming Conventions
// route('resourcePlural.action', ['var' => 'value'])

// users/userId/comments/commentId
// // http://myapp.com/users/1/comments/2
// route('users.comments.show', [1, 2])
// route('users.comments.show', ['userId' => 1, 'commentId' => 2])
// route('users.comments.show', ['commentId' => 2, 'userId' => 1])
// // http://myapp.com/users/1/comments/2?opt=a
// route('users.comments.show', ['userId' => 1, 'commentId' => 2, 'opt' => 'a'])

// Defining a route group
/* Route::get(function () { */
/*     Route::get('hello', function () { */
/*         return 'Hello'; */
/*     }); */
/*     Route::get('world', function () { */
/*         return 'World'; */
/*     }); */
/* }); */

// Restricting a group of routes to logged-in users only
/* Route::middleware('auth')->group(function () { */
/*     Route::get('dashboard', function () { */
/*         return view('dashboard'); */
/*     }); */
/*     Route::get('account', function () { */
/*         return view('account'); */
/*     }); */
/* }); */

// Applying the rate limiting middleware to a route
/* Route::middleware('auth:api', 'throttle:60,1')->group(function () { */
/*     Route::get('/profile', function () { */
/*         // */
/*     }); */
/* }); */

// Prefixing a group of routes
/* Route::prefix('dashboard')->group(function () { */
/*     Route::get('/', function () { */
/*         // Handles the path /dashborad */
/*     }); */
/*     Route::get('users', function () { */
/*         // Handles the path /dashboard/users */
/*     }); */
/* }); */

// Subdomain Routing
/* Route::domain('api.myapp.com')->group(function () { */
/*     Route::get('/', function () { */
/*         // */
/*     }); */
/* }); */
// Parameterized subdomain routing
/* Route::domain('{account}.myapp.com')->group(function () { */
/*     Route::get('/', function ($account) { */
/*         // */
/*     }); */
/*     Route::get('users/{id}', function ($account, $id) { */
/*         // */
/*     }); */
/* }); */

// Route group namespace prefixes
// App\Http\Controllers\UsersController
/* Route::get('/', 'UserController@index'); */
/* Route::namespace('Dashboard')->group(function () { */
/*     // App\Http\Controllers\Dashboard\PurchasesController */
/*     Route::get('dashboard/puchases', 'PurchasesController@index'); */
/* }); */

// Route group name prefixes
// // group route('users.comments.show', ['id' => value])
/* Route::name('users.')->prefix('users')->group(function () { */
/*     Route::name('comments')->prefix('comments')->group(function () { */
/*         Route::get('{id}', function () { */
/*             // */
/*         })->name('show'); */
/*     }); */
/* }); */

// Signing a Route
/* Route::get('invitations/{invitation}/{answer}', 'InvitationController') */
/*     ->name('invitations'); */
/* // Generate a normal link */ 
/* URL::route('invitations', ['invitation' => 12345, 'answer' => 'yes']); */
/* // Generate a signed link */
/* URL::signedRoute('invitations', ['invitations' => 12345, 'answer' => 'yes']); */
/* // Generate an expiring (temporary) signed link */
/* URL::temporarySignedRoute( */
/*     'invitations', */
/*     now()->addHours(4), */
/*     ['invitation' => 12345, 'answer' => 'yes'] */
/* ); */
/* // Modifying Routes to Allow Signed Links */
/* Route::get('invitations/{invitation}/{answer}', 'InvitationController') */
/*     ->name('invitations') */
/*     ->middleware('signed'); */

// Passing variables to views
/* // loads resources/views/taks/index.blade.php with a single variable named tasks */
/* // which contains the result of the Task::all() method */
/* Route::get('tasks', function () { */
/*     return view('tasks.index') */
/*         ->with('tasks', Task::all()); */
/* }); */

/* // Returns resources/views/welcome.blade.php */
/* Route::view('/', 'welcome'); */
/* // Passing simple data to Route::view() */
/* Route::view('/', 'welcome', ['User' => 'Michael']); */

// Route Model Binding
/* Route::get('/conferences/{id}', function ($id) { */
/*     $conference = Conference::findOrFail($id); */
/* }); */
// Implicit Route Model Binding
/* Route::get('conferences/{conference}', function (Conference $conference) { */
/*     return view('conferences.show')->with('conference', $conference); */
/* }); */




