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
        Schema::create('cargo', function (Blueprint $table) {
            $table->id();
            $table->string('cargo_no');
            $table->string('cargo_type')->nullable();
            $table->double('cargo_size')->default(0);
            $table->double('weight')->default(0);
            $table->string('remarks')->nullable();
            $table->double('wharfage')->default(0);
            $table->double('penalty')->default(0);
            $table->double('storage')->default(0);
            $table->double('electricity')->default(0);
            $table->double('destuffing')->default(0);
            $table->double('lifting')->default(0);
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
        Schema::dropIfExists('cargo');
    }
};
