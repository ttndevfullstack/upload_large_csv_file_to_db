<?php

namespace App\Contracts;

interface CsvExportInterface
{
    public function export(string $modelClass, array $filters = []): string;
}