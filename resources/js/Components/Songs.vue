<template>
    <div>
        <h1>Songs</h1>
            <button>
                <router-link :to='{name:"createSong"}'>
                    Create new song
                </router-link>
            </button>
        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Date</th>
                    <th>Lyrics</th>
                </tr>

            </thead>
            <tbody>
                <tr v-for="song in songs" :key="song.id">
                    <td>{{ song.title }}</td>
                    <td>{{ song.date }}</td>
                    <td>{{ song.lyrics }}</td>
                    <td>
                        <button>
                            <router-link :to='{name:"showSong", params:{id:song.id}}'>
                                Show
                            </router-link>
                        </button>
                    </td>
                    <td>
                        <button>
                            <router-link :to='{name:"editSong", params:{id:song.id}}'>
                                Edit
                            </router-link>
                        </button>
                    </td>
                    <td>
                        <a type="button">
                            Delete
                        </a>
                    </td>
                </tr>
            </tbody>
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

            await this.axios.get('/api/song')
            .then(response=>{
                this.songs = response.data
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
