<section class="hero-carousel js-hero-carousel">
  <div class="hero-carousel__nav -left js-hero-carousel__nav">
    <div class="hero-carousel__icon"></div>
  </div>
  <div class="hero-carousel__nav -right js-hero-carousel__nav">
    <div class="hero-carousel__icon"></div>
  </div>
  <div class="hero-carousel__wrapper  js-hero-carousel__wrapper">
  @while(have_rows('slides')) @php(the_row())
    <div class="slick-slide">
      <div class="hero-carousel__slide -white">
        <div class="background-layer" style="background-image: url({{ get_sub_field('background') }});"></div>
        <div class="horizontal-container">
          <header class="page-headline">
            <h1 class="page-headline__title">{{ get_sub_field('title') }}</h1>
            <p class="page-headline__subtitle">{{ get_sub_field('subtitle') }}</p>
          </header>
        </div>
      </div>
    </div>
  @endwhile
  </div>
</section>
