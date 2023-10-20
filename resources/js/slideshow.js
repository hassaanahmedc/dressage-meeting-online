export default () => ({
    current_slide: 0,
    next_slide: function () {
        this.current_slide = (this.current_slide + 1) % 4;
    },
    prev_slide: function () {
        if (this.current_slide == 0) {
            this.current_slide = 3;
            return;
        }
        this.current_slide = (this.current_slide - 1) % 4;
    },
});
