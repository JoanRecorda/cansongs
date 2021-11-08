<template>
<div>
<h1>Songs</h1>
<br>
<button>
    <router-link to="/song/create">
    New Song
    </router-link>
</button>
<table>
  <tr>
    <th>Title</th>
    <th>Date of Creation</th>
    <th>Lyrics</th>
    <th></th>
    <th></th>
    <th></th>
  </tr>
  <tr v-for="song in songs" :key="song.id">
    <td>{{song.title}}</td>
    <td>{{song.date}}</td>
    <td>{{song.lyrics}}</td>
    <td><button>View</button></td>
    <td><button>
            <router-link :to='{name:"editSong", params:{id:song.id}}'>
                Edit
            </router-link>
        </button></td>
    <td><button @click.prevent="deleteSong(`${song.id}`)">Delete</button></td>
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
        },
        deleteSong(id){
            this.axios.delete(`/api/song/${id}`)
            .then(response=>{
                this.showSongs()
            })
            .catch(error=>{
                this.song = []
            })
        }
    }
}
</script>

<style scoped>

</style>
