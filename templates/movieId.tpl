{include file="secondDegree/header.tpl"}

        <div class="movieContainer particular">
        
            <div class="movieData">
                <div class="dataContainer">
                    <h3 class="data">{$peli->titulo}</h3>
                    <h4 class="data">Genero: {$peli->genero}</h4>
                    <h4 class="data">Fecha: {$peli->fecha}</h4>
                </div>
            </div>
            <div class="btnContainer">
            <button class="btn particular"><a href='home'>Volver</a></button>
        {if $isAdmin} 
            <button class="btn"><a href='showForm/{$peli->id}' type='button' class='btn btn-info'>Editar</a></button>
            <button class="btn"><a href='deleteMovie/{$peli->id}' type='button' class='btn btn-danger'>Eliminar</a></button> 
        {/if}  
        
        </div>
        </div>

    {include file="secondDegree/footer.tpl"}
