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
        Schema::create('arquivo', function (Blueprint $table) {
            
            $table->id('idArquivo');
            $table->string('arquivo');
            $table->unsignedBigInteger('Obras_IdObras');
            $table->foreign('Obras_IdObras')->references('idObras')->on('obras')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
    
           



        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
