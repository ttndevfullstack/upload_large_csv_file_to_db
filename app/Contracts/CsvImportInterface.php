<?php

namespace App\Contracts;

interface CsvImportInterface
{
    public function import(string $filePath, string $modelClass);
}
