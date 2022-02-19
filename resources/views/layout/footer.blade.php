<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 footer-copyright text-center"><p class="mb-0">
                    <a href="https://www.selectoffice.ro" target="_blank">selectoffice.ro</a></p></div>
        </div>
    </div>
</footer>
</div></div></div>
<script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}" ></script>
<script src="{{ asset('assets/js/bootstrap/bootstrap.bundle.min.js') }}" ></script>
<script src="{{ asset('assets/js/scrollbar/simplebar.js') }}" ></script>
<script src="{{ asset('assets/js/scrollbar/custom.js') }}" ></script>
<script src="{{ asset('assets/js/config.js') }}" ></script>
<script src="{{ asset('assets/js/sidebar-menu.js') }}" ></script>
<script src="{{ asset('assets/js/isotope.pkgd.js') }}" ></script>
<script src="{{ asset('assets/js/icons/feather-icon/feather.min.js') }}" ></script>
<script src="{{ asset('assets/js/icons/feather-icon/feather-icon.js') }}" ></script>
<script src="{{ asset('assets/js/script.js') }}" ></script>
<script src="{{ asset('assets/js/tooltip-init.js') }}" ></script>
<script src="{{ asset('assets/js/animation/wow/wow.min.js') }}" ></script>
<script src="{{ asset('assets/js/animation/wow/wow-init.js') }}" ></script>
<script src="{{ asset('assets/js/photoswipe/photoswipe.min.js') }}" ></script>
<script src="{{ asset('assets/js/photoswipe/photoswipe-ui-default.min.js') }}" ></script>
<script src="{{ asset('assets/js/photoswipe/photoswipe.js') }}" ></script>
@yield('jsdif')
@livewireScripts
<script>
    document.addEventListener('livewire:load', () => {
        Livewire.onPageExpired((response, message) => {})
    })
</script>
</body></html>