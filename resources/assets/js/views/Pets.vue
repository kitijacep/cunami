<template>
    <div id="pets">
        <div class="container">
            <h1 class="pets-heading">Yay, we love dogs! Give us the basics about your pup.</h1>
            <div class="form-wrapper">
                <form method="post" action="/pets" @submit.prevent="onSubmit">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputName">Name</label>
                            <input v-model="form.name" @keydown="form.errors.clear('name')" type="text"
                                   class="form-control"
                                   id="inputName" placeholder="Pet's name">
                            <span class="alert-danger" v-text="form.errors.get('name')"></span>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPhoto" class="btn btn-default btn-file">Upload a photo</label>
                            <input v-on:change="form.photo" type="file" class="form-control-file" id="inputPhoto">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputBreed">Breed</label>
                            <input v-model="form.breed" @keydown="form.errors.clear('breed')" type="text"
                                   class="form-control"
                                   id="inputBreed" placeholder="Pet's breed">
                            <span class="alert-danger" v-text="form.errors.get('breed')"></span>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputBirthday">Birthday</label>
                            <input v-model="form.birthday" @keydown="form.errors.clear('birthday')" type="text"
                                   class="form-control" id="inputBirthday" placeholder="MM/DD/YYYY">
                            <span class="alert-danger" v-text="form.errors.get('birthday')"></span>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6" @click="form.errors.clear('gender')">
                            <label>Gender</label>
                            <div class="gender-wrapper custom-radio">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" v-model="form.gender" type="radio"
                                           name="breedFemale"
                                           id="inputFemale" value="female">
                                    <label class="form-check-label" for="inputFemale">Female</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" v-model="form.gender" type="radio" name="breedMale"
                                           id="inputMale" value="male">
                                    <label class="form-check-label" for="inputMale">Male</label>
                                </div>
                            </div>
                            <span class="alert-danger" v-text="form.errors.get('gender')"></span>
                        </div>
                        <div class="form-group col-md-6" @click="form.errors.clear('sterilised')">
                            <label>Spayed or Neutered</label>
                            <div class="sterilised-wrapper custom-radio">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" v-model="form.sterilised" type="radio"
                                           name="sterilisedYes"
                                           id="inputSterilised" value="yes">
                                    <label class="form-check-label" for="inputSterilised">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" v-model="form.sterilised" type="radio"
                                           name="sterilisedNo"
                                           id="inputNotSterilised" value="no">
                                    <label class="form-check-label" for="inputNotSterilised">No</label>
                                </div>
                            </div>
                            <span class="alert-danger" v-text="form.errors.get('sterilised')"></span>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="inputWeight">Weight</label>
                        <select class="form-control" v-model="form.weight" @click="form.errors.clear('weight')"
                                id="inputWeight">
                            <option>0-50lbs</option>
                            <option>51-100lbs</option>
                            <option>101-150lbs</option>
                            <option>151-200lbs</option>
                            <option>201-250lbs</option>
                        </select>
                        <span class="alert-danger" v-text="form.errors.get('weight')"></span>
                    </div>
                    <div class="controls">
                        <button type="button" onclick="location.href='/'" class="btn btn-primary back">Exit</button>
                        <button type="submit" class="btn btn-success forward" :disabled="form.errors.any()">Next
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</template>
<script>
    import {Form} from '../app.js'

    export default {
        data: function () {
            return {
                form: new Form({
                    name: '',
                    photo: '',
                    breed: '',
                    birthday: '',
                    gender: '',
                    sterilised: '',
                    weight: ''
                })
            }
        },

        methods: {
            onSubmit() {
                this.form.submit('post', '/pets');
            }
        }
    }
</script>
