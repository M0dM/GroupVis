<?php

namespace ILL\VisitBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use ILL\VisitBundle\Entity\User;

class VisitControllerTest extends WebTestCase
{
        private function login( $username = 'test', $password = 'azerty' )
    {
        $client = self::createClient(array('HTTP_HOST' => 'groupvis.local'));
        $client->followRedirects(true);
        $crawler = $client->request( 'GET', '/' );
        $form = $crawler->selectButton( 'Login' )->form( array( '_username' => $username, '_password' => $password ) );
        $client->submit( $form );
        return $client;
    }   
        
        public function testAllAction()
    {
    	$client = $this->login();
        $crawler = $client->request('GET', '/');

        $this->assertTrue($crawler->filter('html:contains("Name")')->count() > 0);
    }
}
