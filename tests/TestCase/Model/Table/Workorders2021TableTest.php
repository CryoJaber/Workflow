<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\Workorders2021Table;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\Workorders2021Table Test Case
 */
class Workorders2021TableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\Workorders2021Table
     */
    protected $Workorders2021;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Workorders2021',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Workorders2021') ? [] : ['className' => Workorders2021Table::class];
        $this->Workorders2021 = $this->getTableLocator()->get('Workorders2021', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Workorders2021);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\Workorders2021Table::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
