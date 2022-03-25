<template>
    <div class="pt-3">
        <div class="max-w-7xl mx-auto col-sm-6 col-lg-8">
            <div class="p-2 bg-white overflow-hidden shadow-sm rounded border w-auto">
                <div class="flex-container">
                    <div class="row">
                        <div class="flex-item pl-3 align-self-end img">
                            <img class="card-img" src="assets/movies-images/{{movies.image}}.jpg" alt="movie-image" loading="lazy">
                        </div>
                        <div class="flex-item pl-3" style="width: 68%">
                            <div class="title">
                                {{movies.name}}
                            </div>
                            <div class="pt-2 pb-2">
                                <i class="fas fa-star text-yellow-400"></i> <span style="font-size: 14px">{{movies.rating}}</span>
                            </div>
                            <div class="pt-4 pb-3 description">
                                <strong>Mama Mia: </strong>Pizzeria!
                            </div>
                            <div class="pb-2 pt-1"></div>
                            <div class="pt-4" id="button">
                                <button type="button" class="btn btn-primary btn-block w-100">View More</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            movies: [],
        };
    },

    methods: {
        async getData() {
            try {
                let response = await fetch("http://127.0.0.1:8000/api/movies");
                this.posts = await response.json();
            } catch (error) {
                console.log(error);
            }
        },
    },

    created() {
        this.getData();
    },
};
</script>

