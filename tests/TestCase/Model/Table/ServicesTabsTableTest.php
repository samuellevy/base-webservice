<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ServicesTabsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ServicesTabsTable Test Case
 */
class ServicesTabsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ServicesTabsTable
     */
    public $ServicesTabs;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.services_tabs'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ServicesTabs') ? [] : ['className' => ServicesTabsTable::class];
        $this->ServicesTabs = TableRegistry::get('ServicesTabs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ServicesTabs);

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
