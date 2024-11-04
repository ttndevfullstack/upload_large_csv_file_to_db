<?php

namespace App\Traits;

use GuzzleHttp\Exception\InvalidArgumentException;

trait CsvHandler
{
    /**
     * Read data from a CSV file and return as an array.
     *
     * @param string $filePath
     * @return array
     * @throws InvalidArgumentException
     */
    public function prepareData(string $filePath, int $chunkSize = 1000): array
    {
        if (!file_exists($filePath)) {
            throw new InvalidArgumentException('CSV file does not exist');
        }

        $csvData = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        if (empty($csvData)) {
            throw new InvalidArgumentException('CSV file is empty');
        }

        $header = $this->extractHeaderFromCsvData($csvData);
        $data = $this->extractDataFromCsvData($csvData);
        $chunkedData = array_chunk($data, $chunkSize);
        $chunkedData = array_chunk($chunkedData[0], 100);

        return compact('header', 'chunkedData');
    }

    /**
     * Export data to a CSV file.
     *
     * @param string $filePath
     * @param array $header
     * @param array $data
     * @return void
     */
    public function exportCsv(string $filePath, array $header, array $data): void
    {
        $fileHandle = fopen($filePath, 'w');

        if ($header) {
            fputcsv($fileHandle, $header);
        }

        foreach ($data as $row) {
            fputcsv($fileHandle, $row);
        }

        fclose($fileHandle);
    }

    /**
     * Extract header from CSV data.
     *
     * @param array $csvData
     * @return array
     */
    public function extractHeaderFromCsvData(array $csvData): array
    {
        return array_map(fn($column) => str_replace(' ', '_', strtolower(trim($column))), explode(',', $csvData[0]));
    }

    /**
     * Extract data rows from CSV data.
     *
     * @param array $csvData
     * @return array
     */
    public function extractDataFromCsvData(array $csvData): array
    {
        return array_map(fn($line) => str_getcsv($line), array_slice($csvData, 1));
    }

    /**
     * Validate rules from CSV data with rules of model column
     *
     * @param array $rowData
     * @param string $modelClass
     * @return void
     */
    public function validateRow(array $rowData, string $modelClass)
    {
        $validator = Validator::make($rowData, $modelClass::importRules());
        if ($validator->fails()) {
            throw new \Exception('Validation failed: ' . implode(', ', $validator->errors()->all()));
        }
    }
}
