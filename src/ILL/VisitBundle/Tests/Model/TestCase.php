<?php
namespace ILL\VisitBundle\Tests\Model;
 
require_once dirname(__DIR__).'/../../../../app/AppKernel.php';
 
use Doctrine\ORM\Tools\SchemaTool;
 
abstract class TestCase extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Symfony\Component\HttpKernel\AppKernel
     */
    protected $kernel;
 
    /**
     * @var Doctrine\ORM\EntityManager
     */
    protected $entityManager;
 
    /**
     * @var Symfony\Component\DependencyInjection\Container
     */
    protected $container;
 
    public function setUp()
    {
        // Boot the AppKernel in the test environment and with the debug.
        $this->kernel = new \AppKernel('test', true);
        $this->kernel->boot();
 
        // Store the container and the entity manager in test case properties
        $this->container = $this->kernel->getContainer();
        $this->entityManager = $this->container->get('doctrine')->getEntityManager();
 
        // Build the schema for sqlite (we don't need this for mysql)
        //  $this->generateSchema();
 
        parent::setUp();
    }
 
    public function tearDown()
    {
        // Shutdown the kernel.
        $this->kernel->shutdown();
 
        parent::tearDown();
    }
 
    protected function generateSchema()
    {
        // Get the metadatas of the application to create the schema.
        $metadatas = $this->getMetadatas();
 
        if ( ! empty($metadatas)) {
            // Create SchemaTool
            $tool = new SchemaTool($this->entityManager);
            $tool->createSchema($metadatas);
        } else {
            throw new Doctrine\DBAL\Schema\SchemaException('No Metadata Classes to process.');
        }
    }
 
    /**
     * Overwrite this method to get specific metadatas.
     *
     * @return Array
     */
    protected function getMetadatas()
    {
        return $this->entityManager->getMetadataFactory()->getAllMetadata();
    }
}