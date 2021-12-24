<template>
    <div>
        <form>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input v-model="name" type="text" class="form-control" id="name" aria-describedby="name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input v-model="email" type="email" class="form-control" id="email" aria-describedby="email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input v-model="password" type="password" class="form-control" id="password">
            </div>
            <div class="mb-3">
                <label for="password-confirm" class="form-label">Password</label>
                <input v-model="password_confirmation" type="password" class="form-control" id="password-confirm">
            </div>
            <button @click.prevent = 'store' type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</template>

<script>
export default {
    name: "Registration",
    data() {
        return {
            name: null,
            email: null,
            password: null,
            password_confirmation: null,
        }
    },

    methods: {
        store()
        {
            axios.post('/api/users/',{
                name: this.name,
                email: this.email,
                password: this.password,
                password_confirmation: this.password_confirmation,
            })
            .then(res => {
                console.log(res);
            })
        }
    }
}
</script>

<style scoped>

</style>
