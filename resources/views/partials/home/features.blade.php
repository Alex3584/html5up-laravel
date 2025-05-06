<section>
    <header class="major">
        <h2>Erat lacinia</h2>
    </header>
    <div class="features">
        @php
            $features = [
                ['icon' => 'fa-gem', 'title' => 'Portitor ullamcorper'],
                ['icon' => 'solid fa-paper-plane', 'title' => 'Sapien veroeros'],
                ['icon' => 'solid fa-rocket', 'title' => 'Quam lorem ipsum'],
                ['icon' => 'solid fa-signal', 'title' => 'Sed magna finibus'],
            ];
        @endphp

        @foreach ($features as $feature)
            <article>
                <span class="icon {{ $feature['icon'] }}"></span>
                <div class="content">
                    <h3>{{ $feature['title'] }}</h3>
                    <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante
                        interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                </div>
            </article>
        @endforeach
    </div>
</section>
