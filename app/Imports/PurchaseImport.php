<?php

namespace App\Imports;

use App\Purchase;
use App\Customer;
use Maatwebsite\Excel\Concerns\ToModel;

class PurchaseImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Purchase([
            'customer_id'=> $this->getCustomerIdDB($row[1], $row[2]),
             'company'=> $row[3],
            'bank_acc_number' => $row[4],       
        ]);
    }

    private function getCustomerIdDB($first_name, $last_name)
    {
        $customer = Customer::where('first_name', $first_name)->where('last_name', $last_name)->first();
        if (!$customer) return null;
        return $customer->id;
    }
}
