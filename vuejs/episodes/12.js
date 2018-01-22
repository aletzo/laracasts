Vue.component('coupon', {


    props: {
    },


    template: `
        <input placeholder="Enter your coupon code" @blur="$emit('applied')">
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
            this.$emit('applied');
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
    }
})




