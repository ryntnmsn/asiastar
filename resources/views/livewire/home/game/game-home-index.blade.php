<div>
    @if(count($gameBanners) != null)
        <div wire:ignore id="default-carousel" class="relative w-full" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-[480px] overflow-hidden">
                @foreach ($gameBanners as $gameBanner)
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ url('storage/'. $gameBanner->image) }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
                    </div>
                @endforeach
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                @foreach ($gameBanners as $gameBanner)
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="{{$gameBanner->id}}"></button>
                @endforeach
            </div>
        </div>
    @endif
</div>
