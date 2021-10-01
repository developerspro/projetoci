<table class="table">
  <thead>
    <tr>
      <th scope="col"># echo $link1</th>
      <th scope="col">Nome</th>
      <th scope="col">Usuario</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
      <?php
      foreach($resultado as $linha){
          ?>
    <tr>
      <th scope="row"><?php echo $linha['id']?></th>
      <td><?php echo $linha['nome']?></td>
      <td><?php echo $linha['usuario']?></td>
      <td><?php echo $linha['email']?></td>
    </tr>
    <?php } ?>
  </tbody>
</table>