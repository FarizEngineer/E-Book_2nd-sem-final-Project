<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\adminsecController;
use App\Http\Controllers\userController;
use App\Http\Controllers\authController;
use Illuminate\Support\Facades\Route;

Route::middleware(['userauth'])->group(function(){


  // user
Route::get('/alluser',[authController::class,'fatch'])->name('userfatch');
Route::get('delete/user{id}',[authController::class,'delete'])->name('deletuser');
Route::get('/edit/user{id}',[authController::class,'edit'])->name('useredit');
Route::post('/update/user{id}',[authController::class,'update'])->name('updated');

//books upload all routing
Route::get('/books',[adminController::class,'book'])->name('book');
Route::post('/book_upload',[adminController::class,'bookupload'])->name('bookupload');
Route::get('/upload',[adminController::class,'select_cat_auth'])->name('select');
Route::get('all_books',[adminController::class,'book_fatch'])->name('bookfatch');
Route::get('delete/book{id}',[adminController::class,'deletebook'])->name('deletebook');
Route::get('/edit/book{id}',[adminController::class,'editbook'])->name('editbook');
Route::post('/update/book{id}',[adminController::class,'updatebook'])->name('updatebook');

//category
Route::get('/insertcat',[adminController::class,'category'])->name('insert');
Route::post('/category',[adminController::class,'insertcategory'])->name('insertcategory');
Route::get('/allcategory',[adminController::class,'fatch'])->name('fatchcategory');
Route::get('delete/category{id}',[adminController::class,'delete'])->name('deletcategory');
Route::get('/edit/category{id}',[adminController::class,'edit'])->name('editcategory');
Route::post('/update/category{id}',[adminController::class,'update'])->name('updatecategory');

//author
Route::get('/insertauthor',[adminController::class,'author'])->name('author');
Route::post('/addauthor',[adminController::class,'addauthor'])->name('addauthor');
Route::get('/allauthor',[adminController::class,'fatchauthor'])->name('allauthor');
Route::get('delete/author{id}',[adminController::class,'deleteauthor'])->name('deletauthor');
Route::get('/edit/author{id}',[adminController::class,'editauthor'])->name('editauthor');
Route::post('/update/author{id}',[adminController::class,'updateauthor'])->name('updateauthor');

//admin dashboard routing
Route::get('/admin',[adminController::class,'dashboard'])->name('dashboard');

//order create
Route::post('/order_detail',[userController::class,'order'])->name('order');
//orders shows on users
Route::get('/allorder',[userController::class,'all_order'])->name('allorder');
//orders shows on admin
Route::get('/admin/orders', [adminController::class, 'fatch_orders'])->name('adminorders');
//order complete detail on admin
Route::get('/complete/detail{id}',[adminController::class,'all_order_deatil'])->name('detail');
//orders status update
Route::post('/order_status{id}',[adminController::class,'update_order'])->name('update.order');
//pdf access
Route::get('/pdf_access{id}',[userController::class,'pdf'])->name('pdf_access');
//payments routes
Route::post('/payment',[userController::class,'payment'])->name('payment');
//payment order fatch
Route::get('/allorder_credit{id}',[userController::class,'credit'])->name('credit');
Route::get('/allorder_cod{id}',[userController::class,'cod'])->name('cod');
// Remaining Order routes
Route::get('/confirmed/orders',[adminController::class,'conforder'])->name('conforder');
Route::get('/pending/orders',[adminController::class,'pendorder'])->name('pendorder');
Route::get('/cancel/orders',[adminController::class,'cancelorder'])->name('cancelorder');

// News work
// page & fecth inside dashboard
Route::get('/Insert/news',[adminsecController::class,'pgnews'])->name('pgnews');
// Insert news
Route::post('news/inserted',[adminsecController::class,'insertnews'])->name('insertnews');
// Delete news Route
Route::get('/delete/news/{id}',[adminsecController::class,'delnews'])->name('delnews');
// Edit news page route
Route::get('/edit/news/{id}', [adminsecController::class,'edtnews'])->name('edtnews');
// Update news route
Route::post('News/update/{id}',[adminsecController::class,'updtnews'])->name('updtnews');
// Upload news
Route::get('/upload/news',[adminsecController::class,'uploadnews'])->name('uploadnews');

// Competition routes
Route::get('/Insert/Competition/page',[adminsecController::class,'comppg'])->name('comppg');
Route::post('/Competition/inserted',[adminsecController::class,'insertcomp'])->name('insertcomp');
Route::get('/fetch/competitions',[adminsecController::class,'fetchcomp'])->name('fetchcomp');
Route::get('/Edit/competition/page/{id}',[adminsecController::class,'editcomppg'])->name('editcomppg');
Route::post('/edit/competition/{id}',[adminsecController::class,'editcomp'])->name('editcomp');
Route::get('/delete/competition/{id}',[adminsecController::class,'delcomp'])->name('delcomp');


});

