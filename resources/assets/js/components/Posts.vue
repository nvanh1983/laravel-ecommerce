<template>
<div class="card">
        <div class="header">
            <h4 class="title">Posts</h4>
            <p class="category">Listing all posts with pagination and filter</p>
        </div>
        <div class="content table-responsive table-full-width">
            <v-server-table url="/api/posts" :columns="columns" :options="options"></v-server-table>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Posts Component mounted.')
        },
        data() {
            return {
                options: {},
                columns: [
                    'id',
                    'slug',
                    'title',
                    'sub-title',
                    'summary',
                    'photo',
                    'publisher'
                ]
            }
        }
    }
</script>
