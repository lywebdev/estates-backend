<div class="row">
    <div class="col-md-3">
        <div class="form-group">
            <label for="commercial[acres]">Соток</label>
            <input type="number" class="form-control" id="commercial[acres]" name="commercial[acres]" placeholder="Сколько соток?"
               @isset($estate)
                   value="{{ $estate->acres }}"
                @endisset
            >
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label for="commercial[living_area]">Жилая площадь</label>
            <input type="number" class="form-control" id="commercial[living_area]" name="commercial[living_area]" placeholder="Жилая площадь?"
               @isset($estate)
                   value="{{ $estate->living_area }}"
                @endisset
            >
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label for="commercial[room_size]">Комнатность</label>
            <input type="number" class="form-control" id="commercial[room_size]" name="commercial[room_size]" placeholder="Укажите комнатность"
               @isset($estate)
                   value="{{ $estate->room_size }}"
                @endisset
            >
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label>Состояние</label>
            <select class="form-control select2" style="width: 100%;" name="commercial[condition_id]">
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
            <label for="commercial[floor]">Этаж</label>
            <input type="number" class="form-control" id="commercial[floor]" name="commercial[floor]" placeholder="Укажите этаж"
               @isset($estate)
                   value="{{ $estate->floor }}"
                @endisset
            >
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label for="commercial[floors]">Этажность</label>
            <input type="number" class="form-control" id="commercial[floors]" name="commercial[floors]" placeholder="Укажите этажность"
               @isset($estate)
                   value="{{ $estate->floors }}"
                @endisset
            >
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label for="commercial[ceiling_height]">Высота потолков</label>
            <input type="text" class="form-control" id="commercial[ceiling_height]" name="commercial[ceiling_height]" placeholder="Высота потолков?"
               @isset($estate)
                   value="{{ $estate->ceiling_height }}"
                @endisset
            >
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label for="commercial[house_number]">Номер дома</label>
            <input type="number" class="form-control" id="commercial[house_number]" name="commercial[house_number]" placeholder="Укажите номер дома"
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
            <select class="form-control select2" style="width: 100%;" name="commercial[purpose_id]">
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
            <select class="form-control select2" style="width: 100%;" name="commercial[wall_material_id]">
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
            <select class="form-control select2" style="width: 100%;" name="commercial[sewage_id]">
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
            <select class="form-control select2" style="width: 100%;" name="commercial[bathroom_id]">
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
    <div class="col-md-6">
        <div class="form-group">
            <label for="commercial[transformer_substation]">Собственная ТП</label>
            <input type="number" class="form-control" id="commercial[transformer_substation]" name="commercial[transformer_substation]"
                   placeholder="Собственная ТП"
               @isset($estate)
                   value="{{ $estate->transformer_substation }}"
                @endisset
            >
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="commercial[electricity_max]">Максимальное потребление электричества</label>
            <input type="number" class="form-control" id="commercial[electricity_max]" name="commercial[electricity_max]" placeholder="Укажите максимальное потребление"
               @isset($estate)
                   value="{{ $estate->electricity_max }}"
                @endisset
            >
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <div class="icheck-success d-inline">
                <input type="checkbox" name="commercial[furniture]" id="commercial[furniture]"
                       @isset ($estate)
                           @if ($estate->furniture) checked @endif
                    @endisset
                >
                <label for="commercial[furniture]">Мебель</label>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <div class="icheck-success d-inline">
                <input type="checkbox" name="commercial[parking]" id="commercial[parking]"
                   @isset ($estate)
                       @if ($estate->parking) checked @endif
                    @endisset
                >
                <label for="commercial[parking]">Паркинг</label>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <div class="icheck-success d-inline">
                <input type="checkbox" name="commercial[zd_deadend]" id="commercial[zd_deadend]"
                   @isset ($estate)
                       @if ($estate->zd_deadend) checked @endif
                    @endisset
                >
                <label for="commercial[zd_deadend]">ЖД Тупик</label>
            </div>
        </div>
    </div>
</div>
