<div class="room">
    <div class="room__photos estate-object-photos-slider">
        <div class="room__photos-nav">
            <div class="room__photos-nav__prev room__photos-nav__btn">
                <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.61254 1.12506C9.61274 1.27274 9.58289 1.41899 9.52469 1.55539C9.4665 1.69178 9.38112 1.81561 9.27348 1.91974L3.36152 7.67219C3.18257 7.84623 3.04062 8.05287 2.94378 8.2803C2.84693 8.50772 2.79709 8.75148 2.79709 8.99766C2.79709 9.24383 2.84693 9.48759 2.94378 9.71502C3.04062 9.94244 3.18257 10.1491 3.36152 10.3231L9.26577 16.0666C9.37617 16.1703 9.46423 16.2944 9.52481 16.4316C9.58539 16.5688 9.61727 16.7164 9.61861 16.8657C9.61994 17.015 9.5907 17.1631 9.53258 17.3013C9.47446 17.4395 9.38863 17.565 9.2801 17.6706C9.17157 17.7762 9.04252 17.8597 8.90046 17.9163C8.75841 17.9728 8.6062 18.0013 8.45272 18C8.29925 17.9987 8.14757 17.9676 8.00655 17.9087C7.86553 17.8498 7.73798 17.7641 7.63135 17.6567L1.7271 11.9132C0.933255 11.1395 0.487404 10.0909 0.487404 8.99766C0.487404 7.90441 0.933255 6.85583 1.7271 6.08207L7.63906 0.329628C7.80071 0.172254 8.00672 0.0650694 8.23101 0.0216363C8.4553 -0.0217969 8.68779 0.000473761 8.89906 0.0856303C9.11034 0.170787 9.2909 0.315002 9.41791 0.500027C9.54491 0.685052 9.61264 0.902571 9.61254 1.12506Z" fill="#212137"/>
                </svg>
            </div>
            <div class="room__photos-nav__next room__photos-nav__btn">
                <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.61254 1.12506C9.61274 1.27274 9.58289 1.41899 9.52469 1.55539C9.4665 1.69178 9.38112 1.81561 9.27348 1.91974L3.36152 7.67219C3.18257 7.84623 3.04062 8.05287 2.94378 8.2803C2.84693 8.50772 2.79709 8.75148 2.79709 8.99766C2.79709 9.24383 2.84693 9.48759 2.94378 9.71502C3.04062 9.94244 3.18257 10.1491 3.36152 10.3231L9.26577 16.0666C9.37617 16.1703 9.46423 16.2944 9.52481 16.4316C9.58539 16.5688 9.61727 16.7164 9.61861 16.8657C9.61994 17.015 9.5907 17.1631 9.53258 17.3013C9.47446 17.4395 9.38863 17.565 9.2801 17.6706C9.17157 17.7762 9.04252 17.8597 8.90046 17.9163C8.75841 17.9728 8.6062 18.0013 8.45272 18C8.29925 17.9987 8.14757 17.9676 8.00655 17.9087C7.86553 17.8498 7.73798 17.7641 7.63135 17.6567L1.7271 11.9132C0.933255 11.1395 0.487404 10.0909 0.487404 8.99766C0.487404 7.90441 0.933255 6.85583 1.7271 6.08207L7.63906 0.329628C7.80071 0.172254 8.00672 0.0650694 8.23101 0.0216363C8.4553 -0.0217969 8.68779 0.000473761 8.89906 0.0856303C9.11034 0.170787 9.2909 0.315002 9.41791 0.500027C9.54491 0.685052 9.61264 0.902571 9.61254 1.12506Z" fill="#212137"/>
                </svg>
            </div>
        </div>
        <div class="swiper room__photos-items">
            <div class="swiper-wrapper">
                @if ($estate->photos && $estate->photos->count() > 0)
                    @foreach ($estate->photos as $key => $photo)
                        <div class="room__photo-item swiper-slide">
                            <img src="{{ \Illuminate\Support\Facades\Storage::url($photo->path) }}" alt="{{ $estate->name }}, изображение №{{ $key }}">
                        </div>
                    @endforeach
                @else
                    <div class="room__photo-item swiper-slide">
                        <img src="{{ asset('img/rooms/' . random_int(1, 8) . '.jpg') }}" alt="">
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="room__main">
        <div class="room__top">
            <div class="ls">
                <div class="room__cost">{{ number_format($estate->price, 2, '', ' ') }}&nbsp;〒</div>
                @if (isset($estate->price) && isset($estate->area))
                    <div class="room__cost-full">{{ number_format(($estate->price / $estate->area), 2, '', ' ') }}&nbsp;〒/м2</div>
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
        <div class="room__options">
            @isset($estate->room_size)
                <div class="room__option room__option--size">{{ $estate->room_size }} комн. квартира</div>
            @endisset
            @isset($etate->area)
                <div class="room__option room__option--size">{{ $estate->area }} м2</div>
            @endisset
            @isset($estate->floor)
                <div class="room__option room__option--size">{{ $estate->floor }} этаж</div>
            @endisset
        </div>
        @isset($estate->location)
            <div class="room__address">{{ $estate->location }}</div>
        @endisset
        <div class="room__btns">
            <div class="row">
                <div class="col-md-6">
                    <a href="{{ route('buildingsCategory', $estate->category->slug) }}" class="btn">Детальнее</a>
                </div>
                <div class="col-md-6">
                    <a href="#" class="btn btn--no-bg">Показать телефон</a>
                </div>
            </div>
        </div>
        <div class="room__overlay">
            <div class="room__realtor">
                <div class="ls">
                    <div class="room__realtor__avatar">
                        <img src="/img/kostova-anastasia.jpg" alt="Kostova Anastasia">
                    </div>
                </div>
                <div class="rs">
                    <div class="room__realtor__info">
                        <a href="#" class="room__realtor__phone">
                            <span>
                                <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.0938 12.9985C5.6089 13.1231 -2.33165 5.29948 1.48783 1.04944C1.50158 1.03644 2.08826 0.532736 2.08826 0.532736C2.45146 0.187207 2.93804 -0.00408736 3.44318 6.62532e-05C3.94832 0.00421986 4.43159 0.203489 4.78887 0.554942L5.97378 1.81095C6.32249 2.16973 6.51532 2.64816 6.51131 3.14462C6.50731 3.64108 6.30678 4.11645 5.95232 4.46973L5.73823 4.68313C6.37457 6.06904 7.50013 7.18076 8.90609 7.81203L9.13173 7.59539C9.49848 7.25127 9.98576 7.05929 10.4925 7.05929C10.9992 7.05929 11.4865 7.25127 11.8532 7.59539L13.0849 8.71978C13.4503 9.07 13.6601 9.54826 13.6685 10.0501C13.6768 10.552 13.4831 11.0368 13.1295 11.3986C13.1295 11.3986 12.6177 11.9765 12.6045 11.99C12.2745 12.3131 11.8826 12.5685 11.4517 12.7416C11.0207 12.9147 10.5592 13.002 10.0938 12.9985ZM2.63642 2.22041C-0.0383144 5.4793 8.52139 13.4172 11.4174 10.8592C11.4174 10.8592 11.9259 10.2856 11.9397 10.272C11.9664 10.2476 11.9877 10.218 12.0022 10.1851C12.0168 10.1522 12.0243 10.1167 12.0243 10.0809C12.0243 10.045 12.0168 10.0095 12.0022 9.97658C11.9877 9.94368 11.9664 9.9141 11.9397 9.88966L10.708 8.76636C10.5428 8.63095 10.4504 8.62933 10.2963 8.74469L9.67163 9.34967C9.55886 9.45885 9.41658 9.53384 9.26174 9.56572C9.10689 9.5976 8.946 9.58502 8.79821 9.52949C7.7001 9.12754 6.70265 8.49792 5.87348 7.68333C5.04432 6.86874 4.40283 5.88821 3.9925 4.80824C3.9326 4.6616 3.91746 4.50095 3.94893 4.34597C3.98041 4.19099 4.05714 4.04841 4.16971 3.9357L4.78006 3.3253C4.80788 3.30117 4.83024 3.27156 4.84572 3.2384C4.86119 3.20523 4.86943 3.16924 4.86989 3.13275C4.87036 3.09626 4.86305 3.06008 4.84843 3.02654C4.83381 2.99301 4.8122 2.96286 4.78501 2.93804L3.59954 1.68204C3.54638 1.6403 3.47939 1.61942 3.4115 1.62342C3.34361 1.62742 3.27963 1.65602 3.23191 1.70371C3.21925 1.71725 2.63642 2.22041 2.63642 2.22041Z" fill="#AA0001"/>
                                </svg>
                            </span>
                            +7 (812) 424-43-62
                        </a>
                        <div class="room__realtor__name">Котова Анастасия</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
