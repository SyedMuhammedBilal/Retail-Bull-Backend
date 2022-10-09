<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'products';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
    // protected $fillable = [];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    public function inventories()
    {
        return $this->hasMany(Inventory::class,'sku','sku');
    }


    public function prices(){
        return $this->hasMany(Prices::class,'product_sku','sku');
    }

    public function metas(){
        return $this->hasMany(ProductMeta::class);
    }

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESSORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */


    public function setImageAttribute($value)
    {
        $attribute_name = "featured_image";
        $disk = "public";
        $destination_path = "images/product";

        $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path);

        // return $this->attributes[{$attribute_name}]; // uncomment if this is a translatable field
    }


    public function setPhotosAttribute($value)
    {
        $attribute_name = "gallery_images";
        $disk = "public";
        $destination_path = "images/product";

        $this->uploadMultipleFilesToDisk($value, $attribute_name, $disk, $destination_path);
    }


}
