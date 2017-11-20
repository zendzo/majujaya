<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\SendCustomeSmsInvoiceNotification;
use App\Supplier;
use App\User;

class SendCustomeInvoiceController extends Controller
{
    public function sendPenjualanInvoice(Request $request)
    {
    	$input = $request->all();

    	$data = $input['content'];

    	$user = User::findOrFail($input['user_id']);

    	try {
    		$user->notify(new SendCustomeSmsInvoiceNotification($data));
	    		return redirect()->back()
	    				->with('message','Pesan Telah Dikirm')
	                    ->with('status','success')
	                    ->with('type','success');
    	} catch (\Exception $e) {
    		return redirect()->back()
	    				->with('message',$e->getMessage())
	                    ->with('status','Something Wrong!')
	                    ->with('type','error');
    	}

    }

    public function sendPembelianInvoice(Request $request)
    {
        $input = $request->all();

        $data = $input['content'];

        $user = Supplier::findOrFail($input['supplier_id']);

        try {
            $user->notify(new SendCustomeSmsInvoiceNotification($data));
                return redirect()->back()
                        ->with('message','Pesan Telah Dikirm')
                        ->with('status','success')
                        ->with('type','success');
        } catch (\Exception $e) {
            return redirect()->back()
                        ->with('message',$e->getMessage())
                        ->with('status','Something Wrong!')
                        ->with('type','error');
        }

    }
}
