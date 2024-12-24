<template>

    <form @submit.prevent="submit">
        <input 
            v-model="description"
            type="text"
            placeholder="Decribe your task"
          >
        <input type="submit">
        <p v-if="message">{{ message }}</p>
    </form>

</template>

<script>

import axios from "axios";

export default {
    data() {
        return {
            description: "",
            message: "",
        };
    },

    methods: {
        async submit() {
            if(!this.description.trim()) {
                alert ("Task cannot be emptty");
                return;
            }

            try {
                axios.post("/tasks", {
                    decription: this.description,
                });

                // console.log(d/escription)

                this.message = "Added Successfully";
                this.description = "";
            } catch {
                console.error(error);
            }
        }
    }
}

</script>