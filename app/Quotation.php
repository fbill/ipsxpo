<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    public function portOrigin()
    {
        return $this->belongsto('App\Port','origin_port_id');
    }

    public function portDestin()
    {
        return $this->belongsto('App\Port','destination_port_id');
    }

    public function shippingType()
    {
        return $this->belongsto('App\ShippingType');
    }
}
