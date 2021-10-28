<template>
    <main>
       
           <ul>
                <li class="mr-5 hover:text-gray-900">
                    <router-link to="/">Home</router-link>
                </li>
                <li class="mr-5 hover:text-gray-900">
                    <router-link to="/songs">Songs</router-link>
                </li>
                <li class="mr-5 hover:text-gray-900">
                    <router-link to="/rehearsals">Rehearsals</router-link>
                </li>
                <li class="mr-5 hover:text-gray-900">
                    <router-link to="/contact">Contact</router-link>
                </li>
            </ul>

 
        <div>
            <router-view></router-view>
        </div>
    </main>
</template>

<script>
export default {
    name: "App"
}
</script>

<style scoped>

</style>
