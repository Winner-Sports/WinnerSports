<?php
// app/Http/Controllers/InvoiceController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Database\QueryException;
use App\Models\DemoInvoice;

class InvoiceController extends Controller
{
    public function saveInvoice(Request $request)
    {
        try {
            // Validate the form data
            $validatedData = $request->validate([
                'staff_name' => 'required|string',
                'staff_id' => 'required|string',
                'date' => 'required|date',
                'Customer_name' => 'required|string',
                'Address' => 'required|string',
                'Bs_type' => 'required|string',
                'phone' => 'required|string',
                // Add other validation rules as needed
            ]);

            // Create a new DemoInvoice instance and save it to the database
            $invoice = DemoInvoice::create($validatedData);

            // Redirect to the invpdf route with success message and invoice data
            return Redirect::route('invpdf')->with('success', 'Invoice saved successfully!');
        } catch (QueryException $e) {
            // Log or handle the exception
            // For debugging purposes, you can use dd($e->getMessage());
            // In production, consider logging the error and redirecting the user with an error message
            return Redirect::back()->with('error', 'An error occurred while saving the invoice.');
        }
    }
}