<?php
    include('header.php');
?>

<div id="emprestados" class="card">
  <div class="table-responsive">
    <table class="table align-items-center mb-0">
      <thead>
        <tr>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ISBN</th>
          <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7 ps-2">Título</th>
          <th class="text-center text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">Categoria</th>
          <th class="text-center text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">Data de Publicação</th>
          <th class="text-center text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">Autor</th>
          <th class="text-center text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">Data Devolução</th>
        </tr>
      </thead>

      <tbody id="emprestados">
     
      </tbody>


    </table>
  </div>
</div>

<?php 
    include('footer.php');
?>