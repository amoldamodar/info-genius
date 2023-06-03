<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    /**
         * The table associated with the model.
         *
         * @var string
         */
        protected $table = 'products';

        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
        protected $fillable = [
            'name',
            'description',
            'price',
        ];

        /**
         * Define any relationships with other models.
         */
        // Example: Product belongs to a Category
        public function category()
        {
            return $this->belongsTo(Category::class);
        }

        /**
         * Define any additional methods or functionality for the Product model.
         */
}
