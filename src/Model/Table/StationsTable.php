<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Stations Model
 *
 * @property \App\Model\Table\LinesTable|\Cake\ORM\Association\BelongsToMany $Lines
 *
 * @method \App\Model\Entity\Station get($primaryKey, $options = [])
 * @method \App\Model\Entity\Station newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Station[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Station|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Station patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Station[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Station findOrCreate($search, callable $callback = null, $options = [])
 */
class StationsTable extends Table
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

        $this->setTable('stations');
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


        $this->belongsToMany('Lines', [
            'foreignKey' => 'station_id',
            'targetForeignKey' => 'line_id',
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

        $validator
            ->numeric('lat')
            ->requirePresence('lat', 'create')
            ->notEmpty('lat');

        $validator
            ->numeric('lng')
            ->requirePresence('lng', 'create')
            ->notEmpty('lng');

        $validator
            ->scalar('vicinity')
            ->requirePresence('vicinity', 'create')
            ->notEmpty('vicinity');

        return $validator;
    }
}
