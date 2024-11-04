<?php

namespace App\Services;

use App\Traits\CsvHandler;
use App\Jobs\ImportSaleCSVProcess;
use App\Contracts\CsvImportInterface;
use Illuminate\Support\Facades\Bus;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class CsvImportService implements CsvImportInterface
{
    use CsvHandler;

    public function import(string $filePath, string $modelClass): \Illuminate\Bus\Batch
    {
        if (!Storage::disk('private')->exists($filePath)) {
            throw new NotFoundHttpException("The file '{$filePath}' was not found.");
        }

        $filePath = Storage::disk('private')->path($filePath);
        $csvData = $this->prepareData($filePath);

        $batch = Bus::batch([])->dispatch();
        foreach ($csvData['chunkedData'] as $chunk) {
            $batch->add(new ImportSaleCSVProcess($csvData['header'], $chunk));
        }

        return $batch;
    }
}
