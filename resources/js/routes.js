const Home = ()=> import('./Components/Home.vue')
const Contact = ()=> import('./Components/Contact.vue')
const Songs = ()=> import('./Components/Songs.vue')

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
        name: 'songs',
        path: '/songs',
        component:Songs
    },
    {
        name: 'contact',
        path: '/contact',
        component:Contact
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
]
