Vue.component('message', {
    
    props: ['title', 'body'],

    template: `
        <article class="message" v-show="isVisible">
            <div class="message-header">
                <p>{{title}}</p>
                <button class="delete" aria-label="delete" @click="hideMessage"></button>
            </div>
            <div class="message-body">
                {{body}}
            </div>
        </article>
    `,

    data() {
        return {
            isVisible: true
        }
    },

    methods: {

        hideMessage() {
            this.isVisible = false;
        }
    },

})


Vue.component('modal', {
    
    props: ['content', 'title'],

    template: `
        <div class="modal is-active">
            <div class="modal-background"></div>
            <div class="modal-card">
                <header class="modal-card-head">
                    <p class="modal-card-title">{{title}}</p>
                    <button class="delete" aria-label="close" @click="$emit('close')"></button>
                </header>
                <section class="modal-card-body">
                    <div class="box">
                        <slot></slot>
                        <p>
                            {{content}}
                        </p>
                    </div>
                </section>
                <footer class="modal-card-foot">
                    <button class="button is-success">Save changes</button>
                    <button class="button">Cancel</button>
                </footer>
            </div>
        </div>
    `
})

Vue.component('tab', {
    template: `
        <div>
            <slot></slot>
        </div>
    `
});

Vue.component('tabs', {
    template: `
    <div>
        <div class="tabs">
            <ul>
                <li class="is-active"><a>Pictures</a></li>
                <li><a>Music</a></li>
                <li><a>Videos</a></li>
                <li><a>Documents</a></li>
            </ul>
        </div>

        <div class="tabs-details">
            <slot></slot>
        </div>
    </div>
    `,

    mounted() {
        console.log(this.$children);
    }



});

let app = new Vue({
    el: '#app',

    data: {
        
        showModal : false,

        isDisabled : false,

        tasks : [
            {text : 'task 1', completed : false},
            {text : 'task 2', completed : false},
            {text : 'task 3', completed : false},
            {text : 'task 4', completed : false},
            {text : 'task 5', completed : true},
            {text : 'task 6', completed : true},
            {text : 'task 7', completed : true},
            {text : 'task 8', completed : true}
        ]
    },

    methods: {
        clickButton() {
            this.isDisabled = true;
        }
    },

    computed : {
        completedTasks() {
            return this.tasks.filter(t => t.completed)
        },

        incompleteTasks() {
            return this.tasks.filter(t => ! t.completed)
        }
    }
})



