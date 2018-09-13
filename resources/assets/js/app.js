import Vue from 'vue'
import VueRouter from 'vue-router'
import axios from 'axios'
import VueAxios from 'vue-axios'

Vue.use(VueRouter, VueAxios, axios);

import App from './views/App'
import Payment from './views/Payment'
import Pets from './views/Pets'
import Confirm from './views/Confirm';

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/pets',
            name: 'pets',
            component: Pets
        },
        {
            path: '/payment',
            name: 'payment',
            component: Payment,
        },
        {
            path: '/confirm',
            name: 'confirm',
            component: Confirm,
        },
    ],
});

export class Errors {
    constructor() {
        this.errors = {};
    }

    /**
     * Gets the certain error for the field
     *
     * @param field
     * @returns {*}
     */
    get(field) {
        if (this.errors[field]) {
            return this.errors[field][0];
        }
    }

    /**
     * Catches the errors and records them if validation fails
     *
     * @param errors
     */
    record(errors) {
        this.errors = errors;
    }

    /**
     * Clears the error, when user populates the field
     *
     * @param field
     */
    clear(field) {
       if (field) {
           delete this.errors[field];

           return;
       }

       this.errors = {};
    }

    /**
     * Checks if there are any errors
     *
     * @returns {boolean}
     */
    any() {
        return Object.keys(this.errors).length > 0;
    }
}

export class Form {

    constructor(data) {
        this.originalData = data;

        for (let field in data) {
            this[field] = data[field];
        }

        this.errors = new Errors();
    }

    /**
     * Clears the form after submition
     */
    reset() {
        for (let field in this.originalData) {
            this[field] = '';
        }
    }

    /**
     * Makes it so, that properties can be accessed with form.property
     */
    data() {

        let data = {};

        for (let property in this.originalData) {
            data[property] = this[property];
        }

        return data;
    }

    /**
     * Form submit
     *
     * @param requestType
     * @param url
     */
    submit(requestType, url) {
        axios[requestType](url, this.data())
            .then(this.onSuccess.bind(this))
            .catch(this.onFail.bind(this))
    }

    /**
     * Success action
     *
     * @param response
     */
    onSuccess(response) {
        alert(response.data.message);

        this.errors.clear();
        this.reset();
    }

    /**
     * Fail action
     *
     * @param error
     */
    onFail(error) {
        this.errors.record(error.response.data.errors);
    }
}


const app = new Vue({
    el: '#app',
    components: { App },
    router,
    linkActiveClass: 'is-active'
});
