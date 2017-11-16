<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Lines Model
 *
 * @property \App\Model\Table\RecordsTable|\Cake\ORM\Association\HasMany $Records
 * @property \App\Model\Table\StationsTable|\Cake\ORM\Association\BelongsToMany $Stations
 *
 * @method \App\Model\Entity\Line get($primaryKey, $options = [])
 * @method \App\Model\Entity\Line newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Line[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Line|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Line patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Line[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Line findOrCreate($search, callable $callback = null, $options = [])
 */
class LinesTable extends Table
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

        $this->setTable('lines');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');
$this->addBehavior('Search.Search');
        $this->searchManager()
          ->add('q', 'Search.Like', [
            'before' => true,
            'after' => true,
            'mode' => 'or',
            'comparison' => 'LIKE',
            'wildcardAny' => '*',
            'wildcardOne' => '?',
            'field' => ['name']
          ]);


        $this->hasMany('Records', [
            'foreignKey' => 'line_id'
        ]);
        $this->belongsToMany('Stations', [
            'foreignKey' => 'line_id',
            'targetForeignKey' => 'station_id',
            'joinTable' => 'lines_stations'
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
            ->uuid('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('name')
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        return $validator;
    }
}
