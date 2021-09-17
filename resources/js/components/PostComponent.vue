<template>
    <div>
        <ul v-if="posts.length">
            <li
                v-for="post in posts"
                :key="post.id"
            >
            {{ post.title }} <br>
            {{ post.body }}
            </li>
        </ul>

        <p v-else>No relevant posts yet!</p>
  </div>
</template>

<script>
    export default {
        name: 'PostComponent',
        props: {
            posts: {
                type: Array,
                required: true
            }
        }
    } 
</script>