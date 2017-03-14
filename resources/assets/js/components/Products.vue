<template>
<div class="card">
        <div class="header">
            <h4 class="title">Products</h4>
            <p class="category">List all product by pagination and filter</p>
        </div>
        <div class="content table-responsive table-full-width">
            <v-server-table url="/api/products" :columns="columns" :options="options"></v-server-table>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Products Component mounted.')
        },
        data() {
            return {
                options: {},
                columns: [
                    'id',
                    'slug',
                    'name',
                    'price',
                    'photo',
                    'author'
                ]
            }
        }
    }
</script>
