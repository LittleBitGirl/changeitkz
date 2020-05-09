<section class="slider-block">
    <image-slider :slides='@json($sliderData)' public_path="{{ url()->to('/') }}"></image-slider>
</section>

<script type="text/javascript">
    function makeScroll() {
        $('.slider-right').click();
    }

    setInterval(makeScroll, 7000);
</script>