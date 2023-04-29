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

<div class="container-fluid mt-2">
  <div class="card shadow-lg">
    <div class="card-header">
      <h4 class="card-title text-center text-primary text-uppercase">Member List</h4>
    </div>

    <div class="card-body">
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
            <th scope="col">Action</th>
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
              <td>
                <a class="btn btn-primary" href="/edit.php">
                  Edit</a>
                <form action="" method="post">
                  <button type="button" class="btn btn-danger">Delete</button>
                </form>
              </td>

            </tr>
            <?php
          endforeach;
          ?>
        </tbody>
      </table>
    </div>

  </div>
</div>


<?php
require_once('footer.php');
?>