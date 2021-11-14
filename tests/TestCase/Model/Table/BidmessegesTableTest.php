<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BidmessegesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BidmessegesTable Test Case
 */
class BidmessegesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BidmessegesTable
     */
    public $Bidmesseges;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.bidmesseges',
        'app.bidinfos',
        'app.users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Bidmesseges') ? [] : ['className' => BidmessegesTable::class];
        $this->Bidmesseges = TableRegistry::getTableLocator()->get('Bidmesseges', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Bidmesseges);

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
