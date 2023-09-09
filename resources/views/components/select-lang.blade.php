<div class="dropdown">
    <a class="nav-link dropdown-toggle" id="Dropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
        @if (app()->getLocale() === 'es')
            <i class="flag-spain flag"></i>
        @elseif(app()->getLocale() === 'en')
            <i class="flag-united-kingdom flag"></i>
        @endif
    </a>
    <ul class="dropdown-menu" aria-labelledby="Dropdown">
        <li>
            <a class="dropdown-item" href="{{ str_replace('_', '-', app()->getLocale()) }}}">
                @if (app()->getLocale() === 'es')
                    <i class="flag-spain flag"></i>Español
                @elseif(app()->getLocale() === 'en')
                    <i class="flag-united-kingdom flag"></i>English
                @endif
                <i class="fa fa-check text-success ms-2"></i>
            </a>
        </li>
        <li>
            <hr class="dropdown-divider" />
        </li>
        @if (app()->getLocale() !== 'en')
            <li>
                <a class="dropdown-item" href="{{ route('set_language', ['en']) }}">
                    <i class="flag-united-kingdom flag"></i>English
                </a>
            </li>
        @elseif(app()->getLocale() !== 'es')
            <li>
                <a class="dropdown-item" href="{{ route('set_language', ['es']) }}">
                    <i class="flag-spain flag"></i>Español
                </a>
            </li>
        @endif
    </ul>
</div>
