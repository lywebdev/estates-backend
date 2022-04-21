<div class="room room--fh">
    <div class="room__photo">
        @if ($estate->photos && $estate->photos->count() > 0)
            @foreach ($estate->photos as $key => $photo)
                <img src="{{ \Illuminate\Support\Facades\Storage::url($photo->path) }}" alt="{{ $estate->name }}, изображение №{{ $key }}">
            @endforeach
        @else
            <img src="{{ asset('img/rooms/' . random_int(1, 8) . '.jpg') }}" alt="">
        @endif
    </div>
    <div class="room__main">
        <div class="room__top">
            <div class="ls">
                <div class="room__cost">{{ $estate->price }}&nbsp;〒</div>
                @if (isset($estate->price) && isset($estate->area))
                    <div class="room__cost-full">{{ $estate->price / $estate->area }}&nbsp;〒/м2</div>
                @endif
            </div>
            <div class="rs">
                <div class="room__actions">
                    <div class="room__action room__action--share">
                        <div class="btn-square">
                            <svg width="21" height="18" viewBox="0 0 21 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.1259 5.14985V1.68754C11.1259 0.907574 12.0094 0.48747 12.6096 0.924789L12.7124 1.01096L20.2056 8.19846C20.5553 8.5339 20.5871 9.07268 20.3011 9.44513L20.2057 9.55151L12.7125 16.7413C12.1496 17.2814 11.2347 16.9346 11.1348 16.1987L11.1259 16.0649V12.6582L10.6965 12.6958C7.69691 13.0087 4.82186 14.3599 2.05333 16.7717C1.40445 17.337 0.400533 16.8025 0.507251 15.9486C1.33824 9.29916 4.81558 5.63416 10.7517 5.17441L11.1259 5.14985ZM13.0009 3.88584V6.06254C13.0009 6.5803 12.5812 7.00004 12.0634 7.00004C7.22163 7.00004 4.22086 9.0952 2.9243 13.4465L2.82548 13.7947L3.26572 13.4987C6.06132 11.6715 8.99809 10.75 12.0634 10.75C12.538 10.75 12.9303 11.1027 12.9923 11.5603L13.0009 11.6875V13.8661L18.2024 8.87515L13.0009 3.88584Z" fill="#7A7A87"/>
                            </svg>
                        </div>
                    </div>
                    <div class="room__action room__action--wishlist room__action--wishlist--added">
                        <div class="btn-square">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_58391_1659)">
                                    <path d="M12.9375 1.38831C12.1683 1.39575 11.4114 1.58326 10.7277 1.93582C10.0439 2.28838 9.45225 2.79619 9.00005 3.41856C8.54785 2.79619 7.95617 2.28838 7.27241 1.93582C6.58865 1.58326 5.83181 1.39575 5.06255 1.38831C3.66887 1.44396 2.35394 2.04919 1.40526 3.07165C0.456581 4.09412 -0.048648 5.45062 4.60518e-05 6.84455C4.60518e-05 10.2586 3.50555 13.9133 6.45005 16.3785C7.16505 16.9798 8.06925 17.3094 9.00342 17.3094C9.93759 17.3094 10.8418 16.9798 11.5568 16.3785C14.4983 13.9133 18.0068 10.2586 18.0068 6.84455C18.0555 5.4495 17.5493 4.092 16.5992 3.06935C15.6491 2.04669 14.3324 1.44222 12.9375 1.38831ZM10.1078 14.6543C9.79762 14.9155 9.40516 15.0587 8.99967 15.0587C8.59419 15.0587 8.20173 14.9155 7.89155 14.6543C4.30655 11.6483 2.25005 8.80205 2.25005 6.84455C2.20223 6.04747 2.47076 5.26369 2.99733 4.66339C3.52391 4.0631 4.26602 3.69474 5.06255 3.6383C5.85907 3.69474 6.60119 4.0631 7.12776 4.66339C7.65434 5.26369 7.92287 6.04747 7.87505 6.84455C7.87505 7.14292 7.99357 7.42907 8.20455 7.64005C8.41553 7.85103 8.70168 7.96955 9.00005 7.96955C9.29842 7.96955 9.58456 7.85103 9.79554 7.64005C10.0065 7.42907 10.125 7.14292 10.125 6.84455C10.0772 6.04747 10.3458 5.26369 10.8723 4.66339C11.3989 4.0631 12.141 3.69474 12.9375 3.6383C13.7341 3.69474 14.4762 4.0631 15.0028 4.66339C15.5293 5.26369 15.7979 6.04747 15.75 6.84455C15.75 8.80205 13.6935 11.6483 10.1078 14.6543Z" fill="#AA0102"/>
                                    <path d="M15.5 3.99996C14.3 0.799957 10.6667 3.66662 9 5.49996L8 4.5L5 3L2.5 3.5L1.5 8L4 12L7.5 15.5H11L15 10C15.6667 9.33332 16.7 7.19996 15.5 3.99996Z" fill="#AA0102"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_58391_1659">
                                        <rect width="18" height="18" fill="white"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="room__assortment">
            <div class="room__assortment-item">
                <div class="name">Студии  от 26.34 м2</div>
                <div class="price">от 1 600 000〒</div>
            </div>
            <div class="room__assortment-item">
                <div class="name">2к от 62.93 м2</div>
                <div class="price">от 4 600 000〒</div>
            </div>
            <div class="room__assortment-item">
                <div class="name">3к от 62.93 м2</div>
                <div class="price">от 4 600 000〒</div>
            </div>

            <div class="room__quantity">В продаже 174 квартиры</div>
        </div>
        <div class="room__delimiter"></div>
        <div class="room__address">г. Алматы, ул. Губина д. 20</div>
        <div class="room__btns">
            <div class="row">
                <div class="col-md-6">
                    <a href="#" class="btn">Детальнее</a>
                </div>
                <div class="col-md-6">
                    <a href="#" class="btn btn--no-bg">Показать телефон</a>
                </div>
            </div>
        </div>
    </div>
</div>
