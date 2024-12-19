@section('styles')
<link rel="stylesheet" href="{{ asset('css/layouts/footer.css')}}">
@endsection

<div class="footer-container">
    <div class="footer-content">
        <!-- Logo -->
        <div class="footer-logo">
            <a href="{{ route('home') }}">
                <img class="logo-footer" src="{{ asset('img/logo.png') }}" alt="logo viva maceió">
            </a>
        </div>

        <!-- Links -->
        <div class="footer-links">
            <a href="#" class="footer-link">Suporte</a>
            <a href="#" class="footer-link">Recursos</a>
        </div>
    </div>

    <hr class="footer-divider" />

    <!-- Bottom Section -->
    <div class="footer-bottom">
        <span class="footer-copyright">
            © Photo, Inc. 2024. Volte sempre!
        </span>
        <div class="footer-socials">
            <span class="social-icon">⚪</span>
            <span class="social-icon">⚪</span>
            <span class="social-icon">⚪</span>
            <span class="social-icon">⚪</span>
        </div>
    </div>
</div>
