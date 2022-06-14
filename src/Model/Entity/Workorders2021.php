<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Workorders2021 Entity
 *
 * @property int $id
 * @property string|null $work_order_timestamp
 * @property string|null $unit_name
 * @property string|null $san_po_num
 * @property string|null $office_po_num
 * @property string|null $work_order_num
 * @property string|null $description
 * @property string|null $staff_support_contact
 * @property string|null $date_requested
 * @property string|null $time_reqested
 * @property string|null $not_to_exceed
 * @property string|null $warranty_coverage
 * @property string|null $invoiced
 * @property string|null $closed_by
 * @property string|null $completed_on
 * @property string|null $work_summary
 * @property string|null $estimated_service_duration
 * @property string|null $freshdesk_ticket_num
 */
class Workorders2021 extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'work_order_timestamp' => true,
        'unit_name' => true,
        'san_po_num' => true,
        'office_po_num' => true,
        'work_order_num' => true,
        'description' => true,
        'staff_support_contact' => true,
        'date_requested' => true,
        'time_reqested' => true,
        'not_to_exceed' => true,
        'warranty_coverage' => true,
        'invoiced' => true,
        'closed_by' => true,
        'completed_on' => true,
        'work_summary' => true,
        'estimated_service_duration' => true,
        'freshdesk_ticket_num' => true,
    ];
}
