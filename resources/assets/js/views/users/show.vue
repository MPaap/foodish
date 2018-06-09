<template v-show="true">
    <div v-if="user">
        <div class="card-body">
            <div class="card">
                <div class="card-content">
                    <div class="media">
                        <div class="media-content">
                            <p class="title is-4">{{user.name}}</p>
                            <p class="subtitle is-6">{{user.email}}</p>
                        </div>
                    </div>

                    <div class="content">
                        <time>{{createdOn(user)}}</time>
                    </div>
                </div>
            </div>
        </div>

        <router-link class="button" to="/users">Back to users</router-link>
    </div>
</template>

<script>
    import moment from 'moment';

    export default {
        created() {
            this.fetchUser();
        },

        watch: {
            '$route': 'fetchUser'
        },

        data() {
            return {
                user: null
            }
        },

        methods: {
            createdOn(user) {
                return moment(user.created_at).fromNow();
            },
            fetchUser() {
                this.user = null;
                axios.get('/users/'+this.$route.params.id).then(response => this.user = response.data);
            }
        }
    }
</script>
