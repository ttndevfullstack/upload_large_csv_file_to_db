<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = [
        'region',
        'country',
        'item_type',
        'sales_channel',
        'order_priority',
        'order_date',
        'order_id',
        'ship_date',
        'units_sold',
        'unit_price',
        'unit_cost',
        'total_revenue',
        'total_cost',
        'total_profit',
    ];

    protected $casts = [
        'order_date' => 'date',
        'ship_date' => 'date',
    ];

    /**
     * Validation rules for CSV import.
     *
     * @return array
     */
    public static function importRules(): array
    {
        return [
            'region' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'item_type' => 'required|string|max:255',
            'sales_channel' => 'required|string|max:255',
            'order_priority' => 'required|string|max:1',
            'order_date' => 'required|date_format:Y-m-d',
            'order_id' => 'required|integer|unique:sales,order_id',
            'ship_date' => 'required|date_format:Y-m-d|after_or_equal:order_date',
            'units_sold' => 'required|integer|min:1',
            'unit_price' => 'required|numeric|min:0',
            'unit_cost' => 'required|numeric|min:0',
            'total_revenue' => 'required|numeric|min:0',
            'total_cost' => 'required|numeric|min:0',
            'total_profit' => 'required|numeric|min:0',
        ];
    }
}
