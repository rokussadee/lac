import './bootstrap';
import * as bodyScrollLock from 'body-scroll-lock';
import Alpine from 'alpinejs';
import './wiggle.js'
import carousel from "./carousel.js";
import intersect from '@alpinejs/intersect';
import showbuttons from "./showbuttons.js";
import dynamicFields from "./dynamic-fields.js";
// import scrollLock from "./scrollLock.js";
// import './iframe-style.js';
// import './arrow.js'

// const disableBodyScroll = bodyScrollLock.disableBodyScroll;
// Alpine.data('scrolllock', scrollLock)
Alpine.data('showbuttons', showbuttons)
Alpine.data('carousel', carousel)
Alpine.data('dynamicfields', dynamicFields)

Alpine.plugin(intersect)
window.Alpine = Alpine;

Alpine.start()
