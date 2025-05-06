@extends('layouts.app')

@section('title', 'Home')
@section('content')

    <div id="wrapper">

        <div id="main">
            <div class="inner">

                <!-- Header -->
                <header id="header">
                    <a href="#" class="logo"><strong>Editorial</strong> by HTML5 UP</a>
                    <ul class="icons">
                        <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
                        <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a>
                        </li>
                        <li><a href="#" class="icon brands fa-snapchat-ghost"><span class="label">Snapchat</span></a>
                        </li>
                        <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a>
                        </li>
                        <li><a href="#" class="icon brands fa-medium-m"><span class="label">Medium</span></a></li>
                    </ul>
                </header>

                <!-- Banner -->
                <section id="banner">
                    <div class="content">
                        <header>
                            <h1>Hi, I’m Editorial<br />by HTML5 UP</h1>
                            <p>A free and fully responsive site template</p>
                        </header>
                        <p>Aenean ornare velit lacus, ac varius enim ullamcorper eu...</p>
                        <ul class="actions">
                            <li><a href="#" class="button big">Learn More</a></li>
                        </ul>
                    </div>
                    <span class="image object">
                        <img src="{{ asset('images/pic10.jpg') }}" alt="" />
                    </span>
                </section>

                <!-- Features -->
                <section>
                    <header class="major">
                        <h2>Erat lacinia</h2>
                    </header>
                    <div class="features">
                        <article><span class="icon fa-gem"></span>
                            <div class="content">
                                <h3>Portitor ullamcorper</h3>
                                <p>...</p>
                            </div>
                        </article>
                        <article><span class="icon solid fa-paper-plane"></span>
                            <div class="content">
                                <h3>Sapien veroeros</h3>
                                <p>...</p>
                            </div>
                        </article>
                        <article><span class="icon solid fa-rocket"></span>
                            <div class="content">
                                <h3>Quam lorem ipsum</h3>
                                <p>...</p>
                            </div>
                        </article>
                        <article><span class="icon solid fa-signal"></span>
                            <div class="content">
                                <h3>Sed magna finibus</h3>
                                <p>...</p>
                            </div>
                        </article>
                    </div>
                </section>

                <!-- Posts -->
                <section>
                    <header class="major">
                        <h2>Ipsum sed dolor</h2>
                    </header>
                    <div class="posts">
                        @foreach (range(1, 6) as $i)
                            <article>
                                <a href="#" class="image"><img src="{{ asset("images/pic0$i.jpg") }}"
                                        alt="" /></a>
                                <h3>Title {{ $i }}</h3>
                                <p>...</p>
                                <ul class="actions">
                                    <li><a href="#" class="button">More</a></li>
                                </ul>
                            </article>
                        @endforeach
                    </div>
                </section>

            </div>
        </div>

        <!-- Sidebar -->
        <div id="sidebar">
            <div class="inner">

                <!-- Search -->
                <section id="search" class="alt">
                    <form method="post" action="#"><input type="text" name="query" id="query"
                            placeholder="Search" /></form>
                </section>

                <!-- Menu -->
                <nav id="menu">
                    <header class="major">
                        <h2>Menu</h2>
                    </header>
                    <ul>
                        <li><a href="#">Homepage</a></li>
                        <li><a href="#">Generic</a></li>
                        <li><a href="#">Elements</a></li>
                        <!-- ... -->
                    </ul>
                </nav>

                <!-- Mini-posts -->
                <section>
                    <header class="major">
                        <h2>Ante interdum</h2>
                    </header>
                    <div class="mini-posts">
                        @foreach ([7, 8, 9] as $i)
                            <article><a href="#" class="image"><img src="{{ asset("images/pic0$i.jpg") }}"
                                        alt="" /></a>
                                <p>...</p>
                            </article>
                        @endforeach
                    </div>
                    <ul class="actions">
                        <li><a href="#" class="button">More</a></li>
                    </ul>
                </section>

                <!-- Contact -->
                <section>
                    <header class="major">
                        <h2>Get in touch</h2>
                    </header>
                    <p>...</p>
                    <ul class="contact">
                        <li class="icon solid fa-envelope"><a href="#">information@untitled.tld</a></li>
                        <li class="icon solid fa-phone">(000) 000-0000</li>
                        <li class="icon solid fa-home">1234 Somewhere Road #8254<br />Nashville, TN 00000-0000</li>
                    </ul>
                </section>

                <!-- Footer -->
                <footer id="footer">
                    <p class="copyright">&copy; Untitled. All rights reserved.
                        Images: <a href="https://unsplash.com">Unsplash</a>. Design: <a href="https://html5up.net">HTML5
                            UP</a>.
                    </p>
                </footer>

            </div>
        </div>

    </div>

@endsection
