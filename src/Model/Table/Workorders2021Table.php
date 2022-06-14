<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Workorders2021 Model
 *
 * @method \App\Model\Entity\Workorders2021 newEmptyEntity()
 * @method \App\Model\Entity\Workorders2021 newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Workorders2021[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Workorders2021 get($primaryKey, $options = [])
 * @method \App\Model\Entity\Workorders2021 findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Workorders2021 patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Workorders2021[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Workorders2021|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Workorders2021 saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Workorders2021[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Workorders2021[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Workorders2021[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Workorders2021[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class Workorders2021Table extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('workorders2021');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('work_order_timestamp')
            ->maxLength('work_order_timestamp', 19)
            ->allowEmptyString('work_order_timestamp');

        $validator
            ->scalar('unit_name')
            ->maxLength('unit_name', 32)
            ->allowEmptyString('unit_name');

        $validator
            ->scalar('san_po_num')
            ->maxLength('san_po_num', 12)
            ->allowEmptyString('san_po_num');

        $validator
            ->scalar('office_po_num')
            ->maxLength('office_po_num', 8)
            ->allowEmptyString('office_po_num');

        $validator
            ->scalar('work_order_num')
            ->maxLength('work_order_num', 12)
            ->allowEmptyString('work_order_num');

        $validator
            ->scalar('description')
            ->maxLength('description', 783)
            ->allowEmptyString('description');

        $validator
            ->scalar('staff_support_contact')
            ->maxLength('staff_support_contact', 10)
            ->allowEmptyString('staff_support_contact');

        $validator
            ->scalar('date_requested')
            ->maxLength('date_requested', 10)
            ->allowEmptyString('date_requested');

        $validator
            ->scalar('time_reqested')
            ->maxLength('time_reqested', 11)
            ->allowEmptyString('time_reqested');

        $validator
            ->scalar('not_to_exceed')
            ->maxLength('not_to_exceed', 9)
            ->allowEmptyString('not_to_exceed');

        $validator
            ->scalar('warranty_coverage')
            ->maxLength('warranty_coverage', 3)
            ->allowEmptyString('warranty_coverage');

        $validator
            ->scalar('invoiced')
            ->maxLength('invoiced', 9)
            ->allowEmptyString('invoiced');

        $validator
            ->scalar('closed_by')
            ->maxLength('closed_by', 4)
            ->allowEmptyString('closed_by');

        $validator
            ->scalar('completed_on')
            ->maxLength('completed_on', 10)
            ->allowEmptyString('completed_on');

        $validator
            ->scalar('work_summary')
            ->maxLength('work_summary', 2140)
            ->allowEmptyString('work_summary');

        $validator
            ->scalar('estimated_service_duration')
            ->maxLength('estimated_service_duration', 63)
            ->allowEmptyString('estimated_service_duration');

        $validator
            ->scalar('freshdesk_ticket_num')
            ->maxLength('freshdesk_ticket_num', 4)
            ->allowEmptyString('freshdesk_ticket_num');

        return $validator;
    }
}
