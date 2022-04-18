<div class="row">
    <div class="col-md-8">
        <div class="row">
            <div class="col-md-4">
                <div class="form-input">
                    <div class="form-label">Район</div>
                    <div class="select district-select"></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-input">
                    <div class="form-label">Город</div>
                    <div class="select city-select"></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-input">
                    <div class="form-label">Комнатность</div>
                    <div class="select roomSize-select"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row">
            <div class="col-md-6 first-screen__filters--cost">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-label">Стоимость,</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 col">
                        <input type="text" class="input" name="cost_to" placeholder="От">
                    </div>
                    <div class="col-md-6 col-sm-6 col">
                        <input type="text" class="input" name="cost_from" placeholder="До">
                    </div>
                </div>
            </div>

            <div class="col-md-6 first-screen__filters--area">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-label">Площадь, м2</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 col">
                        <input type="text" class="input" name="area_to" placeholder="От">
                    </div>
                    <div class="col-md-6 col-sm-6 col">
                        <input type="text" class="input" name="area_from" placeholder="До">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        @if ($estatesCountByCategory > 0)
        <div class="btn first-screen__filters__btn">Показать {{ $estatesCountByCategory }} {{ trans_choice('estates/index.count_estates', $estatesCountByCategory, [], 'ru') }}</div>
        @else
        <div class="btn first-screen__filters__btn">Нет предложений</div>
        @endif
    </div>
</div>
