<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\About;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::factory(3)->create();

        User::create([
            'name' => 'Faisal Luthfi',
            'username' => 'faisalluthfi',
            'email' => 'faisalluthfi05@gmail.com',
            'password'=> bcrypt('unpam123')
        ]);

        About::create([
            "name"=> "Coffe Ala-Ala",
            "alamat" => "Jl. Ala ala RT 003/002, Kebayoran Baru, Jakarta Selatan",
            "email_toko" => "coffeealaala@gmail.com",
            "description" => "
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque sapiente ea officiis, eveniet esse voluptatum beatae fuga! Obcaecati reiciendis, beatae iure ut magni quasi accusantium soluta quod sapiente officia ipsum exercitationem fugiat accusamus, perspiciatis nam. Necessitatibus ullam ipsam excepturi dolorum consequatur iste vero enim vitae quibusdam possimus maiores, dolor libero inventore fuga, labore in. Quasi velit provident dolore sit ut ad perferendis magnam amet harum quam. Cumque quas repellendus doloribus?",
        ]);

        // Product::create([
        //     ""
        // ]);

        Product::create([
            "name"=> "Ala-Ala Coffee Ala",
            "category_id" => 1,
            "slug"=>"ala-ala-coffee-ala",
            "excertp" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis ratione facilis laudantium?",
            "price" => 25000,
            "description" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora, fuga accusantium? Deleniti unde quod, quia aliquid commodi deserunt, maiores enim autem doloribus a, repudiandae cupiditate."
        ]);
        Product::create([
            "name"=> "Raspberry",
            "category_id" => 5,
            "slug"=>"raspberry",
            "excertp" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis ratione facilis laudantium?",
            "price" => 25000,
            "description" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora, fuga accusantium? Deleniti unde quod, quia aliquid commodi deserunt, maiores enim autem doloribus a, repudiandae cupiditate."
        ]);
        Product::create([
            "name"=> "Ala-Ala Americano",
            "category_id" => 1,
            "slug"=>"ala-ala-americano",
            "excertp" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis ratione facilis laudantium?",
            "price" => 25000,
            "description" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora, fuga accusantium? Deleniti unde quod, quia aliquid commodi deserunt, maiores enim autem doloribus a, repudiandae cupiditate."
        ]);
        Product::create([
            "name"=> "Ala-Ala Espresso",
            "category_id" => 1,
            "slug"=>"ala-ala-espresso",
            "excertp" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis ratione facilis laudantium?",
            "price" => 25000,
            "description" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora, fuga accusantium? Deleniti unde quod, quia aliquid commodi deserunt, maiores enim autem doloribus a, repudiandae cupiditate."
        ]);
        Product::create([
            "name"=> "Lemon Tea",
            "category_id" => 2,
            "slug"=>"lemon-tea",
            "excertp" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis ratione facilis laudantium?",
            "price" => 25000,
            "description" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora, fuga accusantium? Deleniti unde quod, quia aliquid commodi deserunt, maiores enim autem doloribus a, repudiandae cupiditate."
        ]);
        Product::create([
            "name"=> "Reguler Tea",
            "category_id" => 2,
            "slug"=>"reguler-tea",
            "excertp" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis ratione facilis laudantium?",
            "price" => 25000,
            "description" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora, fuga accusantium? Deleniti unde quod, quia aliquid commodi deserunt, maiores enim autem doloribus a, repudiandae cupiditate."
        ]);
        Product::create([
            "name"=> "Fried Rice",
            "category_id" => 3,
            "slug"=>"fried-rice",
            "excertp" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis ratione facilis laudantium?",
            "price" => 25000,
            "description" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora, fuga accusantium? Deleniti unde quod, quia aliquid commodi deserunt, maiores enim autem doloribus a, repudiandae cupiditate."
        ]);
        Product::create([
            "name"=> "Smashed Chicken",
            "category_id" => "3",
            "slug"=>"smashed-chicken",
            "excertp" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis ratione facilis laudantium?",
            "price" => 25000,
            "description" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora, fuga accusantium? Deleniti unde quod, quia aliquid commodi deserunt, maiores enim autem doloribus a, repudiandae cupiditate."
        ]);
        Product::create([
            "name"=> "French Fries",
            "category_id" => 4,
            "slug"=>"french-fries",
            "excertp" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis ratione facilis laudantium?",
            "price" => 25000,
            "description" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora, fuga accusantium? Deleniti unde quod, quia aliquid commodi deserunt, maiores enim autem doloribus a, repudiandae cupiditate.",
            'image' => 'https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=989&q=80'
        ]);
        Product::create([
            "name"=> "Dim Sum",
            "category_id" => 4,
            "slug"=>"dim-sum",
            "excertp" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis ratione facilis laudantium?",
            "price" => 25000,
            "description" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora, fuga accusantium? Deleniti unde quod, quia aliquid commodi deserunt, maiores enim autem doloribus a, repudiandae cupiditate."
        ]);

        Category::create([
            'name' => 'Coffee',
            'slug' => 'coffee'
        ]);

        Category::create([
            'name' => 'Tea',
            'slug' => 'tea'
        ]);

        Category::create([
            'name' => 'Heavy Meal',
            'slug' => 'heavymeal'
        ]);
        Category::create([
            'name' => 'Snacks',
            'slug' => 'snacks'
        ]);
        Category::create([
            'name' => 'Gelato Ice Creams',
            'slug' => 'gelatoicecreams'
        ]);
    }
}
