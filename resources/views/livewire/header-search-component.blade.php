
<div class="form-search">
    
    <form action="{{ route('product.search') }}" >
            <input type="text" name="search" value="{{ $search }}" class="form-input" placeholder="Search">
            <button type="submit" class="fa fa-search"></button>
            {{-- <div class="wrap-list-cate">
                <input type="hidden" name="product_cat" value="{{ $product_cat }}" id="product_cate">
                <input type="hidden" name="product_cat_id" value="{{ $product_cat_id }}" id="product_cate">
                <a href="" class="class-link-control">{{ str_split($product_cat,12)[0] }}</a>
                {{-- <ul class="list-cate">
                    <li class="level-0">All Category</li>
                    @foreach ($categories as $category )
                        <li class="level-1" data-id="{{ $category->id }}">{{ $category->name }}</li>
                    @endforeach
                </ul> --}}
            {{-- </div> --}} 
    </form>
</div>