new Vue({

    data: {
        
        skills: []

    },


    el: '#app',

    mounted() {

        axios.get('/skills')
            .then(response => {
                this.skills = response.data;
                console.log(response);

            })
                .catch(function (error) {
                console.log(error);
            });
                
        
    }

})
