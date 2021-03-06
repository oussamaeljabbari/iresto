<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plate extends Model
{
    use HasFactory;

	protected $fillable = [
		'name',
		'price',
		'category_id',
		'description'
	];
	public function category(){
		return $this->belongsTo(Category::class);
	}

	public function images(){
		return $this->hasMany(PlateImage::class);
	}
	public function  thumbnail(){
	    return $this->images()->first()->image_url ?? '';
    }
}
