<template>
    <v-card>

        <v-card-text v-for="(item, index) in users" :key="index">

            <h3>Таблица #{{index + 1}}</h3>

            <v-text-field
                filled
                label="ФИО"
                :value="item.fullName"
                readonly
            ></v-text-field>

            <v-text-field
                filled
                label="Телефон"
                :value="item.telephone"
                readonly
            ></v-text-field>

            <v-text-field
                filled
                label="ИНН"
                :value="item.inn"
                readonly
            ></v-text-field>

            <v-divider class="my-2"></v-divider>
        </v-card-text>
    </v-card>
</template>

<script>
export default {
    name: "AppUserTable",
    data() {
        return {
            users: [
                {fullName: 'Иванов Иван Иванович', telephone: '+375291752356', inn: '3664069397'},
                {fullName: 'Денисов Денис Денисович', telephone: '+375331752342', inn: '3664061394'},
                {fullName: 'Вадимов Вадим Вадимович', telephone: '+375291282659', inn: '2694465697'},
                {fullName: 'Петрова Наталья Владимировна', telephone: '+37544274398', inn: '5543215215'},
            ],
        }
    }
}
</script>

<style scoped>

</style>
