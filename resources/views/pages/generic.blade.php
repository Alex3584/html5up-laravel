@extends('layouts.app')

@section('title', 'Generic')


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

                <!-- Content -->
                <section>
                    <header class="main">
                        <h1>Generic</h1>
                    </header>

                    <span class="image main"><img src="{{ asset('images/pic11.jpg') }}" alt="" /></span>

                    <p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus...</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dapibus rutrum facilisis...</p>
                    <p>Interdum et malesuada fames ac ante ipsum primis in faucibus...</p>

                    <hr class="major" />
                    <h2>Interdum sed dapibus</h2>
                    <p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus...</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>

                    <hr class="major" />
                    <h2>Magna etiam veroeros</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                    <p>Interdum et malesuada fames ac ante ipsum primis in faucibus...</p>

                    <hr class="major" />
                    <h2>Lorem aliquam bibendum</h2>
                    <p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus...</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                </section>
            </div>
        </div>

        <!-- Sidebar -->
        <div id="sidebar">
            <div class="inner">

                <!-- Search -->
                <section id="search" class="alt">
                    <form method="post" action="#">
                        <input type="text" name="query" id="query" placeholder="Search" />
                    </form>
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
                        <li>
                            <span class="opener">Submenu</span>
                            <ul>
                                <li><a href="#">Lorem Dolor</a></li>
                                <li><a href="#">Ipsum Adipiscing</a></li>
                                <li><a href="#">Tempus Magna</a></li>
                                <li><a href="#">Feugiat Veroeros</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Etiam Dolore</a></li>
                        <li><a href="#">Adipiscing</a></li>
                        <li>
                            <span class="opener">Another Submenu</span>
                            <ul>
                                <li><a href="#">Lorem Dolor</a></li>
                                <li><a href="#">Ipsum Adipiscing</a></li>
                                <li><a href="#">Tempus Magna</a></li>
                                <li><a href="#">Feugiat Veroeros</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Maximus Erat</a></li>
                        <li><a href="#">Sapien Mauris</a></li>
                        <li><a href="#">Amet Lacinia</a></li>
                    </ul>
                </nav>

                <!-- Section -->
                <section>
                    <header class="major">
                        <h2>Ante interdum</h2>
                    </header>
                    <div class="mini-posts">
                        @foreach ([7, 8, 9] as $i)
                            <article>
                                <a href="#" class="image"><img src="{{ asset("images/pic0$i.jpg") }}"
                                        alt="" /></a>
                                <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
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
                    <p>Sed varius enim lorem ullamcorper dolore aliquam aenean ornare velit lacus...</p>
                    <ul class="contact">
                        <li class="icon solid fa-envelope"><a href="#">information@untitled.tld</a></li>
                        <li class="icon solid fa-phone">(000) 000-0000</li>
                        <li class="icon solid fa-home">1234 Somewhere Road #8254<br />Nashville, TN 00000-0000</li>
                    </ul>
                </section>

                <!-- Footer -->
                <footer id="footer">
                    <p class="copyright">
                        &copy; Untitled. All rights reserved. Demo Images: <a href="https://unsplash.com">Unsplash</a>.
                        Design: <a href="https://html5up.net">HTML5 UP</a>.
                    </p>
                </footer>

            </div>
        </div>
    </div>

@endsection
