<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{

    public function test_insert_one_asset()
    {
        $this->json('POST', '/assets', ['qr' => 'QR-CODE', 'name' => 'ASSET-NAME'])
        ->seeJson([
            'success' => true,
			'message' => 'Asset added.'
        ]);
    }

    public function test_validation_insert(){

        $this->json('POST', '/assets', ['should-be-qr' => 'QR-CODE', 'should-be-name' => 'ASSET-NAME'])
        ->seeJson([
            'name' => ["The name field is required."],
			'qr' => ["The qr field is required."]
        ]);

    }
}
