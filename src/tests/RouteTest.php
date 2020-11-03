<?php

namespace GabrielFemi\Contact\Tests;

use Tests\TestCase;


class RouteTest extends TestCase
{
    public function testContactRoute() : void
    {
        $response = $this->get('/contact');
        $response->assertStatus(200);
    }

}
