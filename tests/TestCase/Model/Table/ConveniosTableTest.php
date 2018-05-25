<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ConveniosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ConveniosTable Test Case
 */
class ConveniosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ConveniosTable
     */
    public $Convenios;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.convenios'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Convenios') ? [] : ['className' => ConveniosTable::class];
        $this->Convenios = TableRegistry::get('Convenios', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Convenios);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
