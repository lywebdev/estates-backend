@unless ($breadcrumbs->isEmpty())
    <div class="breadcrumbs__path">
        @foreach ($breadcrumbs as $breadcrumb)
            @if (!is_null($breadcrumb->url) && !$loop->last)
                <a href="{{ $breadcrumb->url }}" class="breadcrumbs__item breadcrumbs__prev">{{ $breadcrumb->title }}</a>
            @else
                <span class="breadcrumbs__item breadcrumbs__current">{{ $breadcrumb->title }}</span>
            @endif
        @endforeach
    </div>
@endunless
