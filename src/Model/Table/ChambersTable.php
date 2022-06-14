<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Chambers Model
 *
 * @method \App\Model\Entity\Chamber newEmptyEntity()
 * @method \App\Model\Entity\Chamber newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Chamber[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Chamber get($primaryKey, $options = [])
 * @method \App\Model\Entity\Chamber findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Chamber patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Chamber[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Chamber|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Chamber saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Chamber[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Chamber[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Chamber[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Chamber[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ChambersTable extends Table
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

        $this->setTable('chambers');
        $this->setDisplayField('chamber_id');
        $this->setPrimaryKey('chamber_id');
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
            ->scalar('chamber_name')
            ->maxLength('chamber_name', 35)
            ->allowEmptyString('chamber_name');

        $validator
            ->scalar('business_name')
            ->maxLength('business_name', 46)
            ->allowEmptyString('business_name');

        $validator
            ->scalar('chamber_type')
            ->maxLength('chamber_type', 5)
            ->allowEmptyString('chamber_type');

        $validator
            ->scalar('chamber_location')
            ->maxLength('chamber_location', 54)
            ->allowEmptyString('chamber_location');

        $validator
            ->scalar('chamber_city')
            ->maxLength('chamber_city', 20)
            ->allowEmptyString('chamber_city');

        $validator
            ->scalar('chamber_state')
            ->maxLength('chamber_state', 2)
            ->allowEmptyString('chamber_state');

        $validator
            ->scalar('chamber_zipcode')
            ->maxLength('chamber_zipcode', 6)
            ->allowEmptyString('chamber_zipcode');

        $validator
            ->scalar('chamber_country')
            ->maxLength('chamber_country', 3)
            ->allowEmptyString('chamber_country');

        $validator
            ->scalar('netbiter_user')
            ->maxLength('netbiter_user', 42)
            ->allowEmptyString('netbiter_user');

        $validator
            ->scalar('netbiter_pwd')
            ->maxLength('netbiter_pwd', 26)
            ->allowEmptyString('netbiter_pwd');

        $validator
            ->scalar('root_pwd')
            ->maxLength('root_pwd', 15)
            ->allowEmptyString('root_pwd');

        $validator
            ->scalar('odroid_pwd')
            ->maxLength('odroid_pwd', 15)
            ->allowEmptyString('odroid_pwd');

        $validator
            ->scalar('dglux_user')
            ->maxLength('dglux_user', 9)
            ->allowEmptyString('dglux_user');

        $validator
            ->scalar('dglux_pwd')
            ->maxLength('dglux_pwd', 23)
            ->allowEmptyString('dglux_pwd');

        $validator
            ->scalar('plc_Pwd')
            ->maxLength('plc_Pwd', 32)
            ->allowEmptyString('plc_Pwd');

        $validator
            ->scalar('cryoqueue')
            ->maxLength('cryoqueue', 71)
            ->allowEmptyString('cryoqueue');

        return $validator;
    }
}
