<?php

namespace LineXTI\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    /**
     *
     * @var array
     */
    protected $fillable = [
        'product_id',
        'order_id',
        'price',
        'qtd'
    ];

    /**
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    /**
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
