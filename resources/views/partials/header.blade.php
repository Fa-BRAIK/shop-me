<header>
    @includeWhen(isset($announcement), 'components.default.header.system-bar', [ 'announcement' => $announcement ?? '' ])

    @include('components.default.header.nav')
</header>
