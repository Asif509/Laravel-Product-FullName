<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    private static $products = [];
    public static function allProducts ()
    {
        self::$products = [
          0=> [
              'id' => 1,
              'name' => 'FootBall',
              'price' => '5600 Tk',
              'image' => '1.jpg',
              'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore eos esse fugiat illum itaque magni nam neque nihil nulla numquam obcaecati quae, quaerat reiciendis saepe sequi vel veritatis. Commodi, dolores',
          ],
        1=>[
            'id'=> 2,
            'name'=> 'Man\'s Shirt',
            'price' => '2000 Tk',
            'image' => '2.jpg',
            'description'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore eos esse fugiat illum itaque magni nam neque nihil nulla numquam obcaecati quae, quaerat reiciendis saepe sequi vel veritatis. Commodi, dolores'
        ],
        2=>[
            'id'=> 3,
            'name' => 'Red Saree',
            'price' => '15500 Tk',
            'image' => '3.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore eos esse fugiat illum itaque magni nam neque nihil nulla numquam obcaecati quae, quaerat reiciendis saepe sequi vel veritatis. Commodi, dolores'
        ],
        3=>[
            'id'=>4,
            'name'=> 'Sony Mobile',
            'price'=> '50000 Tk',
            'image' => '4.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore eos esse fugiat illum itaque magni nam neque nihil nulla numquam obcaecati quae, quaerat reiciendis saepe sequi vel veritatis. Commodi, dolores',
        ],
        4=>[
            'id'=>5,
            'name'=> 'Table Fan',
            'price'=> '2500Tk',
            'image' => '6.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore eos esse fugiat illum itaque magni nam neque nihil nulla numquam obcaecati quae, quaerat reiciendis saepe sequi vel veritatis. Commodi, dolores',
        ],
        5=>[
            'id'=>6,
            'name'=> 'IPS',
            'price'=> '50000 Tk',
            'image' => '5.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore eos esse fugiat illum itaque magni nam neque nihil nulla numquam obcaecati quae, quaerat reiciendis saepe sequi vel veritatis. Commodi, dolores',
        ],

        ];
        return self::$products;
    }
}
