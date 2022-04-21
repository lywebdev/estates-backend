<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="flats[living_area]">Жилая площадь</label>
                    <input type="number" class="form-control" id="flats[living_area]" name="flats[living_area]" placeholder="Укажите жилую площадь"
                        @isset($estate)
                            value="{{ $estate->living_area }}"
                        @endisset
                    >
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="flats[kitchen_area]">Площадь кухни площадь</label>
                    <input type="number" class="form-control" id="flats[kitchen_area]" name="flats[kitchen_area]" placeholder="Укажите площадь кухни"
                        @isset($estate)
                            value="{{ $estate->kitchen_area }}"
                        @endisset
                    >
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="flats[room_size]">Комнатность</label>
                    <input type="number" class="form-control" id="flats[room_size]" name="flats[room_size]" placeholder="Укажите комнатность"
                       @isset($estate)
                           value="{{ $estate->room_size }}"
                       @endisset
                    >
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="flats[floor]">Этаж</label>
                    <input type="number" class="form-control" id="flats[floor]" name="flats[floor]" placeholder="Укажите этаж"
                       @isset($estate)
                           value="{{ $estate->floor }}"
                       @endisset
                    >
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <div class="form-group">
            <label for="flats[facing]">Облицовка</label>
            <input type="text" class="form-control" id="flats[facing]" name="flats[facing]" placeholder="Какая облицовка?"
               @isset($estate)
                   value="{{ $estate->facing }}"
               @endisset
            >
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label>Материал стен</label>
            <select class="form-control select2" style="width: 100%;" name="flats[wall_material]">
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
            <label for="flats[ceiling_height]">Высота потолков</label>
            <input type="text" class="form-control" id="flats[ceiling_height]" name="flats[ceiling_height]" placeholder="Высота потолков?"
               @isset($estate)
                   value="{{ $estate->ceiling_height }}"
               @endisset
            >
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label for="flats[floors]">Этажность</label>
            <input type="number" class="form-control" id="flats[floors]" name="flats[floors]" placeholder="Укажите этажность"
               @isset($estate)
                   value="{{ $estate->floors }}"
               @endisset
            >
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label>Мебель</label>
                    <select class="form-control select2" style="width: 100%;" name="flats[furniture_id]">
                        <option selected value="-1">Не указано</option>
                        @foreach ($furniture as $row)
                            <option value="{{ $row->id }}"
                                @isset($estate)
                                    @if ($row->id == $estate->furniture_id) selected @endif
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
                    <select class="form-control select2" style="width: 100%;" name="flats[bathroom_id]">
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
            <div class="col-md-3">
                <div class="form-group">
                    <label>Парковка</label>
                    <select class="form-control select2" style="width: 100%;" name="flats[parking_id]">
                        <option selected value="-1">Не указано</option>
                        @foreach ($parking as $row)
                            <option value="{{ $row->id }}"
                                @isset($estate)
                                    @if ($row->id == $estate->parking_id) selected @endif
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
                    <label>Состояние</label>
                    <select class="form-control select2" style="width: 100%;" name="flats[condition_id]">
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
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label>Напольное покрытие</label>
                    <select class="form-control select2" style="width: 100%;" name="flats[floor_covering_id]">
                        <option selected value="-1">Не указано</option>
                        @foreach ($floorCoverings as $row)
                            <option value="{{ $row->id }}"
                                @isset($estate)
                                    @if ($row->id == $estate->floor_covering_id) selected @endif
                                @endisset
                            >
                                {{ $row->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="flats[house_number]">Номер дома</label>
                    <input type="text" class="form-control" id="flats[house_number]" name="flats[house_number]" placeholder="Укажите номер дома"
                       @isset($estate)
                           value="{{ $estate->house_number }}"
                       @endisset
                    >
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="flats[room_number]">Номер квартиры</label>
                    <input type="text" class="form-control" id="flats[room_number]" name="flats[room_number]" placeholder="Укажите номер квартиры"
                       @isset($estate)
                           value="{{ $estate->room_number }}"
                       @endisset
                    >
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <div class="icheck-success d-inline">
                <input type="checkbox" name="flats[furniture]" id="flats[furniture]"
                   @isset ($estate)
                       @if ($estate->furniture) checked @endif
                    @endisset
                >
                <label for="flats[furniture]">Мебель</label>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <div class="icheck-success d-inline">
                <input type="checkbox" name="flats[bathroom]" id="flats[bathroom]"
                   @isset ($estate)
                       @if ($estate->bathroom) checked @endif
                    @endisset
                >
                <label for="flats[bathroom]">Санузел</label>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <div class="icheck-success d-inline">
                <input type="checkbox" name="flats[parking]" id="flats[parking]"
                   @isset ($estate)
                       @if ($estate->parking) checked @endif
                    @endisset
                >
                <label for="flats[parking]">Паркинг</label>
            </div>
        </div>
    </div>
</div>
