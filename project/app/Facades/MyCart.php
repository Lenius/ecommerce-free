<?php
namespace App\Facades;

use Lenius\LaravelEcommerce\Facades\Cart;

class MyCart extends Cart
{
    const PRODUCT_TYPE = 'item';
    const DELIVERY_TYPE = 'delivery';

    public static function hasProducts() : bool
    {
        foreach (Cart::contents() as $key => $value) {
            if (self::PRODUCT_TYPE == $value->type) {
                return true;
            }
        }

        return false;
    }

    public static function getDelivery()
    {
        foreach (Cart::contents() as $key => $value) {
            if (self::DELIVERY_TYPE == $value->type) {
                return $value;
            }
        }

        return false;
    }

    public static function hasDelivery() : bool
    {
        foreach (Cart::contents() as $key => $value) {
            if (self::DELIVERY_TYPE == $value->type) {
                return true;
            }
        }

        return false;
    }

    public static function removeDelivery() : bool
    {
        foreach (Cart::contents() as $key => $value) {
            if (self::DELIVERY_TYPE == $value->type) {
                Cart::remove($key);
                return true;
            }
        }

        return false;
    }

    public static function content(): array
    {
        $basket['items'] = [];

        foreach (Cart::contents() as $key => $value) {
            $basket['items'][$key] = [
                'id'                            => $value->id,
                'weight'                        => $value->weight,
                'weight_total'                  => $value->weight(),
                'number'                        => $value->number,
                'image'                         => $value->image,
                'note'                          => $value->note,
                'name'                          => $value->name,
                'unit'                          => $value->unit,
                'type'                          => $value->type,
              //  'delivery_type_id'              => $value->delivery_type_id,
              //  'delivery_info'                 => $value->delivery_info,
                'quantity'                      => $value->quantity,
                'stock'                         => $value->stock,
                'tax'                           => $value->tax,
                'price_single'                  => $value->single(false),
                'price_single_total'            => $value->total(false),
                'price_with_tax'                => $value->single(true),
                'price_with_tax_total'          => $value->total(true),
               // 'options'                       => $value->hasOptions() ? $value->options : [],
               // 'link'                          => $value->link,
               // 'edit'                          => $value->edit,
            ];
        }
        $basket['sum'] = Cart::total(false);
        $basket['tax'] = Cart::tax();
        $basket['total'] = Cart::total();
        $basket['total_items'] = Cart::totalItems();
        $basket['total_weight'] = Cart::weight();

        return $basket;
    }
}
