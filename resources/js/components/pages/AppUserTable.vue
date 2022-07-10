<template>

    <v-card class="deep-purple--text">
        <v-card-title>Страница пользователей</v-card-title>


        <div class="text-center pb-5 " v-if="users.length === 0">
            <v-progress-circular
                :size="75"
                :width="7"
                indeterminate
                color="deep-purple"
            ></v-progress-circular>
        </div>

        <div v-else>
            <v-chip-group
                class="ps-4"
                active-class="primary--text"
                column
            >
                <v-chip
                    v-for="(tag, index) in tags"
                    :key="index"
                >
                    <v-icon size="18">{{ tag.icon }}</v-icon>
                    {{ tag.nameBtn }}
                </v-chip>
            </v-chip-group>
            <v-data-table
                class="elevation-1"
                :items-per-page="5"
                :items="users"
                :headers="headers"
            >
            </v-data-table>
        </div>

    </v-card>
</template>

<script>

import {
    mdiPencil,
    mdiDelete
} from '@mdi/js'

export default {
    name: "AppUserTable",
    computed: {},
    methods: {
        async getUsers() {
            await axios.get('api/user').then(response => (this.users = response.data.data));
        },
    },
    data() {
        return {
            users: [],
            headers: [
                { text: 'ФИО', align: 'start', sortable: true, value: 'business_info[0].fullName' },
                { text: 'Номер телефона', value: 'phone' },
                { text: 'ИНН', value: 'business_info[0].inn' },
            ],
            tags: [
                { nameBtn: 'Редактировать', icon: mdiPencil },
            ],
            icons: {
                mdiPencil,
                mdiDelete,
            },
        }
    },
    mounted() {
        this.getUsers()
    }
}
</script>

<style scoped>

</style>
