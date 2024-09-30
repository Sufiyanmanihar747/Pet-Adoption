<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Exception;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Http\Request;
use Razorpay\Api\Api;
use Illuminate\Support\Facades\Session as FacadesSession;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd('this is payment',$request);
        $input = $request->all();

        if (!isset($input['razorpay_payment_id'])) {
            FacadesSession::put('error', 'Invalid payment ID');
            return redirect()->back()->withInput();
        }
        $api = new Api("rzp_test_khi1E543xQPo9C", "tkWPtaDmcdWWqzqypcCUg29s");

        try {
            $payment = $api->payment->fetch($input['razorpay_payment_id']);
            if ($payment && isset($payment['amount'])) {
                $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount' => $payment['amount']));
                Payment::create([
                    'razorpay_payment_id' => $payment['id'],
                    'amount' => $payment['amount'],
                    'currency' => $payment['currency'],
                    'status' => $payment['status'],
                ]);
                return redirect()->back();
            }
        } catch (Exception $e) {
            FacadesSession::put('error', $e->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
