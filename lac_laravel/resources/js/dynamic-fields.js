export default () => ({
    fields: [],
    addNewField() {
        this.fields.push({
            link: '',
        });
    },
    removeField(index) {
        // if (this.fields.length != 1) {
        this.fields.splice(index, 1);
        // }
    }

})
