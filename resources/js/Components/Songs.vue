<template>
<h1>Songs {{songs}}</h1>
</template>

<script>
export default {
  name: "Songs",
    data(){
        return{
            songs:[]
        }
    },
    mounted(){
        this.showSongs()
    },
    methods:{
        async showSongs(){

            await this.axios.get('api/song')
            .then(response => {
                this.songs = response.data
            })
            .catch(error => {
                this.song = []
            })
        }
    }
}
</script>

<style scoped>

</style>
