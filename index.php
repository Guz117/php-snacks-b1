<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <title>Document</title>
</head>

<body>

    <div id="app">
        <select @change="changeGenre" v-model="textSearch" name="genre" id="genre">
            <option value="all">all</option>
            <option value="Alfa Romeo Giulia">Alfa Romeo</option>
            <option value="Kia cee'd">Kia cee'd</option>
            <option value="Fiat Panda">Fiat</option>
            <option value="Subaru XV">Subaru XV</option>
            <option value="GPL">GPL</option>
            <option value="ibrida">ibrida</option>
            <option value="diesel">diesel</option>
            <option value="benzina">benzina</option>
        </select>
        <div class="cars" v-for="car in cars">
            <img :src="car.immagine" alt="">
            <p>{{ car.casa_automobilistica }}</p>
            <p>{{ car.modello }}</p>
            <p>{{ car.prezzo }}</p>
            <p>{{ car.chilometraggio }}</p>
            <p>{{ car.prima_immatricolazione }}</p>
            <p>{{ car.CV }}</p>
            <p>{{ car.carburante }}</p>
            <p>{{ car.classe_del_veicolo }}</p>
            <p>{{ car.numero_portiere }}</p>
            <p>{{ car.cilindrata }}</p>
            <p>{{ car.paese_origine }}</p>
            <p>{{ car.targa }}</p>
            <p>{{ car.numero_proprietari_precedenti }}</p>
            <p>{{ car.specifiche_in_evidenza }}</p>
            <p>{{ car.confort }}</p>
            <p>{{ car.sistema_multimediale }}</p>
            <p>{{ car.sicurezza }}</p>
        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>