<?php

namespace Tests\Unit;

use App\Models\Product;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

//this

class ProductAPITest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function testCreateProduct()
    {
        //create a product
        $response = $this->postJson('/api/products',
            ['name' => 'Fruit',
                'description' => 'Mango']);

        //check if product was created
        $response
            ->assertStatus(201)
            ->assertJson([
                "name" => "Fruit",
                "description" => "Mango",
            ]);
    }

    public function testGetProducts()
    {
        //get products
        $response = $this->getJson('/api/products');

        //check if there a product that was created recently.
        $response->assertJson(function (AssertableJson $json) {
            $json->whereContains('name', 'Fruit');
        });

    }

    public function testGetProduct()
    {

        //create a product
        $product = Product::create([
            'name' => 'testCreatedProduct',
            'description' => 'testCreatedDescription'
        ]);

        //get the created product
        $response = $this->getJson('/api/products/' . $product->id);

        //check if product was created
        $response
            ->assertStatus(200)
            ->assertJson([
                "name" => "testCreatedProduct",
                "description" => "testCreatedDescription",
            ]);
    }


    public function testUpdateProduct()
    {

        //create a product
        $product = Product::create([
            'name' => 'testProduct',
            'description' => 'testDescription'
        ]);

        //updated created product
        $response = $this->putJson('/api/products/' . $product->id, [
            'name' => 'testProductUpdated',
            'description' => 'testDescriptionUpdated'
        ]);

        //check if product was updated
        $response
            ->assertStatus(202)
            ->assertJson([
                "name" => "testProductUpdated",
                "description" => "testDescriptionUpdated",
            ]);

    }

    public function testDeleteProduct()
    {

        //create a product
        $product = Product::create([
            'name' => 'testProduct',
            'description' => 'testDescription'
        ]);

        //delete created product
        $response = $this->deleteJson('/api/products/' . $product->id);

        //check response (no Content)
        $response->assertStatus(204);

        //check that the product does not exist in the db
        $this->assertDatabaseMissing('products', [
            'id' => $product->id,
        ]);
    }

}
