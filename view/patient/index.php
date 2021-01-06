<div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i> LIST PATIENTS</div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="default-datatable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>NAME</th>
                        <th>CIN</th>
                        <th>EMAIL</th>
                        <th>PHONE</th>
                        <th>REGION</th>
                        <th>TYPE SANG</th>
						<th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
				<?php foreach($patients as $patient){ ?>
                    <tr>
                        <td><?php echo $patient['name']; ?></td>
                        <td><?php echo $patient['cin']; ?></td>
						<td><?php echo $patient['email']; ?></td>
						<td><?php echo $patient['tel']; ?></td>
						<td><?php echo $patient['region']; ?></td>
						<td><?php echo $patient['type_sang']; ?></td>
						<td nowrap>
						<a class='btn btn-warning' href="admin.php?controller=patient&action=edit&id_patient=<?php echo $patient['id_patient']; ?>" title='EDIT'><i class='fa fa-edit'></i></a>
						<a class='btn btn-danger' href="javascript:ConfirmDelete('<?php echo $patient['id_patient']; ?>')" title='DELETE'><i class='fa fa-trash'></i></a>
						</td>
                    </tr>
				<?php } ?>
				</tbody>
			</table>
			</div>
			</div>
		</div>
	</div>
</div>


<SCRIPT language=javascript>
   function ConfirmDelete(id_patient) {
       if (confirm("Voulez-vous supprimer ce patient ?")) { 
           window.location.href='admin.php?controller=patient&action=delete&id_patient='+id_patient;
       }
   }
</SCRIPT>