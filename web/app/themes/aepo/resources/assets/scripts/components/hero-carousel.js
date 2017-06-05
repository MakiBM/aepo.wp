import $ from 'jquery'
import slick from 'slick-carousel'
import nodes from '../utils/nodes'

class Hero {
  constructor(el) {
    if(!(this instanceof Hero)) return new Hero(el)
    const $hero = $(el).find('.js-hero-carousel__wrapper')
    const $left = $(el).find('.js-hero-carousel__nav.-left')
    const $right = $(el).find('.js-hero-carousel__nav.-right')

    $hero.slick({
      arrows: false,
    })

    $left.on('click', () => $hero.slick('slickPrev'))
    $right.on('click', () => $hero.slick('slickNext'))
  }
}

nodes('.js-hero-carousel').forEach(Hero)

export default Hero
