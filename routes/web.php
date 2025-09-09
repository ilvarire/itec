<?php

use App\Livewire\Home;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use App\Livewire\Settings\Projects;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

// Route::get('/', function () {
//     return view('home');
// })->name('home');

Route::get('/', Home::class)->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/projects', Projects::class)->name('settings.projects');
    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');


    Route::get('/customer/files/agreement/{agreement}', function ($agreement) {
        // Ensure the URL is signed and valid

        if (!request()->hasValidSignature()) {
            abort(403, 'Invalid or expired URL');
        }

        // Get the authenticated user
        $user = Auth::user();

        // Find the agreement in the database (assuming you have an Agreement model)
        $agreementRecord = Project::where('agreement', $agreement)
            ->where('user_id', $user->id)
            ->first();


        if (!$agreementRecord) {
            abort(404, 'File not found');
        }

        // The path to the agreement file (relative to the storage/app directory)
        $path = storage_path('app/private/user/' . $agreementRecord->agreement); // Assuming the file path is stored in the 'file_path' column

        // Check if the file exists
        if (file_exists($path)) {
            return response()->file($path, [
                'Content-Type' => 'application/pdf', // Change to appropriate type if not PDF
                'Content-Disposition' => 'inline; filename="' . basename($path) . '"', // Display in the browser
            ]);
        }

        // If the file does not exist, return a 404 error
        abort(404, 'File not found.');
    })->name('agreement');

    Route::get('/customer/files/prd/{prd}', function ($prd) {
        // Ensure the URL is signed and valid

        if (!request()->hasValidSignature()) {
            abort(403, 'Invalid or expired URL');
        }

        // Get the authenticated user
        $user = Auth::user();

        // Find the prd in the database (assuming you have an prd model)
        $prdRecord = Project::where('prd', $prd)
            ->where('user_id', $user->id)
            ->first();


        if (!$prdRecord) {
            abort(404, 'File not found');
        }

        // The path to the prd file (relative to the storage/app directory)
        $path = storage_path('app/private/user/' . $prdRecord->prd); // Assuming the file path is stored in the 'file_path' column

        // Check if the file exists
        if (file_exists($path)) {
            return response()->file($path, [
                'Content-Type' => 'application/pdf', // Change to appropriate type if not PDF
                'Content-Disposition' => 'inline; filename="' . basename($path) . '"', // Display in the browser
            ]);
        }

        // If the file does not exist, return a 404 error
        abort(404, 'File not found.');
    })->name('prd');

    Route::get('/customer/files/docs/{docs}', function ($docs) {
        // Ensure the URL is signed and valid

        if (!request()->hasValidSignature()) {
            abort(403, 'Invalid or expired URL');
        }

        // Get the authenticated user
        $user = Auth::user();

        // Find the docs in the database (assuming you have an docs model)
        $docsRecord = Project::where('docs', $docs)
            ->where('user_id', $user->id)
            ->first();


        if (!$docsRecord) {
            abort(404, 'File not found');
        }

        // The path to the docs file (relative to the storage/app directory)
        $path = storage_path('app/private/user/' . $docsRecord->docs); // Assuming the file path is stored in the 'file_path' column

        // Check if the file exists
        if (file_exists($path)) {
            return response()->file($path, [
                'Content-Type' => 'application/pdf', // Change to appropriate type if not PDF
                'Content-Disposition' => 'inline; filename="' . basename($path) . '"', // Display in the browser
            ]);
        }

        // If the file does not exist, return a 404 error
        abort(404, 'File not found.');
    })->name('docs');
});



require __DIR__ . '/auth.php';
