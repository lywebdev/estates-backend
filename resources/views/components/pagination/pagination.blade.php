@if ($paginator->hasPages())
    <nav aria-label="pagination">
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item">
                    <span class="page-link">
                        <svg width="6" height="14" viewBox="0 0 6 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.99598 1.31254C5.99612 1.4192 5.9765 1.52483 5.93826 1.62334C5.90002 1.72184 5.84392 1.81128 5.77319 1.88648L1.88853 6.04102C1.77095 6.16672 1.67768 6.31596 1.61404 6.48022C1.55041 6.64447 1.51766 6.82052 1.51766 6.99831C1.51766 7.1761 1.55041 7.35215 1.61404 7.5164C1.67768 7.68065 1.77095 7.82989 1.88853 7.95559L5.76813 12.1036C5.84067 12.1786 5.89853 12.2682 5.93834 12.3673C5.97814 12.4664 5.99909 12.5729 5.99997 12.6808C6.00085 12.7886 5.98163 12.8956 5.94344 12.9954C5.90525 13.0952 5.84886 13.1859 5.77754 13.2621C5.70623 13.3384 5.62143 13.3987 5.52809 13.4395C5.43475 13.4804 5.33473 13.5009 5.23389 13.5C5.13304 13.499 5.03337 13.4766 4.94071 13.4341C4.84805 13.3915 4.76424 13.3296 4.69418 13.2521L0.814581 9.10401C0.292961 8.54518 -7.954e-07 7.78787 -7.60887e-07 6.99831C-7.26374e-07 6.20874 0.292961 5.45143 0.814581 4.89261L4.69924 0.738065C4.80546 0.624406 4.94083 0.546995 5.0882 0.515626C5.23558 0.484258 5.38834 0.500342 5.52717 0.561844C5.666 0.623346 5.78464 0.727501 5.86809 0.86113C5.95154 0.99476 5.99605 1.15186 5.99598 1.31254Z" fill="#212137"/>
                        </svg>
                    </span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}">
                        <svg width="6" height="14" viewBox="0 0 6 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.99598 1.31254C5.99612 1.4192 5.9765 1.52483 5.93826 1.62334C5.90002 1.72184 5.84392 1.81128 5.77319 1.88648L1.88853 6.04102C1.77095 6.16672 1.67768 6.31596 1.61404 6.48022C1.55041 6.64447 1.51766 6.82052 1.51766 6.99831C1.51766 7.1761 1.55041 7.35215 1.61404 7.5164C1.67768 7.68065 1.77095 7.82989 1.88853 7.95559L5.76813 12.1036C5.84067 12.1786 5.89853 12.2682 5.93834 12.3673C5.97814 12.4664 5.99909 12.5729 5.99997 12.6808C6.00085 12.7886 5.98163 12.8956 5.94344 12.9954C5.90525 13.0952 5.84886 13.1859 5.77754 13.2621C5.70623 13.3384 5.62143 13.3987 5.52809 13.4395C5.43475 13.4804 5.33473 13.5009 5.23389 13.5C5.13304 13.499 5.03337 13.4766 4.94071 13.4341C4.84805 13.3915 4.76424 13.3296 4.69418 13.2521L0.814581 9.10401C0.292961 8.54518 -7.954e-07 7.78787 -7.60887e-07 6.99831C-7.26374e-07 6.20874 0.292961 5.45143 0.814581 4.89261L4.69924 0.738065C4.80546 0.624406 4.94083 0.546995 5.0882 0.515626C5.23558 0.484258 5.38834 0.500342 5.52717 0.561844C5.666 0.623346 5.78464 0.727501 5.86809 0.86113C5.95154 0.99476 5.99605 1.15186 5.99598 1.31254Z" fill="#212137"/>
                        </svg>
                    </a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
{{--                @if (is_string($element))--}}
{{--                    <li class="disabled"><span>{{ $element }}</span></li>--}}
{{--                @endif--}}

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                        @else
                            <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}">
                        <svg width="7" height="14" viewBox="0 0 7 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.504016 12.6875C0.503883 12.5808 0.523501 12.4752 0.561739 12.3767C0.599978 12.2782 0.656079 12.1887 0.726807 12.1135L4.61147 7.95898C4.72905 7.83328 4.82232 7.68404 4.88596 7.51978C4.94959 7.35553 4.98234 7.17948 4.98234 7.00169C4.98234 6.8239 4.94959 6.64785 4.88596 6.4836C4.82232 6.31935 4.72905 6.17011 4.61147 6.04441L0.73187 1.89636C0.659329 1.82144 0.601467 1.73182 0.561662 1.63273C0.521856 1.53365 0.500904 1.42707 0.500028 1.31923C0.499152 1.21139 0.518369 1.10445 0.556558 1.00463C0.594747 0.904819 0.651143 0.814138 0.722456 0.737881C0.793768 0.661623 0.87857 0.601317 0.971911 0.56048C1.06525 0.519643 1.16526 0.499094 1.26611 0.500031C1.36696 0.500969 1.46662 0.523373 1.55929 0.565938C1.65195 0.608503 1.73576 0.670376 1.80582 0.747947L5.68542 4.89599C6.20704 5.45482 6.5 6.21213 6.5 7.00169C6.5 7.79126 6.20704 8.54856 5.68542 9.10739L1.80076 13.2619C1.69454 13.3756 1.55917 13.453 1.4118 13.4844C1.26442 13.5157 1.11166 13.4997 0.97283 13.4382C0.834005 13.3767 0.715359 13.2725 0.631908 13.1389C0.548456 13.0052 0.503948 12.8481 0.504016 12.6875Z" fill="#212137"/>
                        </svg>
                    </a>
                </li>
            @else
                <li class="page-item">
                    <span class="page-link">
                        <svg width="7" height="14" viewBox="0 0 7 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.504016 12.6875C0.503883 12.5808 0.523501 12.4752 0.561739 12.3767C0.599978 12.2782 0.656079 12.1887 0.726807 12.1135L4.61147 7.95898C4.72905 7.83328 4.82232 7.68404 4.88596 7.51978C4.94959 7.35553 4.98234 7.17948 4.98234 7.00169C4.98234 6.8239 4.94959 6.64785 4.88596 6.4836C4.82232 6.31935 4.72905 6.17011 4.61147 6.04441L0.73187 1.89636C0.659329 1.82144 0.601467 1.73182 0.561662 1.63273C0.521856 1.53365 0.500904 1.42707 0.500028 1.31923C0.499152 1.21139 0.518369 1.10445 0.556558 1.00463C0.594747 0.904819 0.651143 0.814138 0.722456 0.737881C0.793768 0.661623 0.87857 0.601317 0.971911 0.56048C1.06525 0.519643 1.16526 0.499094 1.26611 0.500031C1.36696 0.500969 1.46662 0.523373 1.55929 0.565938C1.65195 0.608503 1.73576 0.670376 1.80582 0.747947L5.68542 4.89599C6.20704 5.45482 6.5 6.21213 6.5 7.00169C6.5 7.79126 6.20704 8.54856 5.68542 9.10739L1.80076 13.2619C1.69454 13.3756 1.55917 13.453 1.4118 13.4844C1.26442 13.5157 1.11166 13.4997 0.97283 13.4382C0.834005 13.3767 0.715359 13.2725 0.631908 13.1389C0.548456 13.0052 0.503948 12.8481 0.504016 12.6875Z" fill="#212137"/>
                        </svg>
                    </span>
                </li>
            @endif
        </ul>
    </nav>
@endif
