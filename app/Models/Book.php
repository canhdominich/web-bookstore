<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
	protected $table = 'books';
	protected $fillable  = [
		'name', 'code', 'description', 'category_id', 'slug', 'image', 'price',  'price_sale', 'quantity', 'bought', 'view_count', 'status', 'author'
	];
}
