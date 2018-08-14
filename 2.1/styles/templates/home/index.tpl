     {include 'overall/header.tpl'} 

    <body>
      
      {include 'overall/nav.tpl'}
  <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
         {include 'overall/menu.tpl'}
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h2 class="sub-header">{$titulo1}</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th style="width: 65%;">Post</th>
                  <th style="width: 25%;">Autor</th>
                  <th style="width: 5%;">Puntos</th>
                  <th style="width: 5%;">Comentarios</th>
                </tr>
              </thead>
              <tbody>
              {if isset($posts)}
                {foreach from=$posts item=pt}
                <tr>
                  <td><a href="">{$pt.titulo}</a></td>
                  <td><a href="">{$pt.dueno}</a></td>
                  <td style="text-align: center;">{$pt.puntos}</td>
                  <td style="text-align: center;">0</td>
                </tr>
                {/foreach}
              {else}
                  <tr>
                  <td>No hay resultados que mostrar</td>
                  </tr>
              {/if}
              </tbody>
            </table>
          </div>
          {if isset($posts)}
          <center>
          <ul class="pagination">
           {if !isset($smarty.get.pag)}
              <li><a>Anterior</a></li>
              {if $pags > 1}
                {if isset($smarty.get.type)}
              <li><a href="?view=index&type={$smarty.get.type}&pag=2">siguiente</a></li>
                {else if isset($smarty.get.view) and $smarty.get.view== 'buscar'}
                <li><a href="?view=buscar&pag=2">siguiente</a></li>
                {else}
              <li><a href="?view=index&pag=2">siguiente</a></li>
                {/if}
              {else}
                  <li><a>siguiente</a></li>
              {/if} <!-- fin del isset $pags-->
            
           {else}
             {if $smarty.get.pag<=1}
             <li><a>Anterior</a></li>
             {else}
                {if isset($smarty.get.type)}
             <li><a href="?view=index&type={$smarty.get.type}&pag={$smarty.get.pag-1}">Anterior</a></li>
                {else if isset($smarty.get.view) and $smarty.get.view== 'buscar'}
                <li><a href="?view=buscar&pag={$smarty.get.pag-1}">Anterior</a></li>
                {else}
             <li><a href="?view=index&pag={$smarty.get.pag-1}">Anterior</a></li>   
                {/if}
             {/if} 
             {if $pags>1 and $smarty.get.pag>=1 and $smarty.get.pag < $pags}
                {if isset($smarty.get.type)}
             <li><a href="?view=index&type={$smarty.get.type}&pag={$smarty.get.pag+1}">Siguiente</a></li>
                {else if isset($smarty.get.view) and $smarty.get.view== 'buscar'}
                <li><a href="?view=buscar&pag={$smarty.get.pag+1}">Siguiente</a></li>
                {else}
             <li><a href="?view=index&pag={$smarty.get.pag+1}">Siguiente</a></li>
                {/if}    
             {else}
             <li><a href="">Siguiente</a></li>
             {/if}
           {/if} <!-- smarty.pag definida -->
          
          <!-- <li class="active"><a href="#">1</a></li>
          <li><a href="#">2</a></li> -->

          </ul>
          </center>
          {/if} <!-- fin del isset $posts-->
          </div>
      </div>
    </div>      

{include 'overall/footer.tpl'}
   </body>
</html>       