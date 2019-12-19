<?php


namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CarControllerTest extends WebTestCase
{
    public function testShowCar()
    {
        $client = static::createClient();

        $client->request('GET', '/car/1');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testCreateNewCar()
    {
        $client = static::createClient();

        $client->request('POST', '/car/new');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testUpdateCar()
    {
        $client = static::createClient();

        $client->request('POST', '/car/1/edit');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testDeleteCar()
    {
        $client = static::createClient();

        $client->request('DELETE', '/car/1');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

}