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
       Schema::create('jamayats', function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('tasmia');
            $table->string('slug');
            $table->string('email')->unique();
            $table->string('rakm-itimad');
            $table->date('tarikh-tassiss');
            $table->string('halat-elmilef');
            $table->date('tarikh-tajdid1');
            $table->date('tarikh-tajdid2');
            $table->date('tarikh-tajdid3');
            $table->date('tarikh-tajdid4');
            $table->date('tarikh-tajdid5');
            $table->string('tabaa');
            $table->string('kitaa');
            $table->string('nom-president');
            $table->string('prenom-president');
            $table->string('nachta');
            $table->string('adresse');
            $table->string('phone');
            $table->string('baladia');
            $table->longText('description');
            $table->rememberToken();
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
