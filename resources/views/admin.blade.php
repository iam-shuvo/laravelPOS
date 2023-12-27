@extends("master")
@section("content")

<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-info"></i>
                            <div class="ms-3">
                                <p class="mb-2">Today Manufacturer</p>
                                <h6 class="mb-0">{{$totalBrand}}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-info"></i>
                            <div class="ms-3">
                                <p class="mb-2">Today Product</p>
                                <h6 class="mb-0">{{$totalProductsModel}}</h6>
                            </div>
                        </div>
                    </div>
                   
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-info"></i>
                            <div class="ms-3">
                                <p class="mb-2">Category</p>
                                <h6 class="mb-0">{{$totalCategory}}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-bar fa-3x text-info"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Sales Order</p>
                                <h6 class="mb-0">{{$totalSalesOrder}}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x text-info"></i>
                            <div class="ms-3">
                                <p class="mb-2">Today Customers</p>
                                <h6 class="mb-0">{{$totalCustomers}}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-pie fa-3x text-info"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Purchase Order</p>
                                <h6 class="mb-0">{{$totalPurchaseOrder}}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-pie fa-3x text-info"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Suppliers</p>
                                <h6 class="mb-0">{{$totalSuppliers}}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- <!----- chart start---->

  --}}
@endsection
