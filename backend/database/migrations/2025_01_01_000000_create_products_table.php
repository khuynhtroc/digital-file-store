<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration {
    public function up() {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->decimal('price', 10, 2)->default(0);
            $table->string('drive_link')->nullable();
            $table->string('thumb')->nullable();
            $table->unsignedInteger('downloads')->default(0);
            $table->timestamps();
        });
    }
    public function down() { Schema::dropIfExists('products'); }
}
