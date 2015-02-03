<div class="students">
<div class="tabbable"> <!-- Only required for left/right tabs -->
<?php if (!empty($staffs)): ?>
	
	  <div class="tab-content">

		<table class="table table-bordered pupinfo">

	    	<thead>
		    <tr>
		      <th>Full name</th>
		      <th>birthday</th>
		      <th>nationality</th>
		      <th>Role</th>
		      <th>gender</th>
		      <th>last updated</th>
		      <th>quick peek</th>
		    </tr>
	    	</thead>


	    	<tbody>
	    <div class="tab-pane">
			<?php foreach ($staffs  as $key => $value): ?>

	        <tr data-rnum="<?php echo $value['Pers_PersonID']; ?>" class="onmodal" role="button" data-toggle="modal" data-mtype="student">
					<td class="nm maked"><?php echo $value['Pers_FirstName'] .' '.$value['Pers_MiddleName'].' '.$value['Pers_LastName']; ?></td>
	    			<td>{{$value['Pers_DOB']}}</td>
	    			<td>{{$value['Pers_Nationality']}}</td>
	    			<td>
	    				<?php if (!empty($value['staffs'])): ?>
	    					<?php if(isset($value['staffs'][0]['Staff_Role'])): ?>
	    						<?php echo $value['staffs'][0]['Staff_Role']; ?>
	    					<?php endif; ?>
	    					<?php else: ?>
	    					N/A
	    				<?php endif ?>
	    			</td>
	    			<td>{{$value['Pers_Gender']}}</td>
	    			<td>{{$value['Pers_UpdateDate']}}</td>
	    			<td><a href="#"></a></td>
	    		</tr>

			<?php endforeach ?>
	    </div>

	    	</tbody>
	    	
	    </table>
	  </div>	
		 	<?php else: ?>
		 		<h3>There are no staffs yet!</h3>
		 <?php endif ?>




</div>

</div>

 