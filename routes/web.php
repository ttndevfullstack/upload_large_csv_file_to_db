<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CsvController;
use App\Http\Controllers\ViewController;


# ==============================================================================
# View Routes
# ==============================================================================
Route::get('/', [ViewController::class, 'home']);
Route::get('/csv/import', [ViewController::class, 'import']);


# ==============================================================================
# Action Routes
# ==============================================================================
Route::post('/csv/import', [CsvController::class, 'import'])->name('csv.import');
Route::get('/csv/export', [CsvController::class, 'export'])->name('csv.export');
Route::get('/batch-status/{batchId}', [CsvController::class, 'getBatchStatus'])->name('csv.batch.status');
