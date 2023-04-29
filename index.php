<?php
require_once('connection.php');

$connection = ConnectionHelper::getConnection();

$query = "select * from member";
$statement = $connection->prepare($query);
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);

require_once('header.php');
require_once('navbar.php');
?>

<table class="table table-info">
  <thead>
    <tr>
      <th scope="col">SN</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Email</th>
      <th scope="col">Phone </th>
      <th scope="col">Role</th>
      <th scope="col">Date Of Birth</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sn = 0;
    foreach ($result as $member):
      ?>
      <tr>
        <td>
          <?= ++$sn ?>
        </td>
        <td>
          <?= $member['Name'] ?>
        </td>
        <td>
          <?= $member['Address'] ?>
        </td>
        <td>
          <?= $member['Email'] ?>
        </td>
        <td>
          <?= $member['Phone'] ?>
        </td>
        <td>
          <?= $member['Role'] ?>
        </td>
        <td>
          <?= $member['DateOfBirth'] ?>
        </td>
      </tr>
      <?php
    endforeach;
    ?>
  </tbody>
</table>

<button type="button" class="btn btn-primary">Primary</button>

<?php
require_once('footer.php');
?>