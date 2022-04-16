<div class="row main__container">
    @if ($estates && $estates->count() > 0)
        <div class="col-md-6">
            <div class="main__ls row gy-4">
                @foreach ($estates as $estate)
                    <div class="col-lg-12 col-xl-6">
                        @include('components/room', ['estate' => $estate])
                    </div>
                @endforeach
            </div>
            {{ $estates->links('components.pagination.pagination') }}
        </div>
        <div class="col-md-6 main__map-container">
            <div class="row main__rs">
                <div class="main__map">
                    <img src="/img/buildings/map.jpg" alt="map">
                    <div class="arrow">
                        <svg width="32" height="17" viewBox="0 0 32 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M31.0827 5.349C30.696 4.913 30.3173 4.49966 30.0547 4.237L26.284 0.399662C26.0331 0.163918 25.7007 0.03438 25.3564 0.0381667C25.0121 0.0419533 24.6826 0.17877 24.437 0.419976C24.1913 0.661182 24.0484 0.988077 24.0383 1.33223C24.0282 1.67638 24.1516 2.0111 24.3827 2.26633L28.1613 6.113C28.3053 6.257 28.4867 6.453 28.68 6.665H3.40667C3.60133 6.45166 3.78533 6.25433 3.94 6.105L7.70533 2.26633C7.93642 2.0111 8.05982 1.67638 8.0497 1.33223C8.03958 0.988077 7.89672 0.661182 7.65104 0.419976C7.40535 0.17877 7.07588 0.0419533 6.73161 0.0381667C6.38733 0.03438 6.05493 0.163918 5.804 0.399662L2.04 4.229C1.77333 4.49566 1.39067 4.913 1.004 5.349C0.357763 6.07767 0.000625021 7.01771 0 7.99167L0 8.00767C0.00189881 8.98203 0.35938 9.9222 1.00533 10.6517C1.39067 11.0863 1.76933 11.4997 2.03067 11.7623L5.804 15.5997C6.05493 15.8354 6.38733 15.965 6.73161 15.9612C7.07588 15.9574 7.40535 15.8206 7.65104 15.5794C7.89672 15.3381 8.03958 15.0113 8.0497 14.6671C8.05982 14.323 7.93642 13.9882 7.70533 13.733L3.92533 9.885C3.78133 9.741 3.6 9.545 3.40667 9.333H28.68C28.4867 9.54633 28.3027 9.74367 28.1467 9.893L24.3827 13.733C24.2517 13.856 24.147 14.0042 24.0748 14.1686C24.0026 14.3331 23.9643 14.5105 23.9624 14.6901C23.9604 14.8697 23.9947 15.0479 24.0633 15.2139C24.1319 15.3799 24.2333 15.5304 24.3615 15.6562C24.4897 15.782 24.642 15.8807 24.8092 15.9462C24.9765 16.0117 25.1552 16.0428 25.3348 16.0375C25.5143 16.0322 25.691 15.9907 25.8541 15.9155C26.0172 15.8403 26.1634 15.7328 26.284 15.5997L30.0467 11.769C30.3133 11.5023 30.6947 11.085 31.0827 10.649C31.7294 9.91775 32.0864 8.97522 32.0864 7.999C32.0864 7.02278 31.7294 6.08025 31.0827 5.349Z" fill="#212137"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="col-md-12">
            <div class="section__title mt-30">Нет предложений</div>
        </div>
    @endif
</div>
