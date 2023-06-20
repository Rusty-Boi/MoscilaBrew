<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MsDelivery;
use App\Models\MsDeliveryService;
use Illuminate\Database\Eloquent\Relations\HasOne;

class DeliveryDetail extends Model
{
    use HasFactory;

    public function msDeliveryName(): HasOne
    {
        return $this->hasOne(MsDelivery::class, 'id', 'msDelivery_id');
    }

    public function msDeliveryServiceName(): HasOne
    {
        return $this->hasOne(msDeliveryService::class, 'id', 'msDelivery_id');
    }
}