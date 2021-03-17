<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <h2 class="font-weight-bold">Product List</h2>
                <div class="row">
                    @foreach ($products as $product)
                        <div class="col-md-4 mb-3">
                            <div class="card" style="width:100%; height:100%;">
                                <div class="card-body">
                                    <img src="{{ asset('storage/images/'.$product->image) }}" alt="product" class="img-fluid" style="width: 100%; height:100%;">
                                </div>
                                <div class="card-footer">
                                    <h6 class="text-center font-weight-bold">{{ $product->name }}</h6>
                                    <button class="btn btn-primary btn-sm btn-block">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h2 class="font-weight-bold">Cart</h2>
            </div>
        </div>
    </div>
</div>
