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
{{--<script src="{{ asset('assets/js/chart/chartist/chartist.js') }}" defer></script>--}}
{{--<script src="{{ asset('assets/js/chart/chartist/chartist-plugin-tooltip.js') }}" defer></script>--}}
{{--<script src="{{ asset('assets/js/chart/knob/knob.min.js') }}" defer></script>--}}
{{--<script src="{{ asset('assets/js/chart/knob/knob-chart.js') }}" defer></script>--}}
{{--<script src="{{ asset('assets/js/chart/apex-chart/apex-chart.js') }}" defer></script>--}}
{{--<script src="{{ asset('assets/js/chart/apex-chart/stock-prices.js') }}" defer></script>--}}

{{--<script src="{{ asset('assets/js/notify/bootstrap-notify.min.js') }}" defer></script>--}}
{{--<script src="{{ asset('assets/js/dashboard/default.js') }}" defer></script>--}}
{{--<script src="{{ asset('assets/js/notify/index_succes.js') }}" defer></script>--}}
{{--<script src="{{ asset('assets/js/notify/index.js') }}" defer></script><? //} ?>--}}
{{--<script src="{{ asset('assets/js/datepicker/date-picker/datepicker.js') }}" defer></script>--}}
{{--<script src="{{ asset('assets/js/datepicker/date-picker/datepicker.en.js') }}" defer></script>--}}
{{--<script src="{{ asset('assets/js/datepicker/date-picker/datepicker.custom.js') }}" defer></script>--}}
{{--<script src="{{ asset('assets/js/typeahead/handlebars.js') }}" defer></script>--}}
{{--<script src="{{ asset('assets/js/typeahead/typeahead.bundle.js') }}" defer></script>--}}
{{--<script src="{{ asset('assets/js/typeahead/typeahead.custom.js') }}" defer></script>--}}
{{--<script src="{{ asset('assets/js/typeahead-search/handlebars.js') }}" defer></script>--}}
{{--<script src="{{ asset('assets/js/typeahead-search/typeahead-custom.js') }}" defer></script>--}}
<script src="{{ asset('assets/js/tooltip-init.js') }}" ></script>
<script src="{{ asset('assets/js/animation/wow/wow.min.js') }}" ></script>
<script src="{{ asset('assets/js/animation/wow/wow-init.js') }}" ></script>

<script src="{{ asset('assets/js/photoswipe/photoswipe.min.js') }}" ></script>
<script src="{{ asset('assets/js/photoswipe/photoswipe-ui-default.min.js') }}" ></script>
<script src="{{ asset('assets/js/photoswipe/photoswipe.js') }}" ></script>
{{--

<script src="{{ asset('assets/js/range-slider/ion.rangeSlider.min.js') }}" defer></script>
<script src="{{ asset('assets/js/range-slider/rangeslider-script.js') }}" defer></script>
<script src="{{ asset('assets/js/touchspin/vendors.min.js') }}" defer></script>
<script src="{{ asset('assets/js/touchspin/touchspin.js') }}" defer></script>
<script src="{{ asset('assets/js/touchspin/input-groups.min.js') }}" defer></script>
<script src="{{ asset('assets/js/owlcarousel/owl.carousel.js') }}" defer></script>
<script src="{{ asset('assets/js/select2/select2.full.min.js') }}" defer></script>
<script src="{{ asset('assets/js/select2/select2-custom.js') }}" defer></script>
<script src="{{ asset('assets/js/tooltip-init.js') }}" defer></script>
<script src="{{ asset('assets/js/product-tab.js') }}" defer></script>




<script src="{{ asset('assets/js/general-widget.js') }}" defer></script>
<script src="{{ asset('assets/js/height-equal.js') }}" defer></script>--}}
{{--<script src="{{ asset('assets/js/datepicker/daterange-picker/moment.min.js') }}" defer></script>
<script src="{{ asset('assets/js/datepicker/daterange-picker/daterangepicker.js') }}" defer></script>
<script src="{{ asset('assets/js/datepicker/daterange-picker/daterange-picker.custom.js') }}" defer></script>
<script src="{{ asset('assets/js/clipboard/clipboard.min.js') }}" defer></script>
<script src="{{ asset('assets/js/counter/jquery.waypoints.min.js') }}" defer></script>
<script src="{{ asset('assets/js/counter/jquery.counterup.min.js') }}" defer></script>
<script src="{{ asset('assets/js/counter/counter-custom.js') }}" defer></script>
<script src="{{ asset('assets/js/custom-card/custom-card.js') }}" defer></script>--}}

@yield('jsdif')

@livewireScripts
<script>
    document.addEventListener('livewire:load', () => {
        Livewire.onPageExpired((response, message) => {})
    })
</script>
{{--<script src="{{ asset('vue.js') }}"></script>--}}
</body></html>