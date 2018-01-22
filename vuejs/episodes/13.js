window.EventDispatcher = new class
{
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


    props: {
    },


    template: `
        <input placeholder="Enter your coupon code" @blur="onCouponApplied">
    `,

    data() {
        return {
        }
    },

    created() {
    },

    computed: {
    },

    methods: {
        onCouponApplied() {
            EventDispatcher.fire('applied');
        }
    },
});

let app = new Vue({
    el: '#app',

    data() {
        return {
            couponApplied : false
        }
    },

    methods: {
        onCouponApplied() {
            this.couponApplied = true;
        }
    },

    computed : {
    },

    created() {
        const me = this;

        EventDispatcher.listen('applied', () => {
            this.couponApplied = true
        })
    }
})




