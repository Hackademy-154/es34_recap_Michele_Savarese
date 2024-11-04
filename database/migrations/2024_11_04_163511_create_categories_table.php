<?php

use App\Models\Category;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->timestamps();
        });

        $categories = [
            ['name' => 'German', 'description' => 'Gioco generalmente con poco o nessun uso di dadi, la strategia del giocatore è prevalente'],
            ['name' => 'American', 'description' => 'Gioco con generalmente grande importanza di trama, il dato è importante'],
            ['name' => 'Astratto', 'description' => 'Gioco di strategia in cui il dado non ha generalmente rilevanza, di solito privo di ambientazione'],
            ['name' => 'Partygame', 'description' => 'Gioco per gruppo di giocatori in cui le capacità individuali sono il centro del gioco']
        ];
        foreach ($categories as $category) {
            Category::create([
                'name'=>$category['name'],
                'description'=> $category['description']
            ]);
    }
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
