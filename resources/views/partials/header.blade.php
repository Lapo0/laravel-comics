<header>
<div class="container">
        <div class="row">
            <div class="col">
                <div class="logo">
                    <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
                </div>
            </div>
            <div class="col">
                <ul class="link">
                    @foreach($links as $link)

                        <li>
                            <a href="#">
                                {{ $link }}
                            </a>
                        </li>

                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</header>