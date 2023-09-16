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
        Schema::table('Employees', function (Blueprint $table) {
          

                $table->id() ; 
                $table->string('EName') ; 
                $table->integer('EAge') ; 
                $table->integer('EPhone') ; 
                $table->string('EImage') ; 
                $table->integer('ESalary') ; 

         });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('Employees', function (Blueprint $table) {
            //
        });
    }
};
