<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ServicesTypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ServicesTypesTable Test Case
 */
class ServicesTypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ServicesTypesTable
     */
    public $ServicesTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.services_types'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ServicesTypes') ? [] : ['className' => ServicesTypesTable::class];
        $this->ServicesTypes = TableRegistry::get('ServicesTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ServicesTypes);

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
