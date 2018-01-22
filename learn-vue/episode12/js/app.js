Vue.component('coupon', {

    data() {
        return {
        }
    },

    methods: {

        onCouponApplied() {
            this.$emit('applied')
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

    data : {
        couponApplied : false
    
    },

    el: '#root',

    methods: {
        
        onCouponApplied() {
            console.log('coupon applied!');

            this.couponApplied = true;
        }

    },

    mounted() {
        
    }

})

