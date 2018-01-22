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

let app = new Vue({
    el: '#app',

    data: {
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



