<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * Workorders2021Fixture
 */
class Workorders2021Fixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'workorders2021';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'work_order_timestamp' => 'Lorem ipsum dolor',
                'unit_name' => 'Lorem ipsum dolor sit amet',
                'san_po_num' => 'Lorem ipsu',
                'office_po_num' => 'Lorem ',
                'work_order_num' => 'Lorem ipsu',
                'description' => 'Lorem ipsum dolor sit amet',
                'staff_support_contact' => 'Lorem ip',
                'date_requested' => 'Lorem ip',
                'time_reqested' => 'Lorem ips',
                'not_to_exceed' => 'Lorem i',
                'warranty_coverage' => 'L',
                'invoiced' => 'Lorem i',
                'closed_by' => 'Lo',
                'completed_on' => 'Lorem ip',
                'work_summary' => 'Lorem ipsum dolor sit amet',
                'estimated_service_duration' => 'Lorem ipsum dolor sit amet',
                'freshdesk_ticket_num' => 'Lo',
            ],
        ];
        parent::init();
    }
}
