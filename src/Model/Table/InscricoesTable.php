<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Inscricoes Model
 *
 * @property \App\Model\Table\ItemsTable|\Cake\ORM\Association\BelongsTo $Items
 *
 * @method \App\Model\Entity\Inscrico get($primaryKey, $options = [])
 * @method \App\Model\Entity\Inscrico newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Inscrico[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Inscrico|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Inscrico patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Inscrico[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Inscrico findOrCreate($search, callable $callback = null, $options = [])
 */
class InscricoesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('inscricoes');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('Items', [
            'foreignKey' => 'item_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->allowEmpty('name');

        $validator
            ->email('email')
            ->allowEmpty('email');

        $validator
            ->allowEmpty('cell');

        $validator
            ->date('birthdate')
            ->allowEmpty('birthdate');

        $validator
            ->allowEmpty('rg');

        $validator
            ->integer('quantity')
            ->allowEmpty('quantity');

        return $validator;
    }

}
