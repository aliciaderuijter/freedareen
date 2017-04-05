<template>
    <div>
        <div class="input-group">
            <span class="input-group-addon">$</span>
            <input type="text" class="form-control" :id="id" name="amount">
        </div>
        <span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
    </div>
</template>

<script>
    export default {

        props: {
            id: {
                type: String,
                default: 'amount'
            }
        }

    }
</script>
