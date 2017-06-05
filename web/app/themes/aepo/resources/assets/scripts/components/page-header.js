import nodes from '../utils/nodes'
import addEventListeners from '../utils/addEventListeners'
import scroller from '../utils/scroller'

class PageHeader {
  constructor (el) {
    if (!(this instanceof PageHeader)) return new PageHeader(el)
    this.header = el
    this.bindEvents()
  }

  bindEvents () {
    addEventListeners(window, 'load scroll resize', this.toggle.bind(this))
  }

  toggle () {
    const isTopOfPage = scroller.pos == 0
    const isMobile = window.matchMedia('(max-width: 768px)').matches
    if (isTopOfPage || isMobile) this.header.classList.remove('-fixed')
    else this.header.classList.add('-fixed')
  }
}

nodes('.js-page-header').forEach(PageHeader)

export default PageHeader
