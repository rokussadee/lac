export default () => ({
    lastScroll: 0,
    textFocus() {
        this.lastScroll = window.scrollY;
        document.body.style.height = '100vh';
        document.body.style.overflowY = 'hidden';
    },
    focusOut() {
        document.body.style.height = 'auto';
        document.body.style.overflowY = 'visible';
        window.scrollTo(0, this.lastScroll);
    },

})
