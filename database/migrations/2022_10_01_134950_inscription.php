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
        Schema::table('inscription', function (Blueprint $table) {
            $table->renameColumn('name', 'nom');
            $table->renameColumn('phone', 'numero');
            $table->renameColumn('mail', 'email');
            $table->renameColumn('formation', 'formation_a');
            $table->string('formation_b');
            $table->string('formation_c');
            $table->string('statue');
            $table->string('prenom');
            $table->string('date de naissance');
            $table->string('lieux de naissance');
            $table->string('maladie');
            $table->string('niveaux scolaier');
            $table->string('profession');
            $table->string('payement');
            $table->string('contact durgence');
            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    
    }
};
