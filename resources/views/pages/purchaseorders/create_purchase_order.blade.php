@extends('master')
@section('content')

    <div class="" >
        <section  style="background-color: white">
            <div class="container-fluid">
                <div class="mb-12 row">
                    <div class="text-center col-sm-6">
                        <h1 class="text-dark"> Create Purchase Orders</h1>
                    </div>
                    <div class="text-right col-sm-6">
                        <h3 class="pt-3 text-dark">Date {{ date('d-m-y') }}</h3>

                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- Main content -->

    <section class="" style="background-color: white">
            <!-- Default box -->
            <div class="container-fluid">
                <div class="card">

                    <div class="p-0 card-body table-responsive">
                        <div class="row">

                            <div class="col-6" style="background-color: white">
                                <div class="mb-3 row">
                                    <div class="col-7">
                                        <label style="font-size: 30px; padding-left:6px; for=" name">Purchase</label>

                                    </div>


                                </div>
                                <form action="{{ route('order.purchase-order.store') }}" method="post">
                                    @csrf
                                    <div>
                                        <div>

                                            <table class="table">
                                                <thead class="bg-info">
                                                    <tr>
                                                        <th class="text-white">Name</th>
                                                        <th class="text-white">Stock</th>
                                                        <th class="text-white">Qty</th>
                                                        <th class="text-white">Buying price</th>
                                                        <th class="text-white">Sub Total</th>
                                                        <th class="text-white">Action</th>

                                                    </tr>
                                                </thead>

                                                <tbody id="purchaseOrderForm">

                                                </tbody>
                                            </table>

                                        </div>
                                        <div class="pl-4 pricing-footer text-dark">
                                            <p style="font-size:19px" >Quantity : <span id="totalQuantity"></span></p>
                                            <p style="font-size:19px">Sub Total: <span id="subtotal"></p>

                                            <hr>
                                            <p>
                                            <h2 class="text-dark">Total:</h2>
                                            <h1 id="total" class="text-dark"></h1>
                                            </p>
                                            <div class="mt-3">
                                                <select name="supplierId" class="form-control ">
                                                    <option class="text-dark"  selected=""> Select a Supplier</option>
                                                    @foreach ($suppliers as $supplier )
                                                    <option value="{{ $supplier->id }}">
                                                        {{ $supplier->supp_name }}
                                                    </option>

                                                    @endforeach

                                                </select>
                                            </div>
                                            <div class="mt-3">
                                                <button type="submit" class="btn btn-success">Create Purchase Order</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            {{-- ********* All Product Start --}}

                            <div class="col-6">

                                <div class="table-responsive">
                                    <table class="table text-white table-hover text-nowrap">
                                        <thead>

                                            <tr class="bg-info">
                                                <th>Product</th>
                                                <th>Category</th>
                                                <th>Images</th>
                                                <th>Brand</th>
                                                <th>Buying Price</th>
                                                <th>SKU</th>
                                                <th>Stock</th>
                                                <th>Add</th>
                                            </tr>


                                        </thead>
                                        <tbody class="bg-dark">

                                            @foreach ($products as $product)
                                                <tr>
                                                    <input class="productId" type="hidden" name="id" value="{{ $product->id }}">
                                                    <input type="hidden" name="name" value="name">
                                                    <input type="hidden" name="qty" value="1">

                                                    <input type="hidden" name="price" value="500">


                                                    <td class="productName">{{ $product->product_name }}</td>

                                                    <td>{{ $product->category->category_name }}</td>
                                                    <td>
                                                        <img src="{{ url('uploads/' . $product->product_image) }}"
                                                            style="height: 40px;width:50px;">
                                                    </td>
                                                    <td>{{ $product->brand->brand_name }}</td>
                                                    <td class="buyingPrice">{{ $product->buying_price }}</td>
                                                    <td>{{ $product->sku }}</td>
                                                    <td class="stock">{{ $product->stock }}</td>
                                                    <td>
                                                        <button type="submit" class="btn btn-info btn-sm addToCartButton">
                                                            <i class="fas fa-plus-square"></i>
                                                        </button>
                                                    </td>

                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- /.card -->




                {{-- suppliers add modal --}}
                <div class="col-md-6">
                    <form action="{{ route('supp_add') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="">
                                        <h4 class="text-center modal-title bg-info" id="exampleModalLabel"> Add New
                                            Supplier</h4>
                                    </div>


                                    <div class="modal-body bg-info">


                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">Name : </label>
                                            <input type="text" name="supp_name" placeholder="Supplier Name"
                                                class="form-control" id="recipient-name">
                                        </div>
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">Email : </label>
                                            <input type="text" name="supp_email" placeholder="Email"
                                                class="form-control" id="recipient-name">
                                        </div>
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">Phone Number : </label>
                                            <input type="text" name="supp_phone" placeholder=" Phone Number"
                                                class="form-control" id="recipient-name">
                                        </div>
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">Address : </label>
                                            <input type="text" name="supp_address" placeholder="Address"
                                                class="form-control" id="recipient-name">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </section>
    </div>
@endsection

@push('scripts')
<script >
    $(document).ready(function(){
        $('.addToCartButton').click(function (e){
            let productId = $(this).closest('tr').find('.productId').val();
            let productName = $(this).closest('tr').find('.productName').text();
            let buyingPrice = $(this).closest('tr').find('.buyingPrice').text();
            let stock = $(this).closest('tr').find('.stock').text();

            let productHtml = `
                <tr class="productRow">
                    <td>${productName}</td>
                    <td>${stock}</td>
                    <input type="hidden" value="${productId}" name="productId[]">
                    <td>
                        <input class="productQuantity" type="number" name="quantity[]" value="1" style="width:40px;">
                    </td>
                    <td class="buyingPrice">${buyingPrice}</td>
                    <td class="subTotal">${buyingPrice}</td>
                    <td class="deleteProduct"><a><i class="fas fa-trash-alt text-danegr"></i> </a>
                    </td>
                </tr>
            `
            $('#purchaseOrderForm').append(productHtml);
            calculateTotal();
            calculateTotalQuantity();
        })
        $(document).on('click', '.deleteProduct', function(e){
            $(this).closest('.productRow').remove();
            calculateTotal()
        })
        $(document).on('change', '.productQuantity', function(e){
            let quantity = $(this).val();
            let buyingPrice = $(this).parent().parent().find('.buyingPrice').text();
            let subtotal = buyingPrice * quantity;
            $(this).parent().parent().find('.subTotal').text(subtotal);
            calculateTotal()
            calculateTotalQuantity()
        })

        function calculateTotal(){
            let sum = 0
          $('.subTotal').each(function(){
            sum += parseInt($(this).text());
          })
          $('#total').text(sum);
        }

        function calculateTotalQuantity(){
            // Calculate total Quantity
            let totalQuantity = 0;
            $('.productQuantity').each(function(){
                let quantity = parseInt($(this).val());
                totalQuantity += quantity;
            })
            $('#totalQuantity').text(totalQuantity);
            console.log(totalQuantity);
        }


    });

</script>


@endpush



