<section class="slider-block">
    <image-slider :slides='@json($sliderData)' public_path="{{ url()->to('/') }}"></image-slider>
</section>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
<script type="text/javascript">
    function makeScroll() {
        $('.slider-right').click();

    }
    setInterval(makeScroll, 7000);
    $(document).ready(function () {
        $(".click-to").click(function () {
           window.location.href = '/page/covid-19'
        });
    });

</script>