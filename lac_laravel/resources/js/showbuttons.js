export default () => ({
    prevVisible: false,
    nextVisible: false,
    hidePrev() {
        this.prevVisible = false;
    },
    showPrev() {
        this.prevVisible = true;
    },
    hideNext() {
        this.nextVisible = false;
    },
    showNext() {
        this.nextVisible = true;
    }
})
