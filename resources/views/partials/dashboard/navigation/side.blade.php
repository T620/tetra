<nav class="navigation__side">
    <ul class="navigation__side__list">
        @foreach ($navItems as $navItem)
            @if ($navItem['resource'] === $currentNavItem)
                <li><a href="{{ url($navItem['uri']) }}" class="active">{{ $navItem['resource'] }}</a></li>
            @else
                <li><a href="{{ url($navItem['uri']) }}">{{ $navItem    ['resource'] }}</a></li>
            @endif
        @endforeach
    </ul>
</nav>