<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * GithubUsers Model
 *
 * @method \App\Model\Entity\GithubUser newEmptyEntity()
 * @method \App\Model\Entity\GithubUser newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\GithubUser[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\GithubUser get($primaryKey, $options = [])
 * @method \App\Model\Entity\GithubUser findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\GithubUser patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\GithubUser[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\GithubUser|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GithubUser saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GithubUser[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\GithubUser[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\GithubUser[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\GithubUser[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class GithubUsersTable extends Table
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

        $this->setTable('github_users');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Tokens', [
            'foreignKey' => 'github_user_id',
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
            ->scalar('login')
            ->maxLength('login', 255)
            ->requirePresence('login', 'create')
            ->notEmptyString('login')
            ->add('login', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->allowEmptyString('name');

        $validator
            ->scalar('avatar')
            ->maxLength('avatar', 255)
            ->allowEmptyString('avatar');

        $validator
            ->integer('type')
            ->allowEmptyString('type');

        $validator
            ->boolean('site_admin')
            ->allowEmptyString('site_admin');

        $validator
            ->scalar('company')
            ->maxLength('company', 255)
            ->allowEmptyString('company');

        $validator
            ->scalar('blog')
            ->maxLength('blog', 255)
            ->allowEmptyString('blog');

        $validator
            ->scalar('location')
            ->maxLength('location', 255)
            ->allowEmptyString('location');

        $validator
            ->dateTime('since')
            ->allowEmptyDateTime('since');

        $validator
            ->boolean('active')
            ->allowEmptyString('active');

        $validator
            ->scalar('node')
            ->maxLength('node', 255)
            ->allowEmptyString('node');

        $validator
            ->scalar('gitid')
            ->maxLength('gitid', 255)
            ->allowEmptyString('gitid');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->isUnique(['login']));

        return $rules;
    }
}
