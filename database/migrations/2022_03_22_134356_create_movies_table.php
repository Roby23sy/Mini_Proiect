<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->tinyInteger('status')->nullable(true)->default(1);
            $table->tinyText('name')->nullable(true);
            $table->decimal('rating',10,2)->nullable(true);
            $table->text('description')->nullable(true);
            $table->string('image')->nullable(true);
            $table->dateTime('deleted_at')->nullable(true);
            $table->dateTime( 'created_at')->nullable(true);
            $table->dateTime('updated_at')->nullable(true);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
};
