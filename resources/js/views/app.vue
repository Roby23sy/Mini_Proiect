<template>
    <div class="card mx-auto shadow-sm rounded border p-2 overflow-hidden">
            <div class="row no-gutters" style="display: flex; flex-direction:row;">
                <div class="col-md-5 pl-3">
                    <img class="card-img" src="assets/movies-images/space-force.jpg" alt="movie-image"  loading="lazy">
                </div>
                <div class="col-md-7 pl-3">
                    <div class="container"  style="display: flex;flex-direction: column;flex-wrap: wrap;align-content: flex-start; height:520px;">
                    <div class="flex-item top">
                        <p class="card-title title">Space Force</p>
                        <p class="caption-top rating"><i class="fas fa-star fa-lg"></i> 6.9</p>
                    </div>

                    <div class="flex-item mid " >
                        <p class="card-text-center description"><span id="artists">Director: </span>Robert Zemeckis</p>
                    </div>

                    <div class="flex-item pl-3 bot">
                        <button type="button" class="btn btn-primary btn-block" data-bs-toggle="button" autocomplete="off">View more</button>
                    </div>
                    </div>
                </div>
            </div>
    </div>
</template>

<script>
    export default{

    }
</script>

