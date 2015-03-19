<div class="flexslider">
    <ul class="slides">
        @foreach($images as $image)
            <li>
                <img src="{{ $image }}" />
            </li>
        @endforeach
    </ul>
</div>