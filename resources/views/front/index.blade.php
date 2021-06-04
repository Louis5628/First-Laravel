@extends('layouts.front')

@section('title', 'front page')

@section('content')
<div id="block-1" class="full-page parallax" style="background-image: url({{ asset('img/dog1.jpg') }}">
    <div class="mask">
        <div class="text-box text-box-bg">我是貓 {{ $name }} 價格: {{ $price }} 宅配: {{ $shipment }}</div>
    </div>
</div>
<div id="block-2" class="text-area text-area-bright">
    <div id="block-2-Anchor"></div>
    <h3>PARALLAX DEMO</h3>
    <span>Parallax scrolling is a web site trend where the background content is moved at a different speed than the
        foreground content while scrolling. Nascetur per nec posuere turpis, lectus nec libero turpis nunc at, sed
        posuere mollis ullamcorper libero ante lectus, blandit pellentesque a, magna turpis est sapien duis blandit
        dignissim. Viverra interdum mi magna mi, morbi sociis. Condimentum dui ipsum consequat morbi, curabitur
        aliquam pede, nullam vitae eu placerat eget et vehicula. Varius quisque non molestie dolor, nunc nisl
        dapibus vestibulum at, sodales tincidunt mauris ullamcorper, dapibus pulvinar, in in neque risus odio.
        Accumsan fringilla vulputate at quibusdam sociis eleifend, aenean maecenas vulputate, non id vehicula lorem
        mattis, ratione interdum sociis ornare. Suscipit proin magna cras vel, non sit platea sit, maecenas ante
        augue etiam maecenas, porta porttitor placerat leo.</span>
</div>

<div id="block-3" class="qurter-page parallax" style="background-image: url({{ asset('img/dog2.jpg') }}">
    <div class="mask">
        <div class="text-box">我也是一隻貓</div>
    </div>
</div>

<div id="block-4" class="text-area text-area-dark">
    <div id="block-4-Anchor"></div>
    Scroll up and down to really get the feeling of how Parallax Scrolling works.
</div>

<div id="block-5" class="qurter-page parallax" style="background-image: url({{ asset('img/dog3.jpg') }}">
    <div class="mask">
        <div class="text-box">貓貓貓貓貓貓貓貓</div>
    </div>
</div>

<div id="block-6" class="text-area text-area-dark">
    <div id="block-6-Anchor"></div>
    Scroll up and down to really get the feeling of how Parallax Scrolling works.
</div>

<div id="block-7" class="full-page parallax" style="background-image: url({{ asset('img/dog1.jpg') }}">
    <div class="mask">
        <div class="text-box text-box-bg">結束了</div>
    </div>
</div>

@endsection
