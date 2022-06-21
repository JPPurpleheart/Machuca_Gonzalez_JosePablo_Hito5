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
    return view('welcome');
});


/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::get('/admin/admin-users',                            'Admin\AdminUsersController@index');
    Route::get('/admin/admin-users/create',                     'Admin\AdminUsersController@create');
    Route::post('/admin/admin-users',                           'Admin\AdminUsersController@store');
    Route::get('/admin/admin-users/{adminUser}/edit',           'Admin\AdminUsersController@edit')->name('admin/admin-users/edit');
    Route::post('/admin/admin-users/{adminUser}',               'Admin\AdminUsersController@update')->name('admin/admin-users/update');
    Route::delete('/admin/admin-users/{adminUser}',             'Admin\AdminUsersController@destroy')->name('admin/admin-users/destroy');
    Route::get('/admin/admin-users/{adminUser}/resend-activation','Admin\AdminUsersController@resendActivationEmail')->name('admin/admin-users/resendActivationEmail');
});

/* Auto-generated profile routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::get('/admin/profile',                                'Admin\ProfileController@editProfile');
    Route::post('/admin/profile',                               'Admin\ProfileController@updateProfile');
    Route::get('/admin/password',                               'Admin\ProfileController@editPassword');
    Route::post('/admin/password',                              'Admin\ProfileController@updatePassword');
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::get('/admin/registered-users',                       'Admin\RegisteredUsersController@index');
    Route::get('/admin/registered-users/create',                'Admin\RegisteredUsersController@create');
    Route::post('/admin/registered-users',                      'Admin\RegisteredUsersController@store');
    Route::get('/admin/registered-users/{registeredUser}/edit', 'Admin\RegisteredUsersController@edit')->name('admin/registered-users/edit');
    Route::post('/admin/registered-users/bulk-destroy',         'Admin\RegisteredUsersController@bulkDestroy')->name('admin/registered-users/bulk-destroy');
    Route::post('/admin/registered-users/{registeredUser}',     'Admin\RegisteredUsersController@update')->name('admin/registered-users/update');
    Route::delete('/admin/registered-users/{registeredUser}',   'Admin\RegisteredUsersController@destroy')->name('admin/registered-users/destroy');
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::get('/admin/despensas',                              'Admin\DespensasController@index');
    Route::get('/admin/despensas/create',                       'Admin\DespensasController@create');
    Route::post('/admin/despensas',                             'Admin\DespensasController@store');
    Route::get('/admin/despensas/{despensa}/edit',              'Admin\DespensasController@edit')->name('admin/despensas/edit');
    Route::post('/admin/despensas/bulk-destroy',                'Admin\DespensasController@bulkDestroy')->name('admin/despensas/bulk-destroy');
    Route::post('/admin/despensas/{despensa}',                  'Admin\DespensasController@update')->name('admin/despensas/update');
    Route::delete('/admin/despensas/{despensa}',                'Admin\DespensasController@destroy')->name('admin/despensas/destroy');
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::get('/admin/recibes',                                'Admin\RecibesController@index');
    Route::get('/admin/recibes/create',                         'Admin\RecibesController@create');
    Route::post('/admin/recibes',                               'Admin\RecibesController@store');
    Route::get('/admin/recibes/{recibe}/edit',                  'Admin\RecibesController@edit')->name('admin/recibes/edit');
    Route::post('/admin/recibes/bulk-destroy',                  'Admin\RecibesController@bulkDestroy')->name('admin/recibes/bulk-destroy');
    Route::post('/admin/recibes/{recibe}',                      'Admin\RecibesController@update')->name('admin/recibes/update');
    Route::delete('/admin/recibes/{recibe}',                    'Admin\RecibesController@destroy')->name('admin/recibes/destroy');
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::get('/admin/editorials',                             'Admin\EditorialsController@index');
    Route::get('/admin/editorials/create',                      'Admin\EditorialsController@create');
    Route::post('/admin/editorials',                            'Admin\EditorialsController@store');
    Route::get('/admin/editorials/{editorial}/edit',            'Admin\EditorialsController@edit')->name('admin/editorials/edit');
    Route::post('/admin/editorials/bulk-destroy',               'Admin\EditorialsController@bulkDestroy')->name('admin/editorials/bulk-destroy');
    Route::post('/admin/editorials/{editorial}',                'Admin\EditorialsController@update')->name('admin/editorials/update');
    Route::delete('/admin/editorials/{editorial}',              'Admin\EditorialsController@destroy')->name('admin/editorials/destroy');
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::get('/admin/libros',                                 'Admin\LibrosController@index');
    Route::get('/admin/libros/create',                          'Admin\LibrosController@create');
    Route::post('/admin/libros',                                'Admin\LibrosController@store');
    Route::get('/admin/libros/{libro}/edit',                    'Admin\LibrosController@edit')->name('admin/libros/edit');
    Route::post('/admin/libros/bulk-destroy',                   'Admin\LibrosController@bulkDestroy')->name('admin/libros/bulk-destroy');
    Route::post('/admin/libros/{libro}',                        'Admin\LibrosController@update')->name('admin/libros/update');
    Route::delete('/admin/libros/{libro}',                      'Admin\LibrosController@destroy')->name('admin/libros/destroy');
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::get('/admin/prestamos',                              'Admin\PrestamosController@index');
    Route::get('/admin/prestamos/create',                       'Admin\PrestamosController@create');
    Route::post('/admin/prestamos',                             'Admin\PrestamosController@store');
    Route::get('/admin/prestamos/{prestamo}/edit',              'Admin\PrestamosController@edit')->name('admin/prestamos/edit');
    Route::post('/admin/prestamos/bulk-destroy',                'Admin\PrestamosController@bulkDestroy')->name('admin/prestamos/bulk-destroy');
    Route::post('/admin/prestamos/{prestamo}',                  'Admin\PrestamosController@update')->name('admin/prestamos/update');
    Route::delete('/admin/prestamos/{prestamo}',                'Admin\PrestamosController@destroy')->name('admin/prestamos/destroy');
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::get('/admin/tallas',                                 'Admin\TallasController@index');
    Route::get('/admin/tallas/create',                          'Admin\TallasController@create');
    Route::post('/admin/tallas',                                'Admin\TallasController@store');
    Route::get('/admin/tallas/{talla}/edit',                    'Admin\TallasController@edit')->name('admin/tallas/edit');
    Route::post('/admin/tallas/bulk-destroy',                   'Admin\TallasController@bulkDestroy')->name('admin/tallas/bulk-destroy');
    Route::post('/admin/tallas/{talla}',                        'Admin\TallasController@update')->name('admin/tallas/update');
    Route::delete('/admin/tallas/{talla}',                      'Admin\TallasController@destroy')->name('admin/tallas/destroy');
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::get('/admin/categorias',                             'Admin\CategoriasController@index');
    Route::get('/admin/categorias/create',                      'Admin\CategoriasController@create');
    Route::post('/admin/categorias',                            'Admin\CategoriasController@store');
    Route::get('/admin/categorias/{categorium}/edit',           'Admin\CategoriasController@edit')->name('admin/categorias/edit');
    Route::post('/admin/categorias/bulk-destroy',               'Admin\CategoriasController@bulkDestroy')->name('admin/categorias/bulk-destroy');
    Route::post('/admin/categorias/{categorium}',               'Admin\CategoriasController@update')->name('admin/categorias/update');
    Route::delete('/admin/categorias/{categorium}',             'Admin\CategoriasController@destroy')->name('admin/categorias/destroy');
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::get('/admin/roperos',                                'Admin\RoperosController@index');
    Route::get('/admin/roperos/create',                         'Admin\RoperosController@create');
    Route::post('/admin/roperos',                               'Admin\RoperosController@store');
    Route::get('/admin/roperos/{ropero}/edit',                  'Admin\RoperosController@edit')->name('admin/roperos/edit');
    Route::post('/admin/roperos/bulk-destroy',                  'Admin\RoperosController@bulkDestroy')->name('admin/roperos/bulk-destroy');
    Route::post('/admin/roperos/{ropero}',                      'Admin\RoperosController@update')->name('admin/roperos/update');
    Route::delete('/admin/roperos/{ropero}',                    'Admin\RoperosController@destroy')->name('admin/roperos/destroy');
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::get('/admin/folletos',                               'Admin\FolletosController@index');
    Route::get('/admin/folletos/create',                        'Admin\FolletosController@create');
    Route::post('/admin/folletos',                              'Admin\FolletosController@store');
    Route::get('/admin/folletos/{folleto}/edit',                'Admin\FolletosController@edit')->name('admin/folletos/edit');
    Route::post('/admin/folletos/bulk-destroy',                 'Admin\FolletosController@bulkDestroy')->name('admin/folletos/bulk-destroy');
    Route::post('/admin/folletos/{folleto}',                    'Admin\FolletosController@update')->name('admin/folletos/update');
    Route::delete('/admin/folletos/{folleto}',                  'Admin\FolletosController@destroy')->name('admin/folletos/destroy');
});