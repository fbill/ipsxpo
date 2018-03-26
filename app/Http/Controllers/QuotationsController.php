<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ShippingType;
use App\Repositories\QuotationRepo;
use Illuminate\Support\Collection;

class QuotationsController extends Controller
{
    protected $quotationRepo;

    public function __construct(QuotationRepo $quotationRepo)
    {
        $this->quotationRepo=$quotationRepo;
    }
    /**
     *
     */
    public function getQuota()
    {
        $typesShipping=ShippingType::pluck('fullname','id');
        /*$val=$this->quotationRepo->getQuotaForParameter(2);
        foreach ($val as $item) {
            //dd($item->portOrigin->id,$item->portOrigin->fullname,$item->portDestin->id,$item->portDestin->fullname);
            $arrayPortOrigin[] = array('id'=>$item->portOrigin->id,'fullname'=>$item->portOrigin->fullname);
        }
        $portOriginCollection=Collection::make($arrayPortOrigin);dd($portOriginCollection);*/
        return view('ips.quote',compact('typesShipping'));
    }



    public function getPortOrigin(Request $request,$id)
    {
        if ($request->ajax())
        {
            $val=$this->quotationRepo->getQuotaForParameter($id);
            foreach ($val as $item) {
                //dd($item->portOrigin->id,$item->portOrigin->fullname,$item->portDestin->id,$item->portDestin->fullname);
                $arrayPortOrigin = array('id'=>$item->portOrigin->id,'fullname'=>$item->portOrigin->fullname);
            }
            $portOriginCollection=Collection::make($arrayPortOrigin);
            return response()->json($portOriginCollection);
        }
    }
}
