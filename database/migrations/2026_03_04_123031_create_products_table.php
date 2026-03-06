<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
 public function up()
{
    Schema::create('products', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('category_id')->nullable();
        $table->string('name');
        $table->decimal('price', 10, 2);
        $table->decimal('sale_price', 10, 2)->nullable();
        $table->integer('stock')->default(0);
        $table->text('description')->nullable();
        $table->string('image')->nullable();
        $table->boolean('is_active')->default(1);
        $table->boolean('is_delete')->default(0);
        $table->timestamps();

        $table->foreign('category_id')
              ->references('id')
              ->on('categories')
              ->onDelete('set null');
    });
}
};
