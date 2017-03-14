<template>
<div class="card">
        <div class="header">
            <h4 class="title">Pages</h4>
            <p class="category">Listing all pages with pagination and filter</p>
        </div>
        <div class="content table-responsive table-full-width">
            <v-server-table url="/api/pages" :columns="columns" :options="options"></v-server-table>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Pages Component mounted.')
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
                    'content'
                ]
            }
        }
    }
</script>
