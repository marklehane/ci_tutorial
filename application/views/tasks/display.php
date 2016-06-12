<h1>Display Tasks</h1>

<table class="table table-bordered">
  <thead>
    <tr>
      <th>
        Task Name
      </th>
      <th>
        Task Description
      </th>
      <th>
        Data Created
      </th>
    </tr>
  </thead>
  <tbody>
	  <tr>
	    <?php echo "<td>$task->task_name</td>"; ?>
	    <?php echo "<td>$task->task_body</td>"; ?>
	    <?php echo "<td>$task->date_created</td>"; ?>
	  </tr>
  </tbody>
</table>