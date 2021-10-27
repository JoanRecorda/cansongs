const Home = ()=> import('./Components/Home.vue')
const Contact = ()=> import('./Components/Contact.vue')
const Songs = ()=> import('./Components/Songs.vue')
const Rehearsals = ()=> import('./Components/Rehearsals.vue')

        // Then we import components for the 'song'

const Create = ()=> import('./Components/Song/Create.vue')
const Show = ()=> import('./Components/Song/Show.vue')
const Edit = ()=> import('./Components/Song/Edit.vue')

export const routes = [
    {
        name: 'home',
        path: '/',
        component:Home
    },
    {
        name: 'Songs',
        path: '/songs',
        component:Songs
    },
    {
        name: 'createSong',
        path: '/song/create',
        component:Create
    },
    {
        name: 'showSong',
        path: '/song/show',
        component:Show
    },
    {
        name: 'editSong',
        path: '/song/edit/:id',
        component:Edit
    },
    {
        name: 'rehearsals',
        path: '/rehearsals',
        component:Rehearsals
    },
    {
        name: 'contact',
        path: '/contact',
        component:Contact
    },
]
