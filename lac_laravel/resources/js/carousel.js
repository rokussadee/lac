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
        let offset = 400

        slider.scrollTo({left: strategy(current, offset), behavior: "smooth"})
    }
})
