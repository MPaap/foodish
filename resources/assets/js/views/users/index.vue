<template v-show="true">
    <div class="card-body">
        <div class="card" v-for="user in users">
            <div class="card-content">
                <div class="media">
                    <div class="media-content">
                        <p class="title is-4"><router-link :to="{ name: 'users.show', params: { id: user.id }}">{{user.name}}</router-link></p>
                        <p class="subtitle is-6">{{user.email}}</p>
                    </div>
                </div>

                <div class="content">
                    <time>{{createdOn(user)}}</time>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import moment from 'moment';

    export default {
        created() {
            axios.get('/users').then(response => this.users = response.data);
        },

        data() {
            return {
                users: []
            }
        },

        methods: {
            createdOn(user) {
                return moment(user.created_at).fromNow();
            }
        }
    }
</script>
