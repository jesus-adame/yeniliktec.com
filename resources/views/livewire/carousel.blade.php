<style>
    .snap-x {
        scroll-snap-type: x mandatory;
        scroll-behavior: smooth;
        -webkit-overflow-scrolling: touch;
    }
    .snap-start {
        scroll-snap-align: start;
    }
    
</style>

<div class="flex flex-col items-center">
    <div class="w-full overflow-x-hidden flex snap-x" style="height: 40vh; min-height: 500px">
        <div class="snap-start w-full h-full flex items-center justify-center text-white text-4xl font-bold flex-shrink-0 bg-black relative" id="slide-1">
            <img src="/images/slide-1.png" class="h-full w-full object-cover absolute inset-0 z-10">
        </div>
        <div class="snap-start w-full h-full flex items-center justify-center text-white text-4xl font-bold flex-shrink-0 bg-green-600" id="slide-2">
            Slide 2
        </div>
        <div class="snap-start w-full h-full flex items-center justify-center text-white text-4xl font-bold flex-shrink-0 bg-red-600 relative" id="slide-3">
            <img src="https://images.unsplash.com/photo-1556740738-b6a63e27c4df?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=448&q=80" class="h-full w-full object-cover absolute inset-0 z-10 opacity-25">
            <h1 class="z-20 text-center">Any kind of content here, images too!</h1>
        </div>
    </div>

    <div class="flex mt-8">
        <a class="w-8 mr-1 h-8 text-gray-700 rounded-full bg-white flex justify-center items-center" href="#slide-1">1</a>
        <a class="w-8 mr-1 h-8 text-gray-700 rounded-full bg-white flex justify-center items-center" href="#slide-2">2</a>
        <a class="w-8 mr-1 h-8 text-gray-700 rounded-full bg-white flex justify-center items-center" href="#slide-3">3</a>
    </div>
</div>