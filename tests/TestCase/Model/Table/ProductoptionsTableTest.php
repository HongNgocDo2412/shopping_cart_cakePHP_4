<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProductoptionsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProductoptionsTable Test Case
 */
class ProductoptionsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProductoptionsTable
     */
    protected $Productoptions;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Productoptions',
        'app.Products',
        'app.Orderproducts',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Productoptions') ? [] : ['className' => ProductoptionsTable::class];
        $this->Productoptions = $this->getTableLocator()->get('Productoptions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Productoptions);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ProductoptionsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ProductoptionsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
