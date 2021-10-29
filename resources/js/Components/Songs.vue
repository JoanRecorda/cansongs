<template>
<div>
<h1>Songs</h1>
<table v-for="song in songs" :key="song.id">
  <tr>
    <th>Title</th>
    <th>Date of Creation</th>
    <th>Lyrics</th>
  </tr>
  <tr>
    <td>{{song.title}}</td>
    <td>{{song.date}}</td>
    <td>{{song.lyrics}}</td>
  </tr>

</table>
</div>
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
