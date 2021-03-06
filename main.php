<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>
<body>

    <div id="app">
            <div @change="fetchData()" v-for="disco in dischi">
                <img :src="disco.poster" alt="">
                <div>{{ disco.title }}</div>
                <div>{{ disco.author}}</div>
                <div>{{ disco.year }}</div>
            </div>
        </div>

    <script src="myScript.js"></script>
</body>
</html>