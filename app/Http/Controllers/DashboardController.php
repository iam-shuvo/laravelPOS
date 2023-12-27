<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Customers;
use App\Models\ProductsModel;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Suppliers;
use App\Models\PurchaseOrder;
use App\Models\SalesOrder;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $totalCustomers = Customers::count();
       $totalProductsModel = ProductsModel::count();
    //    $totalStock = ProductsModel::count(stock);
       $totalCategory = Category::count();
       $totalBrand = Brand::count();
       $totalSuppliers = Suppliers::count();
       $totalPurchaseOrder = PurchaseOrder::count();
       $totalSalesOrder = SalesOrder::count();

       return view ('admin',compact([
        'totalCustomers',
        'totalProductsModel',
        'totalCategory',
        'totalBrand',
        'totalSuppliers',
        'totalPurchaseOrder',
        'totalSalesOrder'

       ]));
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
        //
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
