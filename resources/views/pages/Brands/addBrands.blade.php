@extends("master")
@section("content")

<div class="col-sm-12 col-xl-12">
    <div class="bg-light rounded h-100 p-4">
        <h6 class="mb-4 ">Add Brand</h6>
        <form form action="{{ route('brand_add') }}" method="POST">
               @csrf
                <div class="mb-3 text-dark">
                    <label for="exampleInputBrand" class="form-label">Brand Name :</label>
                    <input type="text" class="form-control bg-white" id="exampleInputBrand" placeholder="Enter brand name" name="brand_name"
                    aria-describedby="brandHelp">
                </div>
                <button type="submit" class="btn btn-info">Submit</button>
         </form>

    </div>
</div>
@endsection
