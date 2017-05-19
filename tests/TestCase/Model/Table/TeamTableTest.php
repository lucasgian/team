<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TeamTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TeamTable Test Case
 */
class TeamTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TeamTable
     */
    public $Team;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.team'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Team') ? [] : ['className' => 'App\Model\Table\TeamTable'];
        $this->Team = TableRegistry::get('Team', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Team);

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
