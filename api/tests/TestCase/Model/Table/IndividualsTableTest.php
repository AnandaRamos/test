<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\IndividualsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\IndividualsTable Test Case
 */
class IndividualsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\IndividualsTable
     */
    public $Individuals;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.individuals',
        'app.users',
        'app.addresses',
        'app.auths',
        'app.phones'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Individuals') ? [] : ['className' => IndividualsTable::class];
        $this->Individuals = TableRegistry::get('Individuals', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Individuals);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
