<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Chamber Entity
 *
 * @property int $chamber_id
 * @property string|null $chamber_name
 * @property string|null $business_name
 * @property string|null $chamber_type
 * @property string|null $chamber_location
 * @property string|null $chamber_city
 * @property string|null $chamber_state
 * @property string|null $chamber_zipcode
 * @property string|null $chamber_country
 * @property string|null $netbiter_user
 * @property string|null $netbiter_pwd
 * @property string|null $root_pwd
 * @property string|null $odroid_pwd
 * @property string|null $dglux_user
 * @property string|null $dglux_pwd
 * @property string|null $plc_Pwd
 * @property string|null $cryoqueue
 */
class Chamber extends Entity
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
        'chamber_name' => true,
        'business_name' => true,
        'chamber_type' => true,
        'chamber_location' => true,
        'chamber_city' => true,
        'chamber_state' => true,
        'chamber_zipcode' => true,
        'chamber_country' => true,
        'netbiter_user' => true,
        'netbiter_pwd' => true,
        'root_pwd' => true,
        'odroid_pwd' => true,
        'dglux_user' => true,
        'dglux_pwd' => true,
        'plc_Pwd' => true,
        'cryoqueue' => true,
    ];
}
