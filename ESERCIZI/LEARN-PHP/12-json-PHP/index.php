

<head>
    <!-- meta Data information of the HTML file -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP + JSON</title>
    <meta name="description" content="">
    <meta name="author" content="Gabriele Speciale">
    <style scoped>
        div {
            text-align: center;
            margin-top: 20vh;
            font-family: Arial, Helvetica, sans-serif;
        }
        img {
            width: 130px;
            height: auto;
        }
    </style>
</head>

<body>
    <!-- content start -->
    <div>
        <h1>PHP + JSON</h1>
        <p>In questa pagina vediamo come utilizzare JSON con PHP -> <strong>guarda console</strong></p>
        <div>
             <p class="myPokemon">il mio pokemon preferito è:</p>
             <img src="" alt="immagine pokemon">
        </div>
    </div>

    <!-- end content -->
    <script defer>
        // al caricamento della pagina, appendiamo dei dati presi da un file JSON
        const formData = new FormData();
        formData.append("data", "pokedex");

        // chiamata API (lato frontend) per ricever i dati pokedex/colori json passando URL local esempio.php + body formData
        // chiamta IIFE (Immediately Invoked Function Expression) asincrona
        (async () => {
        try {
            const response = await fetch("esempio.php", {
                method: "POST",
                body: formData
            });
            const data = await response.json();
            console.log(data); // vediamo in console i dati ricevuti in sottoforma di array associativo
            buildFavPokemon(data[477]); // chiamiamo la funzione per costruire il pokemon preferito passando INDEX array associativo
        } catch (error) {
            console.error("Errore nel fetch:", error);
        }})(); 

        
        // funzione per costruire il pokemon preferito
        const buildFavPokemon = (pokemon) => {
            // appendiamo il nome del pokemon preferito
            document.querySelector(".myPokemon").innerHTML += ` <strong>${pokemon.name.english}</strong>`;
            // aggiungiamo la source dall'array data immagine
            document.querySelector("img").src = pokemon.image.thumbnail;
        }
    </script>
</body>
</html>