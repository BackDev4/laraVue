<template>
    <v-app-bar app>
        <v-btn @click="drawer = !drawer">Кнопочка</v-btn>
        <v-spacer></v-spacer>
        <v-app-bar-title>Header</v-app-bar-title>

        <v-navigation-drawer app v-model="drawer" temporary>
            <v-list dense>
                <v-subheader>
                    <h6>Sidebar</h6>
                </v-subheader>
                <v-list-item-group v-model="selectedItem" color="primary">
                    <v-list-item
                        v-for="(item, index) in list"
                        :key="index"
                    >
                        <!--                     <v-list-item-icon></v-list-item-icon>   -->
                        <v-list-item-content>
                            <v-list-item-title>
                                <h5 v-text="item.text"></h5>
                            </v-list-item-title>
                        </v-list-item-content>

                    </v-list-item>
                </v-list-item-group>
            </v-list>
        </v-navigation-drawer>
    </v-app-bar>

</template>

<script>

export default {
    name: "TheSideBar",
    data() {
        return {
            drawer: false,
            selectedItem: null,
            list: [
                {text: 'Личный кабинет', icon: ''},
                {text: 'Таблица пользователей', icon: ''},
            ],
        }
    },
}
</script>

<style scoped>

</style>
