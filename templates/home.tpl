{include file="secondDegree/header.tpl"}


    {foreach from=$peliculas item=$peli}
        <ul class="list-group">
        <div class="movieContainer">
        <li class='list-group-item d-flex justify-content-between align-items-center'>
            <div class="movieData">
                <div class="dataContainer">
                <span>
                    <b>Pelicula:</b> {$peli->titulo} -
                    <b>Genero:</b> {$peli->genero} -
                    <b>Fecha:</b> {$peli->fecha}
                </span>
                </div>
            </div>
        
            <div class="btnContainer">
            {if $isAdmin}
                <a href='showForm/{$peli->id}' class="btn btn-info">Editar</a>
                <a href='deleteMovie/{$peli->id}' class="btn btn-danger">Eliminar</a>
            {/if}
            </div>
        </li>
        </div>
        </ul>
    {/foreach}

{include file="secondDegree/footer.tpl"}