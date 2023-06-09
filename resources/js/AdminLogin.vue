<template>

    <h1 class="ps-5">Admin Login</h1>
    <div class="pt-5 text-center">
        <h4 id="logInHeader">Log In</h4>
        <div class="logIn">
            <div class="mb-2 ">
                <label id="usernameHeader">Username</label>
                <input type="text" v-model="email">
            </div>
            <div class="">
                <label id="usernameHeader" class="ps-1">Password</label>
                <input type="password" v-model="password">
            </div>
            <div>
                <button>
                    <img style="width: 200px; height: 100px"
                         src="https://imagez.tmz.com/image/d7/o/2020/10/21/d7629e79ea484628b87929b9258f8da9_lg.jpg"
                         alt="" @click="login()">
                </button>
            </div>
        </div>
    </div>

</template>

<script>
export default {
    name: "AdminLogin",

    data() {
        return {
            email: '',
            password: '',
            loggedIn: false,
        };
    },

    methods: {
        async login() {
            try {
                const response = await axios.post('/api/login', {
                    email: this.email,
                    password: this.password
                })
                this.loggedIn = true
            } catch (error) {
                console.log(error)
            }
        },
    }
}

</script>

<style scoped>

* {
    font-family: Cambria;
}

#logInHeader {

}

#usernameHeader {
    padding-right: 20px;
}

.logIn {
    margin-right: 75px;
}

</style>
