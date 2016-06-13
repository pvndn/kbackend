<?php

namespace App\Models;

use Baum\Node;
use Illuminate\Database\Eloquent\Model;

class Category extends Node
{
    protected $table = 'categories';

    protected $fillabe = [
    	'name', 'slug', 'icon', 'style',
    	'sort_order', 'set_title', 'meta_sesc', 'meta_key', 'publish'
    ];

    public function updateOrder ($order, $orderCategory)
}
