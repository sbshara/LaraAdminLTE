{{-- <ol class="breadcrumb">
    <li>
        <a href="{{ url('home') }}">
            <i class="fa fa-home"></i>
        </a>
    </li>
    @foreach(request()->breadcrumbs()->segments() as $segment)
    <li class="{{ $segment->model() ? ' active' : '' }}">
        <a href="{{ $segment->segmentURL() }}">
            {{ optional($segment->model())->name ?: $segment->name() }}
        </a>
    </li>
    @endforeach
</ol> --}}
