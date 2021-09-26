<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OrderproductsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OrderproductsTable Test Case
 */
class OrderproductsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\OrderproductsTable
     */
    protected $Orderproducts;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Orderproducts',
        'app.Orders',
        'app.Products',
        'app.Productoptions',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Orderproducts') ? [] : ['className' => OrderproductsTable::class];
        $this->Orderproducts = $this->getTableLocator()->get('Orderproducts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Orderproducts);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\OrderproductsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\OrderproductsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
