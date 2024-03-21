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
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unqiue();
            $table->char('pin', 4);
            $table->decimal('amount');
            $table->decimal('amount_left');

            $table->unsignedBigInteger('store_id');
            $table->foreign('store_id')
                    ->references('id')
                    ->on('stores');
            
            $table->timestamp('purchased_at')->nullable();
            $table->timestamp('created_at');
            $table->timestamp('activated_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cards');
    }
};
