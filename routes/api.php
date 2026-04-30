Route::get('/hello', function () {
    return response()->json([
        'message' => 'Hello Indah!'
    ]);
});