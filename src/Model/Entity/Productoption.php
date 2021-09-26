<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Productoption Entity
 *
 * @property int $id
 * @property int|null $product_id
 * @property string|null $name
 * @property string|null $value
 * @property string|null $price
 * @property string|null $weight
 * @property int|null $active
 * @property int|null $views
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Product $product
 * @property \App\Model\Entity\Orderproduct[] $orderproducts
 */
class Productoption extends Entity
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
        'product_id' => true,
        'name' => true,
        'value' => true,
        'price' => true,
        'weight' => true,
        'active' => true,
        'views' => true,
        'created' => true,
        'modified' => true,
        'product' => true,
        'orderproducts' => true,
    ];
}
