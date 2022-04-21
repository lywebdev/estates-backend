<div class="row">
    <div class="col-md-3">
        <div class="form-group">
            <label for="regions[acres]">Соток</label>
            <input type="number" class="form-control" id="regions[acres]" name="regions[acres]" placeholder="Сколько соток?"
                @isset($estate)
                   value="{{ $estate->acres }}"
                @endisset
            >
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label for="regions[living_area]">Жилая площадь</label>
            <input type="number" class="form-control" id="regions[living_area]" name="regions[living_area]" placeholder="Жилая площадь?"
                @isset($estate)
                   value="{{ $estate->living_area }}"
               @endisset
            >
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label for="regions[room_size]">Комнатность</label>
            <input type="number" class="form-control" id="regions[room_size]" name="regions[room_size]" placeholder="Укажите комнатность"
               @isset($estate)
                   value="{{ $estate->room_size }}"
               @endisset
            >
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label>Состояние</label>
            <select class="form-control select2" style="width: 100%;" name="regions[condition_id]">
                <option selected value="-1">Не указано</option>
                @foreach ($conditions as $row)
                    <option value="{{ $row->id }}"
                        @isset($estate)
                            @if ($row->id == $estate->condition_id) selected @endif
                        @endisset
                    >
                        {{ $row->name }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <div class="form-group">
            <label for="regions[floor]">Этаж</label>
            <input type="number" class="form-control" id="regions[floor]" name="regions[floor]" placeholder="Укажите этаж"
               @isset($estate)
                   value="{{ $estate->floor }}"
                @endisset
            >
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label for="regions[floors]">Этажность</label>
            <input type="number" class="form-control" id="regions[floors]" name="regions[floors]" placeholder="Укажите этажность"
               @isset($estate)
                   value="{{ $estate->floors }}"
                @endisset
            >
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label for="regions[ceiling_height]">Высота потолков</label>
            <input type="text" class="form-control" id="regions[ceiling_height]" name="regions[ceiling_height]" placeholder="Высота потолков?"
               @isset($estate)
                   value="{{ $estate->ceiling_height }}"
               @endisset
            >
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label for="regions[house_number]">Номер дома</label>
            <input type="number" class="form-control" id="regions[house_number]" name="regions[house_number]" placeholder="Укажите номер дома"
               @isset($estate)
                   value="{{ $estate->house_number }}"
                @endisset
            >
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-3">
        <div class="form-group">
            <label>Целевое назначение</label>
            <select class="form-control select2" style="width: 100%;" name="regions[purpose_id]">
                <option selected value="-1">Не указано</option>
                @foreach ($purposes as $row)
                    <option value="{{ $row->id }}"
                        @isset($estate)
                            @if ($row->id == $estate->purpose_id) selected @endif
                        @endisset
                    >
                        {{ $row->name }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label>Материал стен</label>
            <select class="form-control select2" style="width: 100%;" name="regions[wall_material_id]">
                <option selected value="-1">Не указано</option>
                @foreach ($wallMaterials as $row)
                    <option value="{{ $row->id }}"
                        @isset($estate)
                            @if ($row->id == $estate->wall_material_id) selected @endif
                        @endisset
                    >
                        {{ $row->name }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label>Канализация</label>
            <select class="form-control select2" style="width: 100%;" name="regions[sewage_id]">
                <option selected value="-1">Не указано</option>
                @foreach ($sewage as $row)
                    <option value="{{ $row->id }}"
                        @isset($estate)
                            @if ($row->id == $estate->sewage_id) selected @endif
                        @endisset
                    >
                        {{ $row->name }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label>Санузел</label>
            <select class="form-control select2" style="width: 100%;" name="regions[bathroom_id]">
                <option selected value="-1">Не указано</option>
                @foreach ($bathrooms as $row)
                    <option value="{{ $row->id }}"
                        @isset($estate)
                            @if ($row->id == $estate->bathroom_id) selected @endif
                        @endisset
                    >
                        {{ $row->name }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <div class="icheck-success d-inline">
                <input type="checkbox" name="regions[furniture]" id="regions[furniture]"
                   @isset ($estate)
                       @if ($estate->furniture) checked @endif
                    @endisset
                >
                <label for="regions[furniture]">Мебель</label>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <div class="icheck-success d-inline">
                <input type="checkbox" name="regions[parking]" id="regions[parking]"
                   @isset ($estate)
                       @if ($estate->parking) checked @endif
                    @endisset
                >
                <label for="regions[parking]">Паркинг</label>
            </div>
        </div>
    </div>
</div>