// news detail page route
Route::get('news/detail/page/{id}',[adminsecController::class,'newsdtl'])->name('newsdtl');


//user
Route::get('/login',[authController::class,'loginform'])->name('loginform');
Route::post('/login',[authController::class,'login'])->name('login');
Route::post('/logout',[authController::class,'logout'])->name('logout');
Route::get('/user/profile',[authController::class,'profile'])->middleware('admincomp')->name('profile');
Route::get('/author/profile/{id}',[authController::class,'authprofile'])->middleware('admincomp')->name('authprofile');

//user
Route::get('/',[authController::class,'regform'])->name('adduser');
Route::post('/userreg',[authController::class,'register'])->name('userregister');


// Author
Route::get('Author/book/upload/page',[userController::class,'authbkupld'])->middleware('admincomp')->name('authbkupld');
Route::post('/book_upload/by/author',[userController::class,'authbookupload'])->middleware('admincomp')->name('authbookupload');

//add to cart working
Route::post('/add_to_cart',[userController::class,'addtocart'])->name('addtocart');


//   MAIN ROUTE

//book showing || all content fo home page (website)
Route::get('/readsphere/website',[userController::class,'book_showing'])->name('bookshows');


//book shop detail
Route::get('books/detail{id}',[userController::class,'book_detail'])->name('booksdetail');
//checkout



//website href route
Route::get('/web',[userController::class,'web'])->name('web');
Route::get('/cat',[userController::class,'cat'])->name('category');
Route::get('/shop',[userController::class,'shop'])->name('shop');
Route::get('/myorders',[userController::class,'myorders'])->name('myorders');
Route::get('/checkout',[userController::class,'checkout'])->name('checkout');
Route::get('/author',[userController::class,'author'])->name('author');
Route::get('/about',[userController::class,'about'])->name('about');
Route::get('/contact',[userController::class,'contact'])->name('contact');
Route::get('/whishlist',[userController::class,'whishlist'])->name('whishlist');
Route::get('/blog',[userController::class,'blog'])->name('blog');
Route::get('/faq',[userController::class,'faq'])->name('faq');
Route::get('/error',[userController::class,'error'])->name('error');
Route::get('/shop_list',[userController::class,'shop_list'])->name('shop_list');
//add to cart
Route::post('/addtocart',[userController::class,'add_to_cart'])->name('add_to_cart');
Route::get('/alladdtocart',[userController::class,'fatchcart'])->name('allcarts');
Route::get('delete/cart{id}',[userController::class,'deletecart'])->name('deletcart');

//count all add to cart
Route::get('/count_all',[userController::class,'count_cart'])->name('count');
// click shop icon to show all added cart
Route::get('/all_add_carts',[userController::class,'all_added_cart'])->name('added');


//checkout
Route::get('/checkout{id}/{cid}',[userController::class,'checkout_book'])->name('checkout_book');





// USER COMPETITION ROUTES

Route::get('/All/competitions',
    [adminsecController::class,'allcomp'])
    ->name('allcomp');

Route::get('/enrollment/form/{item_id}',
    [adminsecController::class,'enrollform'])
    ->name('enrollform');

Route::post('/competition/enroll',
    [adminsecController::class,'enrolledcomp'])
    ->name('competition.enroll');

Route::get('/competition/work/{id}',
    [adminsecController::class,'competitionWork'])
    ->name('competition.work');

Route::post('/competition/submit',
    [adminsecController::class,'submitCompetition'])
    ->middleware('usercomp')
    ->name('competition.submit');

Route::get('/view/comp',[adminsecController::class,'viewcomp'])->name('viewcomp')->middleware('usercomp');

    Route::get('/admin/enrollments',[adminsecController::class, 'adminEnrollments'])->name('admin.enrollments');


// result route
Route::get('/announce/result/page/{id}',[adminsecCOntroller::class,'result'])->middleware('usercomp')->name('result');
// Update result route
Route::post('/result/announced/{id}',[adminsecController::class,'resultannounce'])->name('resultannounce');


// Error Page
Route::get('/Error/try/again',[adminController::class,'errorpage'])->name('errorpage');

