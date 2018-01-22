Vue.component('tab', {


    props: {
        name     : { required: true },
        selected : { default: false }
    },


    template: `
        <div v-show="isActive">
            <slot></slot>
        </div>
    `,

    data() {
        return {
            isActive : false
        }
    },

    created() {
        this.isActive = this.selected;
    },

    computed: {
        href() {
            return '#' + this.name.toLowerCase().replace(/ /g, '-');
        }
    }
});

Vue.component('tabs', {
    template: `
    <div>
        <div class="tabs">
            <ul>
                <li v-for="tab in tabs" :class="{'is-active' : tab.isActive}">
                    <a :href="tab.href" @click="selectTab(tab)">
                        {{tab.name}}
                    </a>
                </li>
            </ul>
        </div>

        <div class="tabs-details">
            <slot></slot>
        </div>
    </div>
    `,

    created() {
        console.log(this.$children);

        this.tabs = this.$children;
    },

    data() {
        return {
            tabs: []
        }
    },

    methods: {
        selectTab(selectedTab) {
            this.tabs.forEach(tab => {
                tab.isActive = (tab.name === selectedTab.name);
            })
        }
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




