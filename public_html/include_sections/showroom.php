<div class="showroom">
	<h3 class="caps">выполненые работы</h3>
	<div class="swiper_showroom2 swiper-container">
			<div id="slides_showroom2" class="swiper-wrapper">
				<article class="swiper-slide"><img src="../img/room1.png" alt=""></article>
				<article class="swiper-slide"><img src="../img/room2.png" alt=""></article>
				<article class="swiper-slide"><img src="../img/room3.png" alt=""></article>
				<article class="swiper-slide"><img src="../img/room1.png" alt=""></article>
				<article class="swiper-slide"><img src="../img/room2.png" alt=""></article>
				<article class="swiper-slide"><img src="../img/room3.png" alt=""></article>
				<article class="swiper-slide"><img src="../img/room1.png" alt=""></article>
				<article class="swiper-slide"><img src="../img/room2.png" alt=""></article>
				<article class="swiper-slide"><img src="../img/room3.png" alt=""></article>
			</div>
		<div class="swiper-pagination swiper-pagination-show"></div>
	</div>
	<div class="swiper-button-next swiper-button-next-show"></div>
	<div class="swiper-button-prev swiper-button-prev-show"></div>
	<script>
		new Swiper('.swiper_showroom2',{
			navigation:{
				nextEl: '.swiper-button-next-show',
				prevEl: '.swiper-button-prev-show'
			},
			pagination:{
				el: '.swiper-pagination-show',
				clickable: true,
				dynamicBullets:true,
			},
			slidesPerView:3,
			autoheight: true, 
			watchOverflow: true,
			spaceBetween: 30,
			freeMode: true,
			breakpoints:{
				320:{
					slidesPerView:1,
				},
				500:{
					slidesPerView:2,
				},
				750:{
					slidesPerView:3,
				}
			},

		});
	</script>
</div>