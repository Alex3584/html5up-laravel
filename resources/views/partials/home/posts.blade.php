@php
    $titles = [
        1 => 'Interdum aenean',
        2 => 'Nulla amet dolore',
        3 => 'Tempus ullamcorper',
        4 => 'Sed etiam facilis',
        5 => 'Feugiat lorem aenean',
        6 => 'Amet varius aliquam',
    ];
@endphp

<section>
    <header class="major">
        <h2>Ipsum sed dolor</h2>
    </header>
    <div class="posts">
        @foreach (range(1, 6) as $i)
            <article>
                <a href="#" class="image"><img src="{{ asset("images/pic0$i.jpg") }}" alt="" /></a>
                <h3>{{ $titles[$i] }}</h3>
                <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante
                    interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                <ul class="actions">
                    <li><a href="#" class="button">More</a></li>
                </ul>
            </article>
        @endforeach
    </div>
</section>
