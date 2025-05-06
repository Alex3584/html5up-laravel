<section>
    <header class="major">
        <h2>Ante interdum</h2>
    </header>
    <div class="mini-posts">
        @foreach ([7, 8, 9] as $i)
            <article><a href="#" class="image"><img src="{{ asset("images/pic0$i.jpg") }}" alt="" /></a>
                <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
            </article>
        @endforeach
    </div>
    <ul class="actions">
        <li><a href="#" class="button">More</a></li>
    </ul>
</section>
