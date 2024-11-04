<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Services\CsvExportService;
use App\Services\CsvImportService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Bus;
use Illuminate\Support\Facades\Storage;

class CsvController extends Controller
{
    protected CsvImportService $csvImportService;
    protected CsvExportService $csvExportService;

    public function __construct(CsvImportService $csvImportService, CsvExportService $csvExportService)
    {
        $this->csvImportService = $csvImportService;
        $this->csvExportService = $csvExportService;
    }

    public function import(Request $request)
    {
        $request->validate([
            'csv_file' => 'required|file|mimes:csv,txt'
        ]);

        $fileDir = 'csv/imports/';
        $fileName = uniqid() . '_' . time() . '.' . $request->csv_file->getClientOriginalExtension();
        Storage::disk('private')->putFileAs(
            $fileDir,
            $request->file('csv_file'),
            $fileName
        );

        $batch = $this->csvImportService->import($fileDir . $fileName, Sale::class);

        return view('importing-file', ['batchId' => $batch->id]);
    }

    public function export(Request $request)
    {
        $filename = $this->csvExportService->export(Sale::class, $request->all());

        return response()->download(public_path($filename));
    }

    public function getBatchStatus($batchId)
    {
        $batch = Bus::findBatch($batchId);

        if ($batch) {
            return response()->json([
                'percent' => $batch->progress(),
                'finished' => $batch->finished(),
                'failed' => $batch->failedJobs > 0,
            ]);
        }

        return response()->json(['error' => 'Batch not found'], 404);
    }
}
