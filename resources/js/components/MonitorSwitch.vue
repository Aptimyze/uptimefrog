<template>
    <div class="custom-control custom-switch" @click="setState()" >
        <input type="checkbox" class="custom-control-input" :id="this.id" :checked="isActive">
        <label class="custom-control-label"></label>
    </div>
</template>

<script>
    export default {
        props: {
            id: { type: Number, required: true },
            route: { type: String, required: true },
            active: { type: Number, required: true },
        },

        data() {
            return {
                isActive: 0,
            };
        },

        created() {
            this.isActive = this.active
        },

        methods: {
            setState() {
                if (this.isActive === 1) {
                    this.isActive = 0;
                    //window.axios.put(this.url, { isActive: status }).then(() => { this.isActive = 0;});  
                } else {
                    this.isActive = 1;
                    //window.axios.put(this.url, { isActive: status }).then(() => { this.isActive = 1;});  
                }
            },
        },
    }
</script>
