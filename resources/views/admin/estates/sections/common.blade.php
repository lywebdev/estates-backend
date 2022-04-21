<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="name">Название</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Введите название объекта недвижимости">
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
            >
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="owner_name">Имя собственника</label>
            <input type="text" class="form-control" id="owner_name" name="owner_name" placeholder="Укажите имя собственника">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="year">Год</label>
            <input type="text" class="form-control" id="year" name="year" placeholder="Укажите год">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="area">Площадь</label>
            <input type="text" class="form-control" id="area" name="area" placeholder="Укажите площадь">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="owner_phone">Телефон собственника</label>
            <input type="text" class="form-control" id="owner_phone" name="owner_phone" placeholder="Укажите телефон">
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
                    <option value="{{ $city->id }}">{{ $city->name }}</option>
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
                    <option value="{{ $district->id }}">{{ $district->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label for="street">Улица CRM</label>
            <input type="text" class="form-control" id="street" name="street" placeholder="Укажите улицу CRM">
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label for="intersection_streets">Пересечение улиц</label>
            <input type="text" class="form-control" id="intersection_streets" name="intersection_streets" placeholder="Пересечение улиц">
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
                    <option value="{{ $row->id }}">{{ $row->name }}</option>
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
                <input type="checkbox" name="sold" id="sold">
                <label for="sold">Продано</label>
            </div>
        </div>
    </div>
</div>
