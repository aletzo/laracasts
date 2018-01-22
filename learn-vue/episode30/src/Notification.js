export default {

    computed: {

        notification() {
            return this.message.toUpperCase()
        }
        
    },

    /*
    data() {
        return {
            message: 'hi'
        }
    },
    */

    filters: {
        capitalize(message) {
            return message.toUpperCase()
        }
    },

    props: ['message'],

    template: `
        <div>{{notification}}</div>
    `


}
