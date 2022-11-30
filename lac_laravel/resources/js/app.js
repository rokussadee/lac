import './bootstrap';
import Alpine from 'alpinejs';
import './wiggle.js'
import carousel from "./carousel.js";
import intersect from '@alpinejs/intersect';
import showbuttons from "./showbuttons.js";
// import './arrow.js'


Alpine.data('showbuttons', showbuttons)
Alpine.data('carousel', carousel)

Alpine.plugin(intersect)
window.Alpine = Alpine;

Alpine.start()
