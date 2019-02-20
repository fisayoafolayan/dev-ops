<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$products = [
    		[
    			'name' => "MEN'S BETTER THAN NAKED&trade; JACKET",
    			'description' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.",
    			'units' => 21,
    			'price' => 200.10,
    			'image' => "https://www.53degreesnorth.ie/media/catalog/product/cache/image/1000x1000/e9c3970ab036de70892d86c6d221abfe/t/h/the-north-face-mens-dryzzle-gore-tex-jacket-tnf-black-aw18.jpg"
    		],
    		[
    			'name' => "WOMEN'S BETTER THAN NAKED&trade; JACKET",
    			'description' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.",
    			'units' => 400,
    			'price' => 1600.21,
    			'image' => "https://banner2.kisspng.com/20180927/yko/kisspng-the-north-face-womens-endeavor-thermoball-hooded-the-north-face-women39s-endeavor-thermoball-jac-5bad994fc8cbe1.4729268715381036318225.jpg"
    		],
    		[
    			'name' => "WOMEN'S SINGLE-TRACK SHOE",
    			'description' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.",
    			'units' => 37,
    			'price' => 378.00,
    			'image' => "https://banner2.kisspng.com/20180405/lrq/kisspng-shoe-hiking-boot-mammut-sports-group-the-north-fac-vibrant-5ac5bb05c87d63.6567165915229079098212.jpg"
    		],
    		[
    			'name' => "Enduro Boa&reg; Hydration Pack",
    			'description' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.",
    			'units' => 10,
    			'price' => 21.10,
    			'image' => "https://banner2.kisspng.com/20180608/szy/kisspng-backpack-the-north-face-borealis-hiking-the-north-5b1a8311465c12.1270462115284641452882.jpg"
    		]
    	];

    	foreach ($products as $product) {
    		Product::create($product);
    	}

    }
}
