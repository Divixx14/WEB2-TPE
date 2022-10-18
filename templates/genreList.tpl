{include file="secondDegree/header.tpl"}

{if $isAdmin}
    <ul class="list-group">
    <div class="genreContainer">
        <h2 class="genres h2">Modifique la Lista de Generos</h2>
    <li class='list-group-item d-flex justify-content-between align-items-center'>
        <div class="genresTableCont">
            <table class="table table-striped">
                <thead class="genreThead">
                    <tr>
                        <td>Generos</td>
                        <td>Editar</td>
                        <td>Eliminar</td>
                    </tr>
                </thead>
                <tbody class="genreTbody">
                {foreach from=$generos item=$g}
                    <tr>
                        <td><a href="genero/{$g->id_genero}">{$g->genero}</a></td>
                        <td><a href='showUpdateGen/{$g->id_genero}' class="btn btn-primary">Editar</a></button></td>
                        <td><a href='deleteGen/{$g->id_genero}' class="btn btn-danger">Eliminar</a></button></td>
                    </tr>
                {/foreach}
                </tbody>
            </table>
            {include file="secondDegree/genForm.tpl"} 
        </div>
    </li>
    </div>
    </ul>

{else}
    <ul class="list-group">
    <li class='list-group-item d-flex justify-content-between align-items-center'>
    <div class="genreContainer unlogged">
        <h2 class="genres h2">Vea cada pelicula por su genero</h2>
        <ul class="genreList">
        {foreach from=$generos item=$g}
            <li><a href="genero/{$g->id_genero}">{$g->genero}</a></li>
        {/foreach}
        </ul>
    </div>
    </li>
    </ul>
{/if}
{include file="secondDegree/footer.tpl"}
