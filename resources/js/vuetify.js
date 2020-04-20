import Vue from 'vue'
import Vuetify, {
    VApp,
    VAppBar,
    VNavigationDrawer,
    VToolbar,
    VContainer,
    VContent
} from 'vuetify/lib'

Vue.use(Vuetify, {
    components: { VApp, VAppBar, VNavigationDrawer, VToolbar, VContainer, VContent },
})
const opts = {}
export default new Vuetify(opts)