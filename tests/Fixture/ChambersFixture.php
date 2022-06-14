<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ChambersFixture
 */
class ChambersFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'chamber_id' => 1,
                'chamber_name' => 'Lorem ipsum dolor sit amet',
                'business_name' => 'Lorem ipsum dolor sit amet',
                'chamber_type' => 'Lor',
                'chamber_location' => 'Lorem ipsum dolor sit amet',
                'chamber_city' => 'Lorem ipsum dolor ',
                'chamber_state' => 'Lo',
                'chamber_zipcode' => 'Lore',
                'chamber_country' => 'L',
                'netbiter_user' => 'Lorem ipsum dolor sit amet',
                'netbiter_pwd' => 'Lorem ipsum dolor sit am',
                'root_pwd' => 'Lorem ipsum d',
                'odroid_pwd' => 'Lorem ipsum d',
                'dglux_user' => 'Lorem i',
                'dglux_pwd' => 'Lorem ipsum dolor sit',
                'plc_Pwd' => 'Lorem ipsum dolor sit amet',
                'cryoqueue' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
