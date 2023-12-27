@extends("master")
@section("content")

<div class="col-sm-12 col-xl-12">
    <div class="bg-light text-dark rounded h-100 p-4">
        <h6 class="mb-4">All Products</h6>
            <table class="table text-dark">
                <thead>
                    <tr>
                        <th scope="col">Product Name</th>
                        <th scope="col">Category</th>
                        <th scope="col">Brand</th>
                        <th scope="col">Description</th>
                        <th scope="col">Image</th>
                        <th scope="col">Stock</th>
                        
                        
                        
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user as $row)
                <tr>
                    <td>{{$row->product_name}}</td>
                    <td>{{$row->category_name}}</td>
                    <td>{{$row->brand_name}}</td>
                    <td>{{$row->description}}</td>
                    <td><img src="{{ "/uploads/".$row->product_image}}" style="width:60px; height:60px;"></td>
                    <td>{{$row->stock}}</td>
                  
                    

                </tr>


                @endforeach
                </tbody>
            </table>
    </div>
</div>



@endsection
