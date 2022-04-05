<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ImovelsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ImovelsTable Test Case
 */
class ImovelsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ImovelsTable
     */
    protected $Imovels;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Imovels',
        'app.Pessoas',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Imovels') ? [] : ['className' => ImovelsTable::class];
        $this->Imovels = $this->getTableLocator()->get('Imovels', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Imovels);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ImovelsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ImovelsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
