<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
               
                <h3 class="title" v-html="bracket.spend"></h3>
                <br>
                <hr>
                <router-link :to="{ path: '/checkout?pid='+bracket.id }" class="col-md-4 btn btn-sm btn-primary float-right">spend</router-link>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        data(){
            return {
                bracket : []
            }
        },
        beforeMount(){
            axios.get(`/api/bracket/${this.$route.params.id}`)
            .then(response => {
                this.bracket = response.data
            })
            .catch(error => {
                console.error(error);
            })       
        }
    }
</script>
<style scoped>
    .small-text {
        font-size: 18px;
    }
    .title {
        font-size: 36px;
    }
</style>