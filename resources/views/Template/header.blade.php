<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
    @include('Template.navbar')
        @yield('body')
</body>
<footer class="footer mt-5 p-3 text-center">
    <p>SMK Negeri 1 Jakarta</p>
    <p>Jl. Budi Utomo No. 7, Kel. Pasar Baru Kecamatan Sawah Besar Jakarta Pusat 10710</p>
    <p>Hak Cipta © 2023 XII RPL</p>

    <!-- Social Media Links with Icons -->
    <div class="social-icons">
        <a href="https://smkn1jakarta.sch.id/" target="_blank" title="Website">
            <img src="{{ asset('logo/website_icon.png') }}" alt="Website Icon" width="30" height="30">
        </a>
        <a href="https://www.instagram.com/smkn1jakarta_official/" target="_blank" title="Instagram">
            <img src="{{ asset('logo/instagram_icon.png') }}" alt="Instagram Icon" width="30" height="30">
        </a>
        <a href="https://www.facebook.com/smkn1jakarta_official/" target="_blank" title="Facebook">
            <img src="{{ asset('logo/facebook_icon.png') }}" alt="Facebook Icon" width="30" height="30">
        </a>
        <a href="https://twitter.com/smkn1jakarta_official" target="_blank" title="Twitter">
            <img src="{{ asset('logo/twitter_icon.png') }}" alt="Twitter Icon" width="30" height="30">
        </a>
        <a href="https://www.tiktok.com/@smkn1jakarta_official" target="_blank" title="TikTok">
            <img src="{{ asset('logo/tiktok_icon.png') }}" alt="TikTok Icon" width="30" height="30">
        </a>
        <a href="http://www.youtube.com/@SMKN1JAKARTAOFFICIAL" target="_blank" title="TikTok">
            <img src="{{ asset('logo/youtube_icon.png') }}" alt="TikTok Icon" width="30" height="30">
        </a>
    </div>
</footer>

</html>
