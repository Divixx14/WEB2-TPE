
{include file="secondDegree/header.tpl"}

{foreach from=$peliculas item=$peli}

    <div class="movieContainer">
        <div class="movieData">
            <div class="dataContainer">
                <h3 class="data">{$peli->titulo}</h3>
                <h4 class="data">Genero: {$peli->genero}</h4>
                <h4 class="data">Fecha: {$peli->fecha}</h4>
            </div>
        </div>
    </div>
{/foreach}

{include file="secondDegree/footer.tpl"}

