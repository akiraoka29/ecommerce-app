<div class="nav-main">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        @foreach($categories as $key => $category)
        <li class="nav-item"><a class="nav-link {{ $key === 0 ? 'active' : '' }}" data-toggle="tab" href="#{{ strtolower($category->category_name) }}" role="tab">{{ $category->category_name }}</a></li>
        @endforeach
    </ul>
</div>