<?php


use App\Models\Announcement;
use App\Models\Order;
use App\Models\Posts;
use App\Models\Song;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/charts', function () {
    return view('charts');
});

Route::get('/stats', function () {
    return view('stats');
});

Route::get('/announcement', function () {
    $announcement = Announcement::first();

    abort_if(!$announcement->isActive, 404);

    return view('announcement', [
        'announcement' => $announcement
    ]);
});


Route::get('/announcement/edit', function () {
    $announcement = Announcement::first();

    return view('edit-announcement', [
        'announcement' => $announcement
    ]);
});

Route::patch('/announcement/update', function (Request $request) {

  $fields = $request->validate([
      'isActive' => 'required|boolean',
      'bannerText' => 'required|string|max:255',
      'bannerColor' => 'required|string|max:7',
      'titleText' => 'required|string|max:255',
      'titleColor' => 'required|string|max:7',
      'content' => 'required|string',
      'buttonText' => 'required|string|max:255',
      'buttonLink' => 'required|url',
      'imageUpload' => 'required|file|max:20000|mimes:jpeg,jpg,png',

   ]);

        $file=$request->file('imageUpload');


        $destinationPath = storage_path('app/public/images');
        $filename = $file->getClientOriginalName();
        $path = $file->move($destinationPath, $filename);

        $fields['imageUpload'] = 'images/'.$filename;






    $announcement = Announcement::first();


    $announcement->update($fields);


    $announcement->save();


    return back()->with('success_message', 'Announcement was updated!');
});

Route::get('/posts/index', function() {

    $posts = Posts::latest()->get();

    return view('posts.index', [
        'posts' => $posts
    ]);
});

Route::get('/posts/create', function () {

    return view('posts.create');

});

Route::post('/posts/create', function (Request $request) {
  $validated = $request->validate([
        'title' => 'required|string|max:255',
        'body' => 'required|string|max:255'
    ]);

    Posts::create([
        'title' => $validated['title'],
        'body' => $validated['body'],
    ]);
    return redirect()->back()->with('success_message', 'Post created successfully');
});

Route::get('/posts/edit/{id}', function($id, Request $request) {

    $posts = Posts::find($id);

    return view('posts.edit', [
        'posts' => $posts
    ]);

});

Route::patch('/posts/edit/{id}', function ($id, Request $request){

    $validated = $request->validate([
        'title' => 'required|string|max:255'
    ]);
    $posts = Posts::find($id);
    $posts->update([
        'title' => $validated['title']
    ]);
    $posts->save();

    return back()->with('success_message', 'Post edited successfully!');

})->name('posts.edit');

Route::get('/drag/drop', function() {
    return view('drag-drop');
});


