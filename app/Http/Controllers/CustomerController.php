<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{


    const STRING_VALIDATION = 'required|string';
    const INTEGER_VALIDATION = 'required|integer';

    private $customer;
    public function __construct() {
        $this->customer = new Customer();
    }

    public function index(Request $request)
    {

        if(!empty($request->session()->get('lastStep'))){

            switch ($request->session()->get('lastStep') ) {

                case '1':
                    return redirect()->route('createStepOne');
                break;

                case '2':
                    return redirect()->route('createStepTwo');
                break;             
                
                case '3':
                    return redirect()->route('createStepThree');
                break;  
                
                case '4':
                    return redirect()->route('createStepFour');
                break;                    

                default:
                    return redirect()->route('createStepOne');
                break;
            }
        }

        return redirect()->route('createStepOne');
    }


    public function createStepOne(Request $request)
    {
        if(!empty($request->session()->get('customer'))){
            $customer = $request->session()->get('customer');
        }else{
            $customer = $this->customer;
        }
        $request->session()->put('lastStep', 1);
        return view('customers/create-step-one',compact('customer'));
    }    

    public function postStepOne(Request $request)
    {
        $validatedData = $request->validate([
            'firstName' => self::STRING_VALIDATION,
            'lastName' => self::STRING_VALIDATION,
            'telephone' => self::STRING_VALIDATION,
        ]);
  
        if(empty($request->session()->get('customer'))){

            $this->customer->fill($validatedData);
            $request->session()->put('customer', $this->customer);
        }else{
            $this->customer = $request->session()->get('customer');
            $this->customer->fill($validatedData);
            $request->session()->put('customer', $this->customer);
        }
        return redirect()->route('createStepTwo');
    }    
}
