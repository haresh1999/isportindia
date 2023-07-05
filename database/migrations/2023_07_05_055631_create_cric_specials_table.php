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
        Schema::create('cric_specials', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('created_by');
            $table->integer('views')->default(0);
            $table->integer('likes')->default(0);
            $table->text('title');
            $table->text('slug');
            $table->text('short_description');
            $table->longText('description');
            $table->tinyInteger('status');
            $table->string('img');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cric_specials');
    }
};
