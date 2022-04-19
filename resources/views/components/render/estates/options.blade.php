@if (count($firstCol) > 0)
<div class="ec-desc ec-options">
    <div class="ec-desc__title">Характеристики</div>
    <div class="ec-options__row">
        <div class="ec-options__col">
            <div class="ec-option-list">
                @foreach ($firstCol as $row)
                    <div class="ec-option-item">
                        <div class="ec-option__key">{{ $row['name'] }}</div>
                        <div class="ec-option-delimiter"></div>
                        <div class="ec-option__value">{{ $row['value'] }}</div>
                    </div>
                @endforeach
            </div>
        </div>
        @if (isset($secondCol) && count($secondCol) > 0)
            <div class="ec-options__col">
                <div class="ec-option-list">
                    @foreach ($secondCol as $row)
                        <div class="ec-option-item">
                            <div class="ec-option__key">{{ $row['name'] }}</div>
                            <div class="ec-option-delimiter"></div>
                            <div class="ec-option__value">{{ $row['value'] }}</div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
</div>
@endif
