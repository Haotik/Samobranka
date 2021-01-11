<div class="clients">
	<h3>Наши постоянные клиенты </h3>

	<div class="swiper_clients swiper-container">
			<div id="slides_clients" class="swiper-wrapper">
				<article class="swiper-slide"><img src="../img/rjd.svg" alt=""></article>
						<article class="swiper-slide"><img src="../img/obuhov.svg" alt=""></article>
						<article class="swiper-slide"><img src="../img/gazstroy.svg" alt=""></article>
						<article class="swiper-slide"><img src="../img/ezra.svg" alt=""></article>
						<article class="swiper-slide"><img src="../img/rjd.svg" alt=""></article>
						<article class="swiper-slide"><img src="../img/obuhov.svg" alt=""></article>
						<article class="swiper-slide"><img src="../img/gazstroy.svg" alt=""></article>
						<article class="swiper-slide"><img src="../img/ezra.svg" alt=""></article>
			</div>
		<div class="swiper-pagination swiper-pagination-client"></div>
	</div>
			<div class="swiper-button-next swiper-button-next-client"></div>
		<div class="swiper-button-prev swiper-button-prev-client"></div>

	<script>
		new Swiper('.swiper_clients',{
			navigation:{
				nextEl: '.swiper-button-next-client',
				prevEl: '.swiper-button-prev-client'
			},
			pagination:{
				el: '.swiper-pagination-client',
				clickable: true,
				dynamicBullets:true,
			},
			slidesPerView:4,
			autoheight: true, 
			watchOverflow: true,
			spaceBetween: 20,
			freeMode: true,
			breakpoints:{
				320:{
					slidesPerView:2,
					spaceBetween:10,
				},
				500:{
					slidesPerView:3,
				},
				750:{
					slidesPerView:4,
				}
			},

		});
	</script>
</div>