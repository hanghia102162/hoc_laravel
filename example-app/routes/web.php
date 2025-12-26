    <?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\Usercontroller;
    use App\Http\Controllers\HomeController;


    Route::get('/', function () {
        return view('welcome');
    })->name('home');
    // Route::get('/about', function () {
    //     return view('aboute');
    // })->name('about');
    // Route::get('user/{id}', function (int $id) {
    //     return "ID: $id";
    // }) ->name('user');
    // Route::get('user/{name?}', function (?string $name = "nghia dev") {
    //     return "NAme: {$name}";
    // });

    // // nhom
    // Route::prefix('admin')->group(function () {
    //     Route::get('dashboard', function () {
    //         return "Admin Dashboard";
    //     })->name('admin.dashboard');
    //     Route::get('users', function () {
    //         return "Admin Users";
    //     })->name('admin.users');
    // });

    // Route::middleware(['auth'])->group(function () {
    //     Route::get('/profile', function () {
    //         return "User Profile";
    //     })->name('profile');
    //     Route::get('/settings', function () {
    //         return "User Settings";
    //     })->name('settings');
    // });
    // // loi 404
    // Route::fallback(function () {
    //     return view('404');  
    // });

    // bai3 -4
    // Route::get('/user', [UserController::class, 'index'])->middleware('access.time');

    //bai5
    Route::get('/home', [HomeController::class, 'index']);
    //bai6
    Route::get('/about', [HomeController::class, 'about']);
    Route::middleware('auth')->controller(HomeController::class)->group(function () {
        Route::get('/home', 'index')->middleware('auth');
        Route::get('/about', 'about');
    });
    Route::get(('/Login'),function(){
        return 'Login Page';
    })->name('login');

    // Route::resource('users',Usercontroller::class);
    // bài 7
    Route::prefix('users')->controller(Usercontroller::class)
    ->name('users.')->group(function () {

    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/', 'store')->name('store'); // 👈 POST /users
});
