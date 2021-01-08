<style>
.carousel {
  	background: rgb(0, 0, 0);
}

.carousel-cell {
  	width: 100%;
  	height: 500px;
  	margin-right: 10px;
  	border-radius: 5px;
  	counter-increment: gallery-cell;
}

/* cell number */
.carousel-cell:before {
  	display: block;
  	text-align: center;
  	content: counter(gallery-cell);
  	line-height: 200px;
  	font-size: 80px;
  	color: white;
}
</style>

<div class="mb-8" data-flickity='{ "autoPlay": 3000, "pauseAutoPlayOnHover": false, "wrapAround": true }'>
    <div class="carousel-cell">
        <img src="/images/slide-1.png" class="h-full w-full object-cover absolute inset-0 z-10">
    </div>
    <div class="carousel-cell">
        <img src="/images/programacion.jpg" class="h-full w-full object-cover absolute inset-0 z-10">
    </div>
</div>
