<?php

namespace App\Http\Controllers;

use App\Models\author;
use App\Models\book;
use App\Models\category;
use App\Models\order;
use App\Models\payment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class adminController extends Controller
{



        function dashboard(){
$books=book::count();
$cat=category::count();
$orders=order::count();
$authors=User::where('role','author')->count();
$allauthors=User::where('role','author')->get();
$admin=Auth::user();

        return view('admin.dashboard' , compact('books','cat','orders','authors','allauthors','admin'));
    }



      // categories functions
    function category(){
        return view('admin.insertcat');
    }
    function insertcategory(Request $request){
        $request->validate([
            "catname"=>"required",
            "description"=>"required"

        ]);
$category=new category();
$category->name=$request->catname;
$category->description=$request->description;

if($category->save()){
    return redirect()->route('fatchcategory')->with('success',"Category has been created, successfuly...");
}
else{
    return redirect()->route('errorpage');
}
    }

    function fatch(){
        $allcategory=category::all();
        return view('admin.fatchcat',compact('allcategory'));

    }
    function delete($id){
        $user=category::find($id);
    category::destroy($user->id);
     return redirect()->route('fatchcategory')->with('success',"Category has been deleted, successfuly...");
    }
   function edit($id){
    $data=category::find($id);
    return view('admin.editcat',compact('data'));
   }
   function update($id,Request $request){
    $data=category::find($id);
      $data->name=$request->catname;
         $data->description=$request->description;

         if($data->save()){
     return redirect()->route('fatchcategory')->with('success',"Category has been updated, successfuly");

         }
         else{
     return redirect()->route('errorpage');
}}



//author functions
  function author(){
        return view('admin.authorinsert');
    }
    function addauthor(Request $request){
        $request->validate([
            "authorname"=>"required",
            "detail"=>"required"

        ]);
$author=new author();
$author->name=$request->authorname;
$author->detail=$request->detail;

if($author->save()){
    return redirect()->route('allauthor')->with('success',"The role has been changed to AUTHOR");
}
else{
  return redirect()->route('errorpage');
}
    }
    function fatchauthor(){
        $allauthor=author::all();
        return view('admin.authorfatch',compact('allauthor'));

    }
    function deleteauthor($id){
        $user=author::find($id);
    author::destroy($user->id);
     return redirect()->route('allauthor')->with('success',"AUTHOR IS DELETED");
    }
   function editauthor($id){
    $data=author::find($id);
    return view('admin.authoredit',compact('data'));
   }
   function updateauthor($id,Request $request){
    $data=author::find($id);
      $data->name=$request->authorname;
         $data->detail=$request->detail;

         if($data->save()){
     return redirect()->route('allauthor')->with('success',"AUTHOR IS UPDATED");

         }
         else{
     return redirect()->route('errorpage');
}}


//book_upload
function book(){
    return redirect()->route('select');
}

function bookupload(Request $request){
        $request->validate([
            "book_title"=>"required",
            "book_price"=>"required",
            "book_stock"=>"required",
            "book_pdf"=>"required",
            "book_image"=>"required",
            "category_name"=>"required",
            "author_name"=>"required",
            "description"=>"required",

        ]);
$pdf=$request->file("book_pdf")->store("books","public");
$pic=$request->file("book_image")->store("books_pics","public");
$pdfpath=basename($pdf);
$picpath=basename($pic);

$book=new book();
$book->title=$request->book_title;
$book->price=$request->book_price;
$book->stock=$request->book_stock;
$book->pdf=$pdfpath;
$book->image=$picpath;
$book->description=$request->description;
$book->category_id=$request->category_name;
$book->author_id=$request->author_name;


if($book->save()){
    return redirect()->route('bookfatch')->with('success',"Book has been uploaded, Successfuly...");

}
else{
    return redirect()->route('errorpage');
}


    }
    function book_fatch(){
        $all_book=book::with(['book_category','book_author'])->get();
         return view('admin.book_fatch',compact('all_book'));
//return $all_book;
    }

      function deletebook($id){
        $user=book::find($id);
    book::destroy($user->id);
     return redirect()->route('bookfatch')->with('success',"Book has been deleted");
    }

   function editbook($id){
    $data=book::find($id);
  $selectcat=category::all();
          $selectauth = User::where('role', 'author')->get();
    return view('admin.book_edit',compact('data','selectcat','selectauth'));
   }

   function updatebook($id,Request $request){
    $pdf=$request->file("book_pdf")->store("books","public");
$pic=$request->file("book_image")->store("books_pics","public");
$pdfpath=basename($pdf);
$picpath=basename($pic);

    $book=book::find($id);
      $book->title=$request->book_title;
$book->price=$request->book_price;
$book->stock=$request->book_stock;
$book->pdf=$pdfpath;
$book->image=$picpath;
$book->description=$request->description;
$book->category_id=$request->category_name;
$book->author_id=$request->author_name;

         if($book->save()){
     return redirect()->route('bookfatch')->with('success',"Book has been updated, Successfuly...");

         }
         else{
    return redirect()->route('errorpage');
}}


    //select category and author function
           function select_cat_auth(){
        $selectcat=category::all();
      $selectauth = User::where('role', 'author')->get();
   return view('admin.bookupload',compact('selectcat','selectauth'));



    }

function fatch_orders(){
    $orders=order::with(['user_order','book_order'])->latest()->get();
   return view('admin.orders',compact('orders'));
 //return $orders;
    }

    // complete orders detail
function all_order_deatil($id,){
     $order=order::with(['user_order','book_order'])->find($id);
      $order2 = payment::with(['order_payment'])->where('order_id', $id)->first();
  return view('admin.order_detail',compact('order','order2'));
     return $order2;}


//order status update
   function update_order($id,Request $request){
    $data=order::find($id);
      $data->status=$request->order_status;

if($request->order_status=='cancel'){
    order::destroy($data->id);
}

         if($data->save()){
     return redirect()->route('adminorders');

         }
         else{
    return redirect()->route('errorpage');
}}


function conforder(){
    $confirm=order::where('status','confirm')->get();
  return view('admin.con_orders',compact('confirm'));
}

function pendorder(){
    $confirm=order::where('status','pending')->get();
  return view('admin.pendorders',compact('confirm'));
    }

// function cancelorder()
// {
//     $confirm = order::where('status', 'cancel')->get();
//     foreach ($confirm as $order) {
//         order::destroy($order->id);
//     }
//     return redirect()->route('cancelorder');
// }
  

function errorpage(){
    return view('user.404_error');
}

}
