<div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i> LIST SPECIALITES</div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="default-datatable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>NAME</th>
						<th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
				<?php foreach($specialites as $specialite){ ?>
                    <tr>
                        <td><?php echo $specialite['name']; ?></td>
                        
						<td nowrap>
						<a class='btn btn-warning' href="admin.php?controller=specialite&action=edit&id_specialite=<?php echo $specialite['id_specialite']; ?>" title='EDIT'><i class='fa fa-edit'></i></a>
						<a class='btn btn-danger' href="javascript:ConfirmDelete('<?php echo $specialite['id_specialite']; ?>')" title='DELETE'><i class='fa fa-trash'></i></a>
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
   function ConfirmDelete(id_specialite) {
       if (confirm("Voulez-vous supprimer cette specialite ?")) { 
           window.location.href='admin.php?controller=specialite&action=delete&id_specialite='+id_specialite;
       }
   }
</SCRIPT>