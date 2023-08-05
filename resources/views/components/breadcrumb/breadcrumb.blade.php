<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <ul class="bread-list">
                        <li><a href="{{ route('home') }}">Home<i class="ti-arrow-right"></i></a></li>
                        @foreach($lists as $list)
                            <?php
                                $active = $list['active'] == true ? 'active' : '';
                            ?>
                            <li class="{{ $active }}"><a href="{{ $list['url'] }}">{{ $list['menu'] }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>