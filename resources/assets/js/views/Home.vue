<template v-show="true">
    <div class="pt-3 container">
        <div class="row justify-content-center">
            <div class="col">

                <div v-for="day in days" class="pb-3">
                    <div class="text-center">
                        <h5 class="m-0">{{day.day}}</h5>
                    </div>
                    <div v-for="recipe in day.recipes" class="recipe-card-wrapper row no-gutters pt-3">
                        <div class="col-3 recipe-card-image">
                            <img src="//placehold.it/250x250" class="rounded-circle img-fluid" />
                        </div>
                        <div class="col-9 recipe-card-content pl-3">
                            <div class="recipe-card-label text-muted">{{recipe.moment}}</div>
                            <div class="recipe-card-title">{{recipe.name}}</div>
                        </div>
                    </div>
                    <hr>
                </div>

                <div class="btn btn-block btn-primary">Dagen toevoegen</div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },

        data() {
            return {
                days: [
                    {
                        day: "9 Juni",
                        recipes: [
                            {
                                moment: "Lunch",
                                name: "Broodje hummus"
                            },
                            {
                                moment: "Diner",
                                name: "Soep met tofu en aardappelfrietjes"
                            }
                        ]
                    },
                    {
                        day: "10 Juni",
                        recipes: [
                            {
                                moment: "Lunch",
                                name: "Broodje hummus"
                            },
                            {
                                moment: "Diner",
                                name: "Soep met tofu en aardappelfrietjes"
                            }
                        ]
                    },
                    {
                        day: "11 Juni",
                        recipes: [
                            {
                                moment: "Lunch",
                                name: "Broodje hummus"
                            },
                            {
                                moment: "Diner",
                                name: "Soep met tofu en aardappelfrietjes"
                            }
                        ]
                    }
                ]
            }
        }
    }
</script>
