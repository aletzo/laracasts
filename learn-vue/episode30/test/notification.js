import Notification from '../src/Notification';
import test from 'ava';
import Vue from 'vue/dist/vue.js';

let vm;

test.beforeEach(t => {
    let N = Vue.extend(Notification);

    vm = new N({
        propsData: {
            message: 'HI'
        }
    }).$mount();
})


test('that it renders a notification', t => {
    t.is(vm.$el.textContent, 'HI');

})

test('that it capitalizes the notification message', t => {
    t.is(vm.$el.textContent, 'HI');
});

test('that it computes the notification', t => {
    t.is(vm.notification, 'HI');
});
