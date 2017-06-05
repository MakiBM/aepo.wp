<div class="testimonial-carousel js-testimonials-carousel">
  @while(have_rows('slides')) @php(the_row())
    <div class="testimonial-carousel__slide">
      <div class="testimonial-carousel__content">
        <div class="testimonial-carousel__media">
          <img src="{{ get_sub_field('thumbnail') }}">
        </div>
        <div class="testimonial-carousel__quote">
          <blockquote class="testimonial-carousel__quote__text">
            {{ get_sub_field('quote') }}
          </blockquote>
          <p class="testimonial-carousel__quote__author">
            <b>{{ get_sub_field('author') }}</b> {{ get_sub_field('role') }}
          </p>
        </div>
      </div>
    </div>
  @endwhile
</div>
