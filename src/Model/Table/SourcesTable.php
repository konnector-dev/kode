<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sources Model
 *
 * @property \App\Model\Table\LoginsTable&\Cake\ORM\Association\HasMany $Logins
 * @property \App\Model\Table\TokensTable&\Cake\ORM\Association\HasMany $Tokens
 *
 * @method \App\Model\Entity\Source newEmptyEntity()
 * @method \App\Model\Entity\Source newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Source[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Source get($primaryKey, $options = [])
 * @method \App\Model\Entity\Source findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Source patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Source[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Source|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Source saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Source[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Source[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Source[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Source[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class SourcesTable extends Table
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

        $this->setTable('sources');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('Logins', [
            'foreignKey' => 'source_id',
        ]);
        $this->hasMany('Tokens', [
            'foreignKey' => 'source_id',
        ]);
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
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->boolean('status')
            ->requirePresence('status', 'create')
            ->notEmptyString('status');

        $validator
            ->scalar('slug')
            ->maxLength('slug', 255)
            ->requirePresence('slug', 'create')
            ->notEmptyString('slug');

        return $validator;
    }
}
