<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->string('region');
            $table->string('country');
            $table->string('item_type');
            $table->string('sales_channel');
            $table->string('order_priority');
            $table->date('order_date');
            $table->bigInteger('order_id');
            $table->date('ship_date');
            $table->integer('units_sold');
            $table->decimal('unit_price', 10, 2);
            $table->decimal('unit_cost', 10, 2);
            $table->decimal('total_revenue', 15, 2);
            $table->decimal('total_cost', 15, 2);
            $table->decimal('total_profit', 15, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
