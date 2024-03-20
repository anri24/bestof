<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\City;
use App\Models\DealType;
use Illuminate\Database\Seeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

//        User::factory()->create([
//            'name' => 'Test User',
//            'email' => 'test@example.com',
//        ]);

        Category::create([
            'parent_id' => null,
            'title' => 'უძრავი ქონება',
        ]);
        Category::create([
            'parent_id' => null,
            'title' => 'სესხები',
        ]);


        Category::create([
            'parent_id' => 1,
            'title' => 'ბინა',
        ]);
        Category::create([
            'parent_id' => 1,
            'title' => 'კერძო სახლი',
        ]);
        Category::create([
            'parent_id' => 1,
            'title' => 'მიწა',
        ]);
        Category::create([
            'parent_id' => 2,
            'title' => 'იპოთეკური სესხი',
        ]);

        City::create([
            'name' => 'თბილისი',
        ]);

        City::create([
            'name' => 'ბათუმი',
        ]);

        DealType::create([
            'name'=> 'იყიდება'
        ]);
        DealType::create([
            'name'=> 'გირავდება'
        ]);
        DealType::create([
            'name'=> 'ქირავდება'
        ]);
        DealType::create([
            'name'=> 'ქირავდება დღიურად'
        ]);
    }
}
