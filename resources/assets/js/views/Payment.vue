<template>
    <div id="payment">
        <h1 class="payment-heading">How would you like to pay for your dog walk?</h1>
        <div class="form-wrapper">
        <form method="post" action="/payment" @submit.prevent="onSubmit">
            <div class="form-group">
                <label for="inputHolder">Credit card holder name</label>
                <input v-model="form.holder" @keydown="form.errors.clear('holder')" type="text" class="form-control"
                       id="inputHolder" placeholder="Name on credit card">
                <span class="alert-danger" v-text="form.errors.get('holder')"></span>
            </div>
            <div class="form-group">
                <label for="inputNumber">Credit card number</label>
                <input v-model="form.number" @keydown="form.errors.clear('number')" type="text" class="form-control"
                       id="inputNumber" placeholder="0000-0000-0000-0000">
                <span class="alert-danger" v-text="form.errors.get('number')"></span>
            </div>
            <div class="form-row">
                <div class="form-group col-4">
                    <label for="inputMonth">Expiration date</label>
                    <select v-model="form.month" @click="form.errors.clear('month')" class="form-control"
                            id="inputMonth">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                    </select>
                    <span class="alert-danger" v-text="form.errors.get('month')"></span>
                </div>
                <div class="form-group col-4">
                    <label for="inputYear"></label>
                    <select v-model="form.year" @click="form.errors.clear('year')" class="form-control"
                            id="inputYear">
                        <option>2018</option>
                        <option>2019</option>
                        <option>2020</option>
                        <option>2021</option>
                        <option>2022</option>
                    </select>
                    <span class="alert-danger" v-text="form.errors.get('year')"></span>
                </div>
                <div class="form-group col-3">
                    <label for="inputCVC">CVC</label>
                    <input v-model="form.cvc" @keydown="form.errors.clear('cvc')" type="text" class="form-control"
                           id="inputCVC" placeholder="000">
                    <span class="alert-danger" v-text="form.errors.get('cvc')"></span>
                </div>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input v-model="form.save" class="form-check-input" type="checkbox" id="inputSave">
                    <label class="form-check-label save" for="inputSave">Save this card for future use</label>
                </div>
            </div>
            <div class="controls">
                <button type="button" onclick="location.href='/pets'" class="btn btn-primary back">Back</button>
                <button type="submit" class="btn btn-success forward" :disabled="form.errors.any()">Next</button>
            </div>
        </form>
        </div>
    </div>
</template>
<script>
    import {Form} from '../app.js'

    export default {
        data: function () {
            return {
                form: new Form({
                    holder: '',
                    number: '',
                    month: '',
                    year: '',
                    cvc: '',
                    save: ''
                })
            }
        },

        methods: {
            onSubmit() {
                this.form.submit('post', '/payment');
            }
        }
    }
</script>
