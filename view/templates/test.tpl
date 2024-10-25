<html>

<head>
    <title>{$titulo}</title>
</head>

<body>

    <H1>MI PRIMER SMARTY</H1>


    {if $perfil eq "1"}
    <H1>es un administrador</H1>
    {/if}


{section name=indice loop=$arrNombres}
  Nombre: {$arrNombres[indice]}<br />
{/section}


Seleccione un nombre:
<select name="">

{section name=indice loop=$arrNombres}
  <option value="{$smarty.section.indice.index}">{$arrNombres[indice]}</option>
{/section}
</select>


<hr>

{foreach from=$arrNombres item=nombre}
    {$nombre}<br />
{/foreach}


{$pais}


</body>
</html>