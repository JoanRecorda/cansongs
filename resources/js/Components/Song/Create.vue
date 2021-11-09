<template>

    <div>
        <form @submit.prevent="createSg">
                <span>
                    <label>Title</label>
                    <input type="text" class="form-control" v-model="song.title">
                </span>
            <br>
                <span>
                    <label>Date</label>
                    <input type="date" class="form-control" v-model="song.date">
                </span>
            <br>
                <span>
                    <label>Lyrics</label>
                    <textarea class="form-control" v-model="song.lyrics"></textarea>
                </span>
                <div>
                    <button type="submit">Create</button>
                </div>
        </form>
    </div>


</template>

<script>
export default {
    name: "Create",
    data() {
        return{
            song:{
                title:"",
                date:"",
                lyrics:"",
            }
        }
    },
    methods:{
        async createSg(){
            await this.axios.post('/api/song')
                .then(response=>{
                    this.$router.push({name:"songs"})
                })
        }
    }
}
</script>

<style scoped>

</style>

