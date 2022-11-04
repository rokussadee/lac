<div class="scrollContainer" x-data="carousel">
    <button
        @click="prev"
        class="prevButton"
    >
      <span class="material-symbols-outlined" style="rotate: 180deg">
arrow_forward_ios
</span>
    </button>
    <figure class="carousel"
            x-ref="slider"
    >
        @foreach(json_decode($images) as $imgpath)
            <img src="{{asset("./assets/$imgpath")}}">
        @endforeach
    </figure>
    <button
        @click="next"
        class="nextButton"
    >
        <span class="material-symbols-outlined">
arrow_forward_ios
</span>
    </button>
</div>
