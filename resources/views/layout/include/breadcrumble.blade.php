<nav class="navbar third-navbar navbar-expand-lg navbar-dark bg-dark-subtle  bg-body-tertiary">
    <div class="container">
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav">
                <?php $url = ""; ?>
                @foreach (Request::segments() as $segment)
                    @if (!is_numeric($segment))
                        <?php $url .= "/" . $segment; ?>
                        <span class="mx-2"> {{ !$loop->first ? '>' : ''}} </span>
                        <a href="{{ URL::to($url) }}" class="text-black text-capitalize" style="text-decoration: none;">{{ $segment }}</a>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>
</nav>