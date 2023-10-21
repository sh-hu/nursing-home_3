<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Facilities Model
 *
 * @method \App\Model\Entity\Facility newEmptyEntity()
 * @method \App\Model\Entity\Facility newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Facility[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Facility get($primaryKey, $options = [])
 * @method \App\Model\Entity\Facility findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Facility patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Facility[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Facility|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Facility saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Facility[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Facility[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Facility[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Facility[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class FacilitiesTable extends Table
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

        $this->setTable('facilities');
        $this->setDisplayField('facility_type');
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
            ->scalar('facility_type')
            ->maxLength('facility_type', 255)
            ->requirePresence('facility_type', 'create')
            ->notEmptyString('facility_type');

        $validator
            ->scalar('name_of_facility')
            ->maxLength('name_of_facility', 255)
            ->requirePresence('name_of_facility', 'create')
            ->notEmptyString('name_of_facility');

        $validator
            ->integer('move_in_cost')
            ->requirePresence('move_in_cost', 'create')
            ->notEmptyString('move_in_cost');

        $validator
            ->integer('manthly_cost')
            ->requirePresence('manthly_cost', 'create')
            ->notEmptyString('manthly_cost');

        $validator
            ->scalar('prefecture')
            ->maxLength('prefecture', 255)
            ->requirePresence('prefecture', 'create')
            ->notEmptyString('prefecture');

        $validator
            ->scalar('address_of_facility')
            ->maxLength('address_of_facility', 255)
            ->requirePresence('address_of_facility', 'create')
            ->notEmptyString('address_of_facility');

        $validator
            ->scalar('access')
            ->maxLength('access', 255)
            ->requirePresence('access', 'create')
            ->notEmptyString('access');

        return $validator;
    }
}
