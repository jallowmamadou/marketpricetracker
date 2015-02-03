<div class="students">
	<table class="table table-bordered pupinfo">
	  <thead>
	    <tr>
	      <th>Local Name</th>
	      <th>National Name</th>
	      <th>Entry Qualification</th>
	      <th>Tuition</th>
	    </tr>
	  </thead>
	  <tbody>
	 @foreach($data['school']['courses'] as $key=>$value)
        <tr data-rnum="<?php echo $value['Cour_CourseID']; ?>" class="onmodal" role="button" data-toggle="modal" data-mtype="student">
			<td class="nm maked"><?php echo $value['Cour_CourseLocalName'];?></td>
			<td class="db">{{$value['Cour_CourseNationalName']}}</td>
			<td class="nn"><?php echo $value['Cour_EntryQualification']; ?> </td>
			<td class="et"><?php echo $value['Cour_Tuition']; ?></td>
		</tr>
	 @endforeach

	  </tbody>
	</table>
</div>

 