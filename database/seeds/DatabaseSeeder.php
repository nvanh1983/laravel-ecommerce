<?php

use App\User;
use App\Size;
use App\Type;
use App\Page;
use App\Post;
use App\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        
        $user = User::create([
            'name' => 'Ravuth Yo',
            'email' => 'ravuthz@gmail.com',
            'password' => bcrypt('123123')
        ]);
        
        Auth::loginUsingId($user->id);


        // Create Type
        
        $type1 = Type::create(['name' => 'page', 'note' => 'For page only']);
        $type2 = Type::create(['name' => 'post', 'note' => 'For post only']);
        $type3 = Type::create(['name' => 'dress', 'note' => 'For product only']);
        $type4 = Type::create(['name' => 'clothes', 'note' => 'For product only']);
        $type5 = Type::create(['name' => 'male', 'note' => 'For post only']);
        $type6 = Type::create(['name' => 'female', 'note' => 'For product only']);
        $type7 = Type::create(['name' => 'child', 'note' => 'For product only']);
        
        
        // Create Size
        
        $size1 = Size::create(['name' => 'XS', 'note' => 'Xtra Small']);
        $size2 = Size::create(['name' => 'S', 'note' => 'Small']);
        $size3 = Size::create(['name' => 'M', 'note' => 'Medium']);
        $size4 = Size::create(['name' => 'L', 'note' => 'Large']);
        $size5 = Size::create(['name' => 'XL', 'note' => 'Xtra Large']);
        
        
        // Create Page
        
        $page1 = Page::create([
            'title' => 'Home',
            'sub-title' => 'Home Page',
            'summary' => 'Home Page Summary',
            'content' => 'Home Page Content',
            'published_by' => 1,
        ]);
        
        $page2 = Page::create([
            'title' => 'About',
            'sub-title' => 'About Page',
            'summary' => 'About Page Summary',
            'content' => 'About Page Content',
            'published_by' => 1,
        ]);
        
        $page3 = Page::create([
            'title' => 'Contact',
            'sub-title' => 'Contact Page',
            'summary' => 'Contact Page Summary',
            'content' => 'Contact Page Content',
            'published_by' => 1,
        ]);
        
        $page1->types()->attach($type1->id);
        $page2->types()->attach($type1->id);
        $page3->types()->attach($type1->id);
        
        
        // Create Post
        
        $post1 = Post::create([
            'title' => 'Post 1',
            'sub-title' => 'Post 1 Page',
            'summary' => 'Post 1 Summary',
            'content' => 'Posr 1 Content',
            'photo' => 'noimage.jpg'
        ]);
        
        $post2 = Post::create([
            'title' => 'Post 2',
            'sub-title' => 'Post 2 Page',
            'summary' => 'Post 2 Summary',
            'content' => 'Posr 2 Content',
            'photo' => 'noimage.jpg'
        ]);
        
        $post1->types()->attach($type2->id);
        $post2->types()->attach($type2->id);


        // Create Product
    
        $product1 = Product::create([
            'name' => 'Shirt 1',
            'price' => 199.9,
            'photo' => 'noimage.jpg',
            'published_by' => 1
        ]);
        
        $product2 = Product::create([
            'name' => 'T-Shirt 1',
            'price' => 99.9,
            'photo' => 'noimage.jpg',
            'published_by' => 1
        ]);
        
        $product3 = Product::create([
            'name' => 'Pant 1',
            'price' => 79.9,
            'photo' => 'noimage.jpg',
            'published_by' => 1
        ]);
        
        $product1->types()->attach($type4->id);
        $product2->types()->attach($type4->id);
        $product3->types()->attach($type4->id);
        
        $product1->types()->attach($type5->id);
        $product2->types()->attach($type5->id);
        $product3->types()->attach($type5->id);
        
        $product1->sizes()->attach($size1->id);
        $product1->sizes()->attach($size2->id);
        $product1->sizes()->attach($size3->id);
        
        $product2->sizes()->attach($size1->id);
        $product2->sizes()->attach($size2->id);
        $product2->sizes()->attach($size3->id);
        $product2->sizes()->attach($size4->id);
        
        $product3->sizes()->attach($size1->id);
        $product3->sizes()->attach($size2->id);
        $product3->sizes()->attach($size3->id);
        $product3->sizes()->attach($size4->id);
        $product3->sizes()->attach($size5->id);
        
    }
}

