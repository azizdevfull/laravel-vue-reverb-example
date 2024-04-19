<template>
    <div>
        <h1>Posts</h1>
        <ul>
            <li v-for="post in posts" :key="post.id">
                {{ post.title }}
                {{ post.body }}
            </li>
        </ul>
    </div>
</template>

<script>
import axios from "axios";

export default {
    data() {
        return {
            posts: [],
        };
    },
    created() {
        this.fetchPosts(); // Initial fetch of posts

        // Set up Laravel Echo to listen for 'PostCreated' event on 'posts' channel
        window.Echo.channel("posts").listen("PostCreated", (event) => {
            // Extract the new post data from the event payload
            const newPost = event.post;

            // Add the new post to the beginning of the posts array (optional: prepend instead of push)
            this.posts.unshift(newPost); // Use unshift to prepend new post to the list
        });
    },
    methods: {
        fetchPosts() {
            axios
                .get("http://localhost:8000/api/posts")
                .then((response) => {
                    // Update the posts array with fetched data
                    this.posts = response.data;
                })
                .catch((error) => {
                    console.error("Error fetching posts:", error);
                });
        },
    },
};
</script>
