<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Orders Model
 *
 * @property \App\Model\Table\OrderproductsTable&\Cake\ORM\Association\HasMany $Orderproducts
 *
 * @method \App\Model\Entity\Order newEmptyEntity()
 * @method \App\Model\Entity\Order newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Order[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Order get($primaryKey, $options = [])
 * @method \App\Model\Entity\Order findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Order patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Order[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Order|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Order saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Order[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Order[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Order[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Order[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class OrdersTable extends Table
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

        $this->setTable('orders');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Orderproducts', [
            'foreignKey' => 'order_id',
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
            ->nonNegativeInteger('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('first_name')
            ->maxLength('first_name', 255)
            ->allowEmptyString('first_name');

        $validator
            ->scalar('last_name')
            ->maxLength('last_name', 255)
            ->allowEmptyString('last_name');

        $validator
            ->email('email')
            ->allowEmptyString('email');

        $validator
            ->scalar('phone')
            ->maxLength('phone', 255)
            ->allowEmptyString('phone');

        $validator
            ->scalar('billing_state')
            ->maxLength('billing_state', 255)
            ->allowEmptyString('billing_state');

        $validator
            ->scalar('shipping_address')
            ->maxLength('shipping_address', 255)
            ->allowEmptyString('shipping_address');

        $validator
            ->scalar('shipping_state')
            ->maxLength('shipping_state', 255)
            ->allowEmptyString('shipping_state');

        $validator
            ->decimal('weight')
            ->greaterThanOrEqual('weight', 0)
            ->allowEmptyString('weight');

        $validator
            ->integer('order_item_count')
            ->allowEmptyString('order_item_count');

        $validator
            ->decimal('subtotal')
            ->allowEmptyString('subtotal');

        $validator
            ->decimal('tax')
            ->allowEmptyString('tax');

        $validator
            ->decimal('shipping')
            ->allowEmptyString('shipping');

        $validator
            ->decimal('total')
            ->greaterThanOrEqual('total', 0)
            ->allowEmptyString('total');

        $validator
            ->scalar('status')
            ->maxLength('status', 255)
            ->allowEmptyString('status');

        $validator
            ->scalar('ip_address')
            ->maxLength('ip_address', 255)
            ->allowEmptyString('ip_address');

        return $validator;
    }
    public function validationReview(Validator $validator): Validator
    {
        $validator = $this->validationDefault($validator);

        $validator->allowEmpty('creditcard_number', function ($context) {
            return $context['data']['payment_method'] === 'cod';
        });

        $validator->add('creditcard_number', 'cc', [
            'rule' => 'cc',
            'message' => 'Please enter valid Credit Card',
            'on' => function ($context) {
                return $context['data']['payment_method'] === 'credit_card';
            }
        ]);

        $validator->notEmpty('creditcard_number', 'Credit Card is required', function ($context) {
            return $context['data']['payment_method'] === 'credit_card';
        });

        $validator->allowEmpty('creditcard_code', function ($context) {
            return $context['data']['payment_method'] === 'cod';
        });

        $validator->add('creditcard_code', 'custom', [
            'rule' => ['custom', '/^[0-9]{3,4}$/i'],
            'message' => 'Please enter valid CSC',
            'on' => function ($context) {
                return $context['data']['payment_method'] === 'credit_card';
            }
        ]);

        $validator->notEmpty('creditcard_code', 'CSC is required', function ($context) {
            return $context['data']['payment_method'] === 'credit_card';
        });

        $validator->notEmpty('creditcard_month', 'Month is required', function ($context) {
            return $context['data']['payment_method'] === 'credit_card';
        });

        $validator->notEmpty('creditcard_year', 'Year is required', function ($context) {
            return $context['data']['payment_method'] === 'credit_card';
        });

        return $validator;
    }

}
