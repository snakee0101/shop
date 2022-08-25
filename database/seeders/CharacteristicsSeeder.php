<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Characteristic;
use Illuminate\Database\Seeder;

class CharacteristicsSeeder extends Seeder
{
    public function run()
    {
        foreach (Category::all() as $category){
            for ($i=1; $i<10; $i++){
                try{
                    Characteristic::factory()->create([
                        'category_id' => $category
                    ]);
                } catch(\Exception $e) {
                    continue;
                }
            }
        }
    }
}
