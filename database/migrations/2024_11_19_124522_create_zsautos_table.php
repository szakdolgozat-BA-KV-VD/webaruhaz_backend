<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('zsautos', function (Blueprint $table) {
            $table->id('rendszam');
            $table->string('marka');
            $table->string('tipus');
            $table->string('szin');
            $table->double('fogyaszt');
            $table->integer('ar');
            $table->timestamps();
        });

        DB::table('zsautos')->insert([
            [
                'marka' => 'Toyota',
                'tipus' => 'Corolla',
                'szin' => 'Piros',
                'fogyaszt' => 6.5,
                'ar' => 3200000,
            ],
            [
                'marka' => 'BMW',
                'tipus' => 'X5',
                'szin' => 'Fekete',
                'fogyaszt' => 8.9,
                'ar' => 5000000,
            ],
            [
                'marka' => 'Ford',
                'tipus' => 'Fiesta',
                'szin' => 'Kék',
                'fogyaszt' => 5.3,
                'ar' => 2100000,
            ],
            [
                'marka' => 'Suzuki',
                'tipus' => 'Swift',
                'szin' => 'Fehér',
                'fogyaszt' => 4.8,
                'ar' => 1500000,
            ],
            [
                'marka' => 'Mercedes',
                'tipus' => 'C-Class',
                'szin' => 'Szürke',
                'fogyaszt' => 7.2,
                'ar' => 4500000,
            ],
            [
                'marka' => 'Volkswagen',
                'tipus' => 'Golf',
                'szin' => 'Zöld',
                'fogyaszt' => 6.1,
                'ar' => 2700000,
            ],
            [
                'marka' => 'Audi',
                'tipus' => 'A3',
                'szin' => 'Ezüst',
                'fogyaszt' => 6.9,
                'ar' => 3800000,
            ],
            [
                'marka' => 'Honda',
                'tipus' => 'Civic',
                'szin' => 'Narancssárga',
                'fogyaszt' => 5.7,
                'ar' => 2400000,
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('zsautos');
    }
};
