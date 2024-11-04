<?php

namespace App\Jobs;

use App\Models\Sale;
use Illuminate\Bus\Batchable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class ImportSaleCSVProcess implements ShouldQueue
{
    use Batchable, Queueable;

    private array $header;

    private array $data;

    /**
     * Create a new job instance.
     */
    public function __construct(array $header, array $data)
    {
        $this->header = $header;
        $this->data = $data;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        foreach ($this->data as $row) {
            $saleData = array_combine($this->header, $row);
            Sale::create($saleData);
        }
    }
}
