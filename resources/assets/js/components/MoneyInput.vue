<template>
    <div class="form-group" :class="{'has-error' : showWarning}">
        <label :for="id">{{ title }}</label>
        <div class="input-group">
            <span class="input-group-addon">$</span>
            <input type="text" class="form-control" :id="id" :name="id" v-model="amount" @keyup="verify">
        </div>
        <span class="help-block text-danger" :class="{transparent : !showWarning}">The amount most be a positive number.</span>
    </div>
</template>

<script>
    export default {

        props: {
            id: {
                type: String,
                default: 'amount'
            },
            title: {
                type: String,
                default: null
            }
        },

        data(){
            return{
                showWarning: false,
                amount: null
            }
        },

        methods: {
            verify(){
                if(this.amount <= 0 || isNaN(this.amount)){
                    this.showWarning = true;
                } else {
                    this.showWarning = false;
                }
            }
        }

    }
</script>
