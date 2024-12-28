<?php

namespace App\Http\Controllers;

use App\Models\Customer; 
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        // Lấy danh sách khách hàng từ cơ sở dữ liệu (10 bản ghi mỗi trang)
        $customers = Customer::paginate(10); 

        // Trả dữ liệu đến view
        return view('customers.index', compact('customers'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customers.create');
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email|unique:customers,email',
            'account_type' => 'required|string',
            'status' => 'required|string',
            'last_login' => 'nullable|date',
        ]);
    
        Customer::create($validatedData);
    
        return redirect()->route('customers.index')->with('success', 'Customer added successfully.');
    }
    
    

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $customer = Customer::findOrFail($id);
        return view('customers.show', compact('customer'));
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $customer = Customer::findOrFail($id); // Lấy khách hàng theo ID
        return view('customers.edit', compact('customer')); // Trả về view sửa và truyền dữ liệu khách hàng
    }
    
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $customer = Customer::findOrFail($id);
    
        $validatedData = $request->validate([
            'email' => 'required|email|unique:customers,email,' . $customer->id,
            'account_type' => 'required|string',
            'status' => 'required|string',
            'last_login' => 'nullable|date',
        ]);
    
        $customer->update($validatedData);
    
        return redirect()->route('customers.index')->with('success', 'Customer updated successfully.');
    }
    
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();
    
        return redirect()->route('customers.index')->with('success', 'Customer deleted successfully.');
    }
    
    
}
