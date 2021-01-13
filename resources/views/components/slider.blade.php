<style>
.carousel {
  	background: rgb(0, 0, 0);
}

.carousel-cell {
  	width: 100%;
  	height: 610px;
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

<div class="mb-8" data-flickity='{ "autoPlay": 3000, "pauseAutoPlayOnHover": false, "wrapAround": true, "prevNextButtons": false }'>
	<div class="carousel-cell">
		<img src="/images/fondo_home.webp" class="w-full object-cover absolute inset-0 z-10" style="min-height: 520px; height: 90vh">
		<div class="content h-full z-20 absolute text-5xl left-16 top-1/3 text-white font-bold">
			<caption>
				<p >AGENCIA DIGITAL <span class="text-4xl">DE</span></p>
				<div class="text-4xl">
					<p>MARKETING Y DESARROLLO WEB</p>
					<p>ENFOCADA A <span class="text-5xl">RESULTADOS</span></p>
				</div>
				<a class="btn primary shadow py-3 px-9 bg-purple-900 text-white text-base" href="/servicios">COTIZAR</a>
			</caption>
		</div>
		<div class="h-full hidden md:block absolute z-20 right-16 w-1/3 top-1/4">
			<img src="/images/slide-06.svg" alt="Yeniliktec" width="100%">
		</div>
	</div>
    {{-- <div class="carousel-cell">
        <img src="/images/slide-1.png" class="h-full w-full object-cover absolute inset-0 z-10">
    </div> --}}
</div>
