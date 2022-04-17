@switch ($estate->type)
    @case(\App\Models\Estate\Estate::TYPES['flat'])
        @include('components.room.flat', ['estate' => $estate])
        @break
    @case(\App\Models\Estate\Estate::TYPES['house'])
        @include('components.room.building', ['estate' => $estate])
        @break
@endswitch
