<template>


    <v-card class="deep-purple--text">
        <v-card-title>Страница пользователей</v-card-title>
        <v-alert></v-alert>

        <v-chip-group
            class="ps-4"
            active-class="primary--text"
            column
        >
            <v-chip
                v-for="tag in tags"
                :key="tag"
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
    </v-card>
</template>

<script>

import {
    mdiPencil,
    mdiDelete
} from '@mdi/js'

export default {
    name: "AppUserTable",
    data() {
        return {
            users: [
                {fullName: 'Иванов Иван Иванович', phone: '+375291752356', inn: '3664069397'},
                {fullName: 'Денисов Денис Денисович', phone: '+375331752342', inn: '3664061394'},
                {fullName: 'Вадимов Вадим Вадимович', phone: '+375291282659', inn: '2694465697'},
                {fullName: 'Петрова Наталья Владимировна', phone: '+37544274398', inn: '5543215215'},
                {fullName: 'Иванов Иван Иванович', phone: '+375291752356', inn: '3664069397'},
                {fullName: 'Денисов Денис Денисович', phone: '+375331752342', inn: '3664061394'},
                {fullName: 'Вадимов Вадим Вадимович', phone: '+375291282659', inn: '2694465697'},
                {fullName: 'Петрова Наталья Владимировна', phone: '+37544274398', inn: '5543215215'},
                {fullName: 'Иванов Иван Иванович', phone: '+375291752356', inn: '3664069397'},
                {fullName: 'Денисов Денис Денисович', phone: '+375331752342', inn: '3664061394'},
                {fullName: 'Вадимов Вадим Вадимович', phone: '+375291282659', inn: '2694465697'},
                {fullName: 'Петрова Наталья Владимировна', phone: '+37544274398', inn: '5543215215'},
            ],
            headers: [
                {text: 'ФИО', align: 'start', sortable: false, value: 'fullName'},
                {text: 'Номер телефона', value: 'phone'},
                {text: 'ИНН', value: 'inn'},
            ],
            tags: [
                {nameBtn: 'Редактировать', icon: mdiPencil},
            ],
            icons: {
                mdiPencil,
                mdiDelete,
            }
        }
    }
}
</script>

<style scoped>

</style>
