<?php

namespace App\Services;

class ProductService
{
    /**
     * Delete the given $product. Returns the delete model or false if an error has occured
     * 
     * @return Product | boolean
     */
    public function delete(Product $product)
    {
        try {
            return $product->delete();
        } catch(QueryException $e) {
            return false;
        }
    }
}