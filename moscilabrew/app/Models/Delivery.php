<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\DeliveryDetail;

class Delivery extends Model
{
    use HasFactory;

    /**
     * Get the deliveryDetail associated with the Delivery
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function deliveryDetail(): HasOne
    {
        return $this->hasOne(DeliveryDetail::class, 'id', 'deliveryDetail_id');
    }
}
