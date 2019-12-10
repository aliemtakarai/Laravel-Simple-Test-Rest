<?php

use App\Models\Items;

class ProductTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testGetAll()
    {
        $response = $this->get('/get-items');
        $response->assertResponseOk();
        $response->seeJsonStructure([
            'meta'=>[
                'to',
                'total'
            ],
            'links'=>[
                'first',
                'last',
                'next',
                'prev'
            ],
            'data'=>[
                '*'=>[
                    'id',
                    'item_name',
                    'price',
                    'qty'
                ]
            ]

        ]);
    }

    // public function testStoreItem()
    // {
    //     $response = $this->post( '/item', [
    //         'name'=>'book again',
    //         'price'=>1500,
    //         'qty'=>5
    //     ]);

    //     $response->assertResponseStatus(201);
    // }

    // public function testUpdateItem()
    // {
    //     $response = $this->put( '/item/1', [
    //         'name'=>'book again',
    //         'price'=>1500,
    //         'qty'=>5
    //     ]);

    //     $response->assertResponseStatus(201);
    // }

    // public function testDeleteItem()
    // {
    //     $response = $this->delete('item/1');
    //     $response->assertResponseStatus(200);
    // }
}
