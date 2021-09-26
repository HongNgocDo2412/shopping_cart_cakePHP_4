<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Order Entity
 *
 * @property int $id
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $email
 * @property string|null $phone
 * @property string|null $billing_state
 * @property string|null $shipping_address
 * @property string|null $shipping_state
 * @property string|null $weight
 * @property int|null $order_item_count
 * @property string|null $subtotal
 * @property string|null $tax
 * @property string|null $shipping
 * @property string|null $total
 * @property string|null $status
 * @property string|null $ip_address
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Orderproduct[] $orderproducts
 */
class Order extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'first_name' => true,
        'last_name' => true,
        'email' => true,
        'phone' => true,
        'billing_state' => true,
        'shipping_address' => true,
        'shipping_state' => true,
        'weight' => true,
        'order_item_count' => true,
        'subtotal' => true,
        'tax' => true,
        'shipping' => true,
        'total' => true,
        'status' => true,
        'ip_address' => true,
        'created' => true,
        'modified' => true,
        'orderproducts' => true,
    ];
}
