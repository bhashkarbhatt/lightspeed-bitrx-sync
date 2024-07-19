<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CustomerController extends Controller
{
    
    public function getCustomers()
    {
        $apiToken = env('LIGHTSPEED_API_TOKEN');
        $response = Http::withHeaders([
            'accept' => 'application/json',
            'authorization' => 'Bearer '. $apiToken,
        ])->get('https://trihealthy.retail.lightspeed.app/api/customers');

        return $response->json();
    }

    public function show(Customer $customer)
    {
        //
    }
    public function update(Request $request, Customer $customer)
    {
        //
    }
}
