<template>
    <div class="main-wrapper container-fluid">

        <div class="row">
            <div class="col-md-4 form-sidebar">
                <div class="sidebar-img">
                <img :src="'img/9-layers.png'" alt="logo" class="logo">
                </div>

                <div class="navigation">
                <div class="nav-links">
                    <router-link :to="{ name: 'pets' }" class="router-link-pets">Pet Basics</router-link>
                    <router-link :to="{ name: 'payment' }" class="router-link-payment">Payment Details</router-link>
                    <router-link :to="{ name: 'confirm' }" class="router-link-confirm">Confirm</router-link>
                </div>
                </div>
            </div>
            <div class="col-md-8 form-bg">
                <router-view></router-view>
            </div>
        </div>
    </div>
</template>
<script>
    export default {}
</script>
