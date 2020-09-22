<template>
    <div>
        <b-jumbotron header="Test " :lead="'Connection test with: ' + serverUrl">
            <b-skeleton-wrapper :loading="loading">
                <template v-slot:loading>
                    <span >Processado...</span>
                    <b-card>
                        <b-skeleton width="85%"></b-skeleton>
                        <b-skeleton width="55%"></b-skeleton>
                        <b-skeleton width="70%"></b-skeleton>
                        <b-skeleton width="25%"></b-skeleton>
                        <b-skeleton width="65%"></b-skeleton>
                    </b-card>
                </template>
                <p>{{message}}</p>
                <b-button variant="primary" @click="getData">Testar novamente</b-button>
            </b-skeleton-wrapper>
        </b-jumbotron>
    </div>
</template>

<script>
    const URL = process.env.VUE_APP_API_URL;

    export default {
        name: "p-home",
        data() {
            return {
                loading: false,
                message: false,
                serverUrl: URL
            }
        },
        methods: {
            getData()
            {
                this.loading = true;
                this.axios.get(URL + '/base')
                    .then(({data}) => {
                        if (data.request === 'OK')
                        {
                            this.message = 'Everything OK!';
                        }
                        else
                        {
                            this.message = 'Error on server';
                        }
                    })
                    .catch(() => {
                        this.message = 'Error on server communication';
                    })
                    .finally(() => {
                        this.loading = false;
                    })
            }
        },
        mounted() {
            this.getData();
        }
    }
</script>