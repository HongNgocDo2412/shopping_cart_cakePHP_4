<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Orderproduct Entity
 *
 * @property int $id
 * @property int|null $order_id
 * @property int|null $product_id
 * @property int|null $productoption_id
 * @property string|null $name
 * @property string|null $productoption_name
 * @property int|null $quantity
 * @property string|null $weight
 * @property string|null $price
 * @property string|null $subtotal
 * @property string|null $note
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Order $order
 * @property \App\Model\Entity\Product $product
 * @property \App\Model\Entity\Productoption $productoption
 */
class Orderproduct extends Entity
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
        'order_id' => true,
        'product_id' => true,
        'productoption_id' => true,
        'name' => true,
        'productoption_name' => true,
        'quantity' => true,
        'weight' => true,
        'price' => true,
        'subtotal' => true,
        'note' => true,
        'created' => true,
        'modified' => true,
        'order' => true,
        'product' => true,
        'productoption' => true,
    ];
}
