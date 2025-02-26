<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClothsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cloths', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->enum('category', ['Tops', 'Bottoms', 'Shoes', 'Sandles', 'Accessories']);
            $table->boolean('is_new')->default(true);
            $table->boolean('is_worn_out')->default(false);
            $table->timestamp('purchased_at')->nullable();
            $table->timestamp('worn_out_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cloths');
    }
}
