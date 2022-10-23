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
        Schema::create('ruangans', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_kamar');
            $table->foreignId('rsj_id')->constrained('rsjs', 'id');
            $table->enum('status', ['aktif', 'nonaktif']); 
            //status aktif untuk kamar yang belum ada odgjnya, nonaktif untuk masih bisa dipesan
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
        Schema::dropIfExists('ruangans');
    }
};
