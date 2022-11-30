export default () => ({
    skip: 1,
    next() {
        this.to((current, offset) => current + (offset * this.skip))
    },
    prev() {
        this.to((current, offset) => current - (offset * this.skip))

    },
    to(strategy) {
        let slider = this.$refs.slider
        let current = slider.scrollLeft
        let offset = this.$refs.carousel.clientWidth
        slider.scrollTo({left: strategy(current, offset), behavior: "smooth"})
    },
    checkSliderSize(scrollWidth, offsetWidth) {
        if (scrollWidth <= (offsetWidth + 10)) {
            this.$refs.prevButton.hidden = true;
            this.$refs.nextButton.hidden = true;
        } else {
            this.$refs.prevButton.hidden = false;
            this.$refs.nextButton.hidden = false;
        }
    }
})
