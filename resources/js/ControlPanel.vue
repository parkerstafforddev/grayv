<template>

<h1 class="mt-3 ms-3">Control Panel</h1>
    <div v-if="!packsOpen && !uploadFileOpen" class="col-12 text-center align-content-center mt-5">
        <h2 class="d-inline-block">Beats</h2>
        <button class="ms-2" @click="newRequest">New Beat</button>
        <i class="fa-solid fa-plus d-inline-block pb-1 ps-3" @click="newRequest()"></i>
        <table class="col-10">
            <thead>
            <tr>
                <th></th>
                <th>Name</th>
                <th>Price</th>
                <th>Length</th>
                <th>Tags</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><img src="https://media.wnyc.org/i/320/320/l/80/1/blackbox.jpeg" alt="" style="max-width: 50px; max-height: 50px;"></td>
                <td>$2</td>
                <td>Example</td>
                <td>2:03</td>
                <td>Tags</td>
                <td><i class="fa-solid fa-pen-to-square"></i></td>
            </tr>
            </tbody>
        </table>
    </div>
        <div v-if="packsOpen" class="col-12 text-center align-content-center mt-5">
        <h2>Packs <i class="fa-solid fa-lg fa-caret-up"></i></h2>
        <table class="col-10">
            <thead>
            <tr>
                <th></th>
                <th>Name</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><img src="https://media.wnyc.org/i/320/320/l/80/1/blackbox.jpeg" alt="" style="max-width: 50px; max-height: 50px;"></td>
                <td>Example</td>
            </tr>
            </tbody>
        </table>
        </div>


    <div class="container mt-5 col-12" v-if="uploadFileOpen">
        <form @submit.prevent="uploadFile">
            <div class="input-group justify-content-center align-middle">
                <label for="" class="col-2">Upload</label>
                <input type="file" class="col-10 mb-5" @change="onFileChange">
                <label for="name" class="input-group-text square col-2">Name:</label>
                <input type="text" class="col-10" v-model="name">
                <label for="" class="input-group-text square col-2">Price:</label>
                <input type="text" class="col-10" v-model="price">
                <label for="">Tags:</label>
                <input type="radio">
                <button type="submit">Upload File</button>
            </div>
        </form>
    </div>

</template>

<script>
export default {
    name: "ControlPanel",

    data() {
        return {
            packsOpen: false,
            uploadFileOpen: false,
            name: "",
            price: "",

        };
    },

    methods: {
        toggleTable() {
            this.packsOpen = true;
        },

        newRequest() {
            this.uploadFileOpen = true;
        },

        onFileChange(event) {
            this.file = event.target.files[0];
        },

        uploadFile() {
            const formData = new FormData();
            formData.append("file", this.file);
            formData.append("name", this.name);
            formData.append("price", this.price);


            axios.post("/upload", formData)
                .then((response) => {

                    console.log("File uploaded successfully", response.data);
                })
                .catch((error) => {

                    console.error("Error uploading file", error);
                });
        },
    }
}

</script>

<style scoped>

* {
    font-family: Cambria;
}

table {
    border-collapse: collapse;
    margin: auto;
}
th, td {
    padding: 10px;
    text-align: center;
}
th {
    border-bottom: 1px solid black;

}
tr {
    border-bottom: 1px solid black;
}

.square {
    border-radius: 0;
    border-color: transparent;
}
</style>
