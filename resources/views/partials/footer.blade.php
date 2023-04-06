<footer>
    <div class="container">
        <h1>
            FOOTER
        </h1>
    </div>
    <section class="celest">
            <div class="container">
                <div class="row">

                    @foreach ($buy_links as $link)

                    <div class="col">
                        <div class="item">
                            <div class="item-img">
                                <img src="{{Vite::asset('resources/img/buy-comics-digital-comics.png')}}" alt="">
                            </div>
                            <p>
                                {{ $link['title'] }}
                            </p>
                        </div>
                    </div>

                    @endforeach

                </div>
            </div>
        </section>
</footer>