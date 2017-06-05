import $ from 'jquery'
import slick from 'slick-carousel'
import nodes from '../utils/nodes'

class Testimonials {
  constructor(el) {
    if(!(this instanceof Testimonials)) return new Testimonials(el)
    const $testimonials = $(el)

    $testimonials.slick({
      arrows: false,
      dots: true,
    })
  }
}

nodes('.js-testimonials-carousel').forEach(Testimonials)

export default Testimonials
