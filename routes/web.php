<?php

use Illuminate\Support\Facades\Route;
use App\Models\Idea;

// Index
Route::get('/ideas', function () {
    $ideas = Idea::all();

    return view('ideas.index', [
        'ideas' => $ideas
    ]);
});

// Show
Route::get('/ideas/{idea}', function (Idea $idea) {
    return view('ideas.show', [
        'idea' => $idea
    ]);
});

// Edit
Route::get('/ideas/{idea}/edit', function (Idea $idea) {
    return view('ideas.edit', [
        'idea' => $idea
    ]);
});

// Update
Route::patch('/ideas/{idea}', function (Idea $idea) {
    $idea->update([
        'description' => request('description')
    ]);

    return redirect('/ideas/' . $idea->id);
});

// Store
Route::post('/ideas', function () {
    Idea::create([
        'description' => request('description'),
        'state' => 'pending'
    ]);
    return redirect('/ideas');

});

// Destroy
Route::delete('/ideas/{idea}', function (Idea $idea) {
    $idea->delete();
    return redirect('/ideas');

});
