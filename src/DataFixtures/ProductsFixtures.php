<?php
declare(strict_types=1);

namespace App\DataFixtures;

use App\Entity\Bundle;
use App\Entity\Category;
use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ProductsFixtures extends Fixture
{

    public function __construct()
    {

    }

    public function load(ObjectManager $manager)
    {
        $category = new Category();
        $category->setName("phones");

        // Create a product
       
            $product = new Product();
            $product->setName('iphone 11');
            $product->setDescription('A cool phone');
            $product->setCreatedAt(new \DateTime());
            $product->setUpdatedAt(new \DateTime());
            $product->setCategory($category);


            $product->setPrice(mt_rand(10, 100));
            $manager->persist($product);
        

        // Add two more products
        for ($i = 0; $i < 2; $i++) {
            $product = new Bundle();
            $product->setName('iphone 11 pro ' . $i);
            $product->setDescription('The best of them all ' . $i);
            $product->setCreatedAt(new \DateTime());
            $product->setUpdatedAt(new \DateTime());
            $product->setCategory($category);


            $product->setPrice(mt_rand(10, 100));
            $manager->persist($product);
        }

        $manager->flush();
    }
}