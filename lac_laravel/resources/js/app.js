import './bootstrap';
import Alpine from 'alpinejs';
import carousel from "./carousel.js";

Alpine.data('carousel', carousel)

window.Alpine = Alpine;

Alpine.start()
