<template>
    <v-app>
        <v-navigation-drawer app></v-navigation-drawer>
        <v-app-bar
            app
            color="indigo"
            dark
            >
                <v-app-bar-nav-icon @click.stop="drawer = ! drawer" />
                <v-toolbar-title>Application</v-toolbar-title>
        </v-app-bar>
        <v-content>
            <v-container>
                <router-link tag="li" to="/">Inicio</router-link>
                <router-link tag="li" to="/ExampleComponent">ExampleComponent</router-link>
                <router-view></router-view>
            </v-container>
        </v-content>
    </v-app>
</template>