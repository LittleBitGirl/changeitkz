<section class="slider-block">
    <image-slider :slides='@json($sliderData)' public_path="{{ url()->to('/') }}"></image-slider>
</section>

<script type="text/javascript">
    function makeScroll() {
        $('.slider-right').click();
    }
    setInterval(makeScroll, 7000);
{{--    {{dd($sliderData)}}--}}
{{--    // console.log($('.slider-images li.show'));--}}
    $('.slider-images li').click(function () {
        // console.log(this);
        window.location.href = {!! $sliderData[1]['slider_path'] !!}
    });
</script>