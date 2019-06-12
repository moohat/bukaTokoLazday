<?php

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = array(
            array('product' => 'hoodie','price' => '300000.00','stock' => '99100','description' => NULL,'created_at' => \Carbon\Carbon::now()),
            array('product' => 'Sepatu Ripcurl','price' => '120000.00','stock' => '99100','description' => NULL,'created_at' => \Carbon\Carbon::now()),
            array('product' => 'Jaket Eiger','price' => '160000.00','stock' => '99100','description' => NULL,'created_at' => \Carbon\Carbon::now()),
            array('product' => 'Kerudung','price' => '600000.00','stock' => '99100','description' => NULL,'created_at' => \Carbon\Carbon::now()),
            array('product' => 'Supreme','price' => '120000.00','stock' => '99100','description' => NULL,'created_at' => \Carbon\Carbon::now()),
            array('product' => 'Celana Joger adida','price' => '120000.00','stock' => '9920','description' => NULL,'created_at' => \Carbon\Carbon::now()),
            array('product' => 'Jam Tangan','price' => '160000.00','stock' => '99100','description' => NULL,'created_at' => \Carbon\Carbon::now()),
            array('product' => 'Tas Eiger','price' => '320000.00','stock' => '9960','description' => NULL,'created_at' => \Carbon\Carbon::now()),
            array('product' => 'Baju koko','price' => '110000.00','stock' => '99120','description' => NULL,'created_at' => \Carbon\Carbon::now()),
            array('product' => 'Kerudung rawis','price' => '90000.00','stock' => '9960','description' => NULL,'created_at' => \Carbon\Carbon::now()),
            array('product' => 'Celana Jeans','price' => '170000.00','stock' => '9990','description' => NULL,'created_at' => \Carbon\Carbon::now()),
            array('product' => 'Celana pendek joger','price' => '90000.00','stock' => '99120','description' => NULL,'created_at' => \Carbon\Carbon::now())
        );

        Product::insert($products);
    }
}
