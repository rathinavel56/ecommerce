<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Attachment extends Entity
{

////////////////////////////////////////////////////////////////////////////////

    protected $_accessible = [
        'id' => true,
        'created' => true,
        'modified' => true,
        'foreign_id' => true,
        'name' => true,
        'class' => true
    ];
}
