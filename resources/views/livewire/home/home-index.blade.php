<div>
    <div>
        <video src="{{ url('storage/media/sample_video.mp4') }}" autoplay playinline muted loop class="w-full h-full"></video>
    </div>
    <div class="py-[1000px]">
        <ul>
            <li><a href="locale/en">English</a></li>
            <li><a href="locale/jp">Japanese</a></li>
            <li><a href="locale/ch">Chinese</a></li>
        </ul>
    
       <p class="py-10">
        @lang('GAMES')
       </p>
    
       @foreach ($games as $game)
           <div class="flex gap-3">
                <p>{{ $game->title }}</p>
                <p>{{ $game->language->name }}</p>
           </div>
       @endforeach
    </div>
</div>
