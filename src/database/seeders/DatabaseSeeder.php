<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = User::factory()->create([
            'username' => 'テストてす子',
            'email' => 'test@example.com',
            'password' => bcrypt('test12345678'),
            'profile_image' => 'profile_images/profile.png',
            'postcode' => '123-4567',
            'address' => 'テスト住所',
            'building' => 'テスト建物'
        ]);

        $this->call([
            CategoriesTableSeeder::class,
            ConditionsTableSeeder::class,
            ProductsTableSeeder::class,
            CategoryProductTableSeeder::class,
            PurchaseTableSeeder::class,
            LikesTableSeeder::class,
            CommentsTableSeeder::class,
        ]);
    }
}
