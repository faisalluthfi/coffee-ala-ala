@extends('layouts.main');

@section('full')

<div class="slider">
	<div class="m-slider swiper-container">
		<div class="swiper-wrapper">
			<div class="m-slider__item swiper-slide">
				<div class="m-card" ontouchstart>
					<div class="m-card__header" style="background-image: url('https://unsplash.it/320/240?image=0');"></div>
					<div class="m-card__body">
						Lorem Ipsum is simply dummy text of the printing and typesetting industry.
					</div>
				</div>
			</div>
			<div class="m-slider__item swiper-slide">
				<div class="m-card" ontouchstart>
					<div class="m-card__header" style="background-image: url('https://unsplash.it/320/240?image=10');"></div>
					<div class="m-card__body">
						Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
					</div>
				</div>
			</div>
			<div class="m-slider__item swiper-slide">
				<div class="m-card" ontouchstart>
					<div class="m-card__header" style="background-image: url('https://unsplash.it/320/240?image=20');"></div>
					<div class="m-card__body">
						It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
					</div>
				</div>
			</div>
			<div class="m-slider__item swiper-slide">
				<div class="m-card" ontouchstart>
					<div class="m-card__header" style="background-image: url('https://unsplash.it/320/240?image=30');"></div>
					<div class="m-card__body">
						It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
					</div>
				</div>
			</div>
		</div><!-- .swiper-wrapper // -->
	</div><!-- .m-slider // -->
</div><!-- .slider // -->

<div class="cards">
	<p class="cards__note">
		Cards are keeps them styles correctly on any other places as shown below.
	</p>
	<div class="cards__body">
		<div class="cards__item">
			<div class="m-card" ontouchstart>
				<div class="m-card__header" style="background-image: url('https://unsplash.it/320/240?image=0');"></div>
				<div class="m-card__body">
					Lorem Ipsum is simply dummy text of the printing and typesetting industry.
				</div>
			</div>
		</div>
		<div class="cards__item">
			<div class="m-card" ontouchstart>
				<div class="m-card__header" style="background-image: url('https://unsplash.it/320/240?image=10');"></div>
				<div class="m-card__body">
					Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
				</div>
			</div>
		</div>
		<div class="cards__item">
			<div class="m-card" ontouchstart>
				<div class="m-card__header" style="background-image: url('https://unsplash.it/320/240?image=20');"></div>
				<div class="m-card__body">
					It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
				</div>
			</div>
		</div>
	</div><!-- .cards__body // -->
</div><!-- .cards // -->
@endsection

<script>
  var mySwiper = new Swiper ('.swiper-container', {
	loop: true,
	slidesPerView: 3,
	spaceBetween: 30,
	breakpoints: {
		768: {
			slidesPerView: 1
		}
	}
});

</script>