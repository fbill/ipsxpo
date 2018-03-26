<?php
/**
 * Created by PhpStorm.
 * User: Webmaster
 * Date: 23/03/2018
 * Time: 06:18 PM
 */

namespace App\Repositories;
use App\Quotation;

class QuotationRepo extends BaseRepo
{
    public function getModel()
    {
        return new Quotation;
    }

    public function getQuotaForParameter($shippingType)
    {
        $PortOrigin =Quotation::where('shipping_type_id',$shippingType)->groupBy('origin_port_id')->get();
        return $PortOrigin;
    }

    /*public function getPortOrigin($shippingType)
    {
        $PortOrigin =Quotation::join('quotations','ports.id','=','quotations.origin_port_id')->select('quotations.origin_port_id','ports.fullname')->where('quotations.shipping_type_id',$shippingType)->get();
        return $PortOrigin;
    }*/
}