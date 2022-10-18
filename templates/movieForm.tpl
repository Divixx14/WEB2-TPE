{include file="secondDegree/header.tpl"}

<div class="form">
<ul class="list-group">
    <form action='{if $peli} updateMovie {else} createMovie {/if}' method='post' enctype="multipart/form-data">

        {if $peli}
            <input type='hidden' value='{$peli->id}' name='id' id='id'>
        {/if}
        <li class='list-group-item d-block justify-content-between align-items-center'>
        <label for='title'>Titulo</label>
        <input type='text' name='title' id='title' {if $peli} value='{$peli->titulo}' {/if}>

        <label for='genero'>Generos</label>
        <select name='genero' id='genero'>
        {foreach from=$generos item=$gen}
            <option value='{$gen->id_genero}'>{$gen->genero}</option>
        {/foreach}
        </select>
        <label for='title'>Fecha</label>
        <input type='number' name='fecha' id='fecha' {if $peli} value='{$peli->fecha}' {/if}>
        
        <input type='submit' value='{if $peli} modificar {else} agregar {/if}'>
        </li>
    </form>

</ul>
</div>

{include file="secondDegree/footer.tpl"}