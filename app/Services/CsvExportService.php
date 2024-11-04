<?php

namespace App\Services;

use App\Contracts\CsvExportInterface;

class CsvExportService implements CsvExportInterface
{
    public function export(string $modelClass, array $filters = []): string
    {
        $data = $modelClass::where($filters)->get();
        $filename = 'export_' . time() . '.csv';
        $handle = fopen(public_path($filename), 'w');

        fputcsv($handle, array_keys($data[0]->toArray()));
        foreach ($data as $row) {
            fputcsv($handle, $row->toArray());
        }

        fclose($handle);
        return $filename;
    }
}
