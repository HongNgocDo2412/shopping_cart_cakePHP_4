<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Product Entity
 *
 * @property int $id
 * @property int|null $category_id
 * @property string|null $name
 * @property string|null $slug
 * @property string|null $description
 * @property string|null $image
 * @property string|null $price
 * @property string|null $weight
 * @property int|null $views
 * @property int|null $active
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Category $category
 * @property \App\Model\Entity\Orderproduct[] $orderproducts
 * @property \App\Model\Entity\Productoption[] $productoptions
 */
class Product extends Entity
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
        'category_id' => true,
        'name' => true,
        'slug' => true,
        'description' => true,
        'image' => true,
        'price' => true,
        'weight' => true,
        'views' => true,
        'active' => true,
        'created' => true,
        'modified' => true,
        'category' => true,
        'orderproducts' => true,
        'productoptions' => true,
    ];
}
