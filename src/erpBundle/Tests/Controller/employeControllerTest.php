<?php

namespaceerpBundle\Tests\Controller;use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;classemployeControllerTest extends WebTestCase{    public function testAjout()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/ajout');
    }}
