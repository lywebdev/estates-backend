@switch ($estate->category)
    @case(\App\Models\Estate\Estate::CATEGORIES['flats']['slug'])
        @include('components.room.flat', ['estate' => $estate])
        @break
    @case(\App\Models\Estate\Estate::CATEGORIES['houses']['slug'])
        @include('components.room.building', ['estate' => $estate])
        @break
    @default
        @include('components.room.flat', ['estate' => $estate])
        @break
@endswitch
