<header>
    @extends('components.default.nav')
    @extends('components.default.system-bar')

    @isset($announcement)
        @section('system-bar')
            @parent
        @endsection
    @else
        @section('system-bar')
        @endsection
    @endisset
</header>
