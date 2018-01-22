window.Event = new class {

    constructor() {
        this.vue = new Vue();
    }

    fire(event, data = null) {
        this.vue.$emit(event, data);
    }

    listen(event, callback) {
        this.vue.$on(event, callback);
    }

}



Vue.component('coupon', {

    data() {
        return {
        }
    },

    methods: {

        onCouponApplied() {
            Event.fire('applied')
        }

    },

    props: [],

    template: `
        <input class="input"
               placeholder="enter your coupon"
               type="text" 
               @blur="onCouponApplied"
            
        >
    `
});



var app = new Vue({

    computed: {
    },

    created() {
        Event.listen('applied', () => {
            console.log('yoyoyoyoyoyo');
        })
    },

    data : {
        couponApplied : false
    
    },

    el: '#root',

    methods: {
        

    },

    mounted() {
        
    }

})

