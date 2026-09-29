<?php

namespace App\Http\Controllers;

use App\Models\competition;
use App\Models\enroll_comps;
use App\Models\news;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class adminsecController extends Controller
{

// news work

function pgnews(){
        $news = News::with('user')->get();
   return view('admin.news', compact('news'));
    }

    function insertnews(Request $req){
$picname=$req->file('nimage')->store('newimage','public');
$path=basename($picname);
$data = [
        'title'    => $req->nhead,
        'news'     => $req->nnews,
        'tag'     => $req->ntag,
        'image'    => $path,
        'dealine' => $req->nexp,
        'user_id' => $req->nuid,
    ];

$response=news::create($data);
if($response){
    return redirect()->route('pgnews');
}
else{
     return redirect()->route('errorpage');
}

    }

function delnews($id){
$data=news::findorfail($id);
news::destroy($data->id);
  return redirect()->route('pgnews');
}

function edtnews($id){
     $data = news::with('user')->findOrFail($id);
    $users = User::all();
    return view("admin.edit_news", compact('data','users'));
}

function updtnews(Request $req, $id){
$data=news::findorFail($id);
$data->title=$req->nhead;
$data->news=$req->nnews;
$data->tag=$req->ntag;
$data->image=$req->nimage;
$data->dealine=$req->nexp;
$data->user_id=$req->nuid;
if($data->save()){
    return redirect()->route('pgnews');
}
else{
      return redirect()->route('errorpage');
}
}

// function uploadnews(){
// $data=news::all();
// return view('user.website', compact('data'));
// }  --->>>  UserController

function newsdtl($id){
$data=news::find($id);
return view('user.newsdetl', compact('data'));
}



// Competition work

    function comppg(){
        return view('admin.addcomp');
    }

function insertcomp(Request $req)
{
    $data = $req->validate([
        'title'        => 'required|string|max:255',
        'topic'        => 'required|string|max:255',
        'type'         => 'required|in:essay,story',
        'description'  => 'required|string',
        'first_prize'  => 'required|string',
        'second_prize' => 'required|string',
        'third_prize'  => 'required|string',
        'time'         => 'required|integer|min:1',
        'status'       => 'required|in:active,unactive',
        'deadline'     => 'required|date',
    ]);

    $res = competition::create($data);

    if ($res) {
        return redirect()->route('fetchcomp');
    }

    return back()->with(
        'error',
        'Competition could not be created.'
    );
}

function fetchcomp(){
    $data=competition::all();
    return view('admin.fetchcomp', compact('data'));
}


function editcomppg($id){
    $data=competition::find($id);

    return view('admin.edit_comp' , compact('data'));
}

function editcomp(Request $req, $id)
{
    $req->validate([
        'title'        => 'required|string|max:255',
        'topic'        => 'required|string|max:255',
        'type'         => 'required|in:essay,story',
        'description'  => 'required|string',
        'first_prize'  => 'required|string',
        'second_prize' => 'required|string',
        'third_prize'  => 'required|string',
        'time'         => 'required|integer|min:1',
        'status'       => 'required|in:active,unactive',
        'deadline'     => 'required|date',
    ]);

    $data = competition::findOrFail($id);

    $data->update([
        'title'        => $req->title,
        'topic'        => $req->topic,
        'type'         => $req->type,
        'description'  => $req->description,
        'first_prize'  => $req->first_prize,
        'second_prize' => $req->second_prize,
        'third_prize'  => $req->third_prize,
        'time'         => $req->time,
        'status'       => $req->status,
        'deadline'     => $req->deadline,
    ]);

    return redirect()->route('fetchcomp');
}

function delcomp($id){
$data=competition::findorfail($id);
competition::destroy($data->id);
  return redirect()->route('fetchcomp');
}


function allcomp(){
     $data=competition::all();
    return view('user.competition', compact('data'));
}

function enrollform($item_id)
{
    $user = Auth::user();

    $comp = competition::findOrFail($item_id);

    // Check competition status
    if ($comp->status !== 'active') {
        return redirect()
            ->route('allcomp')
            ->with('error', 'This competition is not active.');
    }

    // Check deadline
    if (now()->greaterThanOrEqualTo($comp->deadline)) {
        return redirect()
            ->route('allcomp')
            ->with('error', 'This competition has already ended.');
    }

    // Check duplicate enrollment
    $already = enroll_comps::where('user_id', Auth::id())
        ->where('competition_id', $comp->id)
        ->exists();

    if ($already) {
        return redirect()
            ->route('viewcomp')
            ->with('error', 'You have already enrolled in this competition.');
    }

    return view(
        'user.enrollform',
        compact('user', 'comp')
    );
}

function enrolledcomp(Request $req)
{
    $data = $req->validate([
        'competition_id' => 'required|integer',
        'text' => 'required|string',
    ]);

    $data['user_id'] = Auth::id();

    // Check if already enrolled
    $already = enroll_comps::where('user_id', Auth::id())
        ->where('competition_id', $data['competition_id'])
        ->exists();

    if ($already) {
        return back()->with(
            'error',
            'You have already enrolled in this competition.'
        );
    }

    // Find competition
    $comp = competition::findOrFail($data['competition_id']);

    // Check competition status
    if ($comp->status !== 'active') {
        return back()->with(
            'error',
            'This competition is not active.'
        );
    }

    // Check deadline
    if (now()->greaterThanOrEqualTo($comp->deadline)) {
        return back()->with(
            'error',
            'This competition has already ended.'
        );
    }

    // Enrollment information
    $data['enrolled_at'] = now();
    $data['status'] = 'not submitted';
    $data['pdf'] = null;
    $data['submitted_at'] = null;

    $enrolled = enroll_comps::create($data);

    // Redirect instead of directly returning the upload view
    return redirect()->route(
        'competition.work',
        $enrolled->id
    );
}


function competitionWork($id)
{
    $enrolled = enroll_comps::where('id', $id)
        ->where('user_id', Auth::id())
        ->with('competition')
        ->firstOrFail();

    $comp = $enrolled->competition;

    if (!$comp) {
        return redirect()
            ->route('viewcomp')
            ->with('error', 'Competition information could not be found.');
    }

    // If deadline has passed and user did not submit
    if (
        $enrolled->status !== 'submitted'
        &&
        now()->greaterThanOrEqualTo($comp->deadline)
    ) {
        $enrolled->status = 'not submitted';
        $enrolled->pdf = null;
        $enrolled->submitted_at = null;
        $enrolled->save();
    }

    return view(
        'user.competition_upload',
        compact('comp', 'enrolled')
    );
}

function submitCompetition(Request $req)
{
    $req->validate([
        'enrollment_id' => 'required|integer',
        'pdf' => 'required|file|mimes:pdf|max:10240',
    ]);

    $enrolled = enroll_comps::where('id', $req->enrollment_id)
        ->where('user_id', Auth::id())
        ->with('competition')
        ->firstOrFail();

    $comp = $enrolled->competition;

    // Deadline check
    if (now()->greaterThanOrEqualTo($comp->deadline)) {

        $enrolled->status = 'not submitted';
        $enrolled->pdf = null;
        $enrolled->submitted_at = null;
        $enrolled->save();

        return back()->with(
            'error',
            'Competition deadline has ended. Submission is closed.'
        );
    }

    // Already submitted
    if ($enrolled->status === 'submitted') {
        return back()->with(
            'error',
            'You have already submitted your work.'
        );
    }

    $file = $req->file('pdf');

    $filename = time() . '_' . $file->getClientOriginalName();

    $file->storeAs(
        'competition_files',
        $filename,
        'public'
    );

    $enrolled->pdf = $filename;
    $enrolled->status = 'submitted';
    $enrolled->submitted_at = now();
    $enrolled->save();

    return back()->with(
        'success',
        'Your competition work has been submitted successfully.'
    );
}

function viewcomp()
{
    $enrolled = enroll_comps::where('user_id', Auth::id())
        ->with('competition')
        ->orderBy('enrolled_at', 'desc')
        ->get();

    foreach ($enrolled as $item) {

        if (
            $item->competition
            &&
            !in_array($item->status, ['submitted', 'win', 'lose'])
            &&
            now()->greaterThanOrEqualTo($item->competition->deadline)
        ) {

            $item->status = 'not submitted';
            $item->pdf = null;
            $item->submitted_at = null;
            $item->save();
        }
    }

    return view(
        'user.enrolled_competitions',
        compact('enrolled')
    );
}


function adminEnrollments()
{
    $enrollments = enroll_comps::with(['user', 'competition'])
        ->get();

    foreach ($enrollments as $item) {

        if (
            !in_array($item->status, ['submitted', 'win', 'lose'])
            &&
            now()->greaterThanOrEqualTo($item->competition->deadline)
        ) {

            $item->status = 'not submitted';
            $item->pdf = null;
            $item->submitted_at = null;
            $item->save();
        }
    }

    return view('admin.enrollments', compact('enrollments'));
}

function result($id){
    $data=enroll_comps::find($id);
    return view('admin.result', compact('data'));
}

function resultannounce(Request $req, $id){

    $req->validate([
        'status' => 'required|in:win,lose',
        'prize' => 'required|string',
    ]);

    $data = enroll_comps::findOrFail($id);

    $data->status = $req->status;
    $data->prize = $req->prize;

    if ($data->save()) {
        return redirect()->route('admin.enrollments');
    }

      return redirect()->route('errorpage');
}

}
