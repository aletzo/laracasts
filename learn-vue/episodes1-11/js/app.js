Vue.component('message', {

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

    props: [ 'body', 'title' ],

    template: `
        <article class="message" v-show="isVisible">
            <div class="message-header">
                <p> {{title}} </p>
                <button class="delete"
                        aria-label="delete"
                        @click="hideMessage"
                ></button>
            </div>
            <div class="message-body">
                {{body}}
            </div>
        </article>
    `
})

Vue.component('modal', {

    data() {

        return {
        }
        
    },

    methods: {


    },

    props: [ 'content', 'title' ],

    template: `
        <div class="modal is-active">
            <div class="modal-background"></div>
            <div class="modal-content">
                <div class="modal-card">
                    <header class="modal-card-head">
                        <p class="modal-card-title">{{title}}</p>
                        <button class="delete"
                                aria-label="close"
                                @click="$emit('close')"
                        ></button>
                    </header>
                    <section class="modal-card-body">
                    {{content}}
                    </section>
                </div>
            </div>
        </div>
    `
})

Vue.component('tabs', {

    created() {
        this.tabs = this.$children
    },

    data() {
        return {
            tabs: []
        }
    },

    methods: {
        selectTab(selectedTab) {
            this.tabs.forEach(tab => {
                tab.isActive = tab.name === selectedTab.name
            });
        }
    },

    mounted() {
    },

    template: `
        <div>
            <div class="tabs">
                <ul>
                    <li :class="{ 'is-active' : tab.isActive }"
                        v-for="tab in tabs"
                    >
                        <a @click="selectTab(tab)"
                           :href="tab.href"
                        >{{tab.name}}</a>
                    </li>
                </ul>
            </div>

            <div class="tabs-details">
                <slot></slot>
            </div>
        </div>

    `


})

Vue.component('tab', {

    computed: {
        href() {
            return '#' + this.name.toLowerCase().replace(/ /g, '-')
        }
    },

    data() {
        return {
            isActive: false
        }
    },

    mounted() {
        this.isActive = this.selected;
    },

    props: {
        name: {
            required: true
        },
        selected: {
            default: false
        }
    },


    template: `
        <div v-show="isActive">
            <slot></slot>
        </div>
    `

})


Vue.component('task-list', {

    template: `
        <div>
            <task v-for="task in tasks">{{task.description}}</task>
        </div>`,

    data() {
        return {
            tasks: [
                { description: 'task 1', completed: true  },
                { description: 'task 2', completed: true  },
                { description: 'task 3', completed: true  },
                { description: 'task 4', completed: false },
                { description: 'task 5', completed: false },
                { description: 'task 6', completed: false },
                { description: 'task 7', completed: false },
            ]
        }
    }

})

Vue.component('task', {
    template: '<li><slot></slot></li>'
})
