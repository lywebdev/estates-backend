<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="name">Название</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Введите название объекта недвижимости"
               @isset($estate)
                   value="{{ $estate->name }}"
                @endisset
            >
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="price">Стоимость</label>
            <input type="number"
                   class="form-control"
                   id="price"
                   name="price"
                   placeholder="Укажите стоимость"
               @isset($estate)
                   value="{{ $estate->price }}"
                @endisset
            >
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="owner_name">Имя собственника</label>
            <input type="text" class="form-control" id="owner_name" name="owner_name" placeholder="Укажите имя собственника"
               @isset($estate)
                   value="{{ $estate->owner_name }}"
                @endisset
            >
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="year">Год</label>
            <input type="text" class="form-control" id="year" name="year" placeholder="Укажите год"
               @isset($estate)
                   value="{{ $estate->year }}"
                @endisset
            >
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="area">Площадь</label>
            <input type="text" class="form-control" id="area" name="area" placeholder="Укажите площадь"
               @isset($estate)
                   value="{{ $estate->area }}"
                @endisset
            >
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="owner_phone">Телефон собственника</label>
            <input type="text" class="form-control" id="owner_phone" name="owner_phone" placeholder="Укажите телефон"
               @isset($estate)
                   value="{{ $estate->owner_phone }}"
                @endisset
            >
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <div class="form-group">
            <label>Город</label>
            <select class="form-control select2" style="width: 100%;" name="city_id">
                <option selected value="-1">Не указано</option>
                @foreach ($cities as $city)
                    <option value="{{ $city->id }}"
                        @isset($estate)
                            @if ($city->id == $estate->city_id) selected @endif
                        @endisset
                    >{{ $city->name }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label>Район</label>
            <select class="form-control select2" style="width: 100%;" name="district_id">
                <option selected value="-1">Не указано</option>
                @foreach ($districts as $district)
                    <option value="{{ $district->id }}"
                        @isset($estate)
                            @if ($row->id == $estate->district_id) selected @endif
                        @endisset
                    >
                        {{ $district->name }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label for="street">Улица CRM</label>
            <input type="text" class="form-control" id="street" name="street" placeholder="Укажите улицу CRM"
                @isset($estate)
                    value="{{ $estate->street }}"
                @endisset
            >
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label for="intersection_streets">Пересечение улиц</label>
            <input type="text" class="form-control" id="intersection_streets" name="intersection_streets" placeholder="Пересечение улиц"
               @isset($estate)
                   value="{{ $estate->intersection_streets }}"
                @endisset
            >
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label>Вариант продажи</label>
            <select class="form-control select2" style="width: 100%;" name="sell_variant_id">
                <option selected value="-1">Не указано</option>
                @foreach ($sellVariants as $row)
                    <option value="{{ $row->id }}"
                        @isset($estate)
                            @if ($row->id == $estate->sell_variant_id) selected @endif
                        @endisset
                    >
                        {{ $row->name }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Состояние</label>
            <select class="form-control select2" style="width: 100%;" name="condition">
                <option selected value="-1">Не указано</option>
                @foreach ($conditions as $row)
                    <option value="{{ $row->id }}">{{ $row->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <div class="icheck-success d-inline">
                <input type="checkbox" name="sold" id="sold"
                   @isset ($estate)
                       @if ($estate->sold) checked @endif
                   @endisset
                >
                <label for="sold">Продано</label>
            </div>
        </div>
    </div>
</div>
