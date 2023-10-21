<?php
// src/Model/Entity/Facility.php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Facility extends Entity
{
    protected $_accessible = [
        '*' => true,
        'id' => false,
        'slug' => false,
    ];
}