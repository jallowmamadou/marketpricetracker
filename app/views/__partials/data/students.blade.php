<div class="students">
@include('school.student-template')
	<div class="tabbable"> <!-- Only required for left/right tabs -->
		  <ul class="nav nav-tabs">
			<?php
			 $count = 0 ;
			 $keys = array();
			 ?>
			<?php foreach ($students as $key => $value): ?>	
			 <?php
			  	#$count++;
			   $keys[] = $key; 
			   asort($keys);
			   ?>
			<?php endforeach ?>  
<?php if (!empty($keys)): ?>
<li <?php echo ($count == 0)? ' class="active"': ''; ?>><a href="#all-years" data-toggle="tab"><?php echo min($keys) .' To '. max($keys). ' Students';?></a></li>
			<?php foreach ($keys as $key): ?>
				<li><a href="#{{$key}}" data-toggle="tab">{{$key}}</a></li>
				<?php $count++; ?>
			<?php endforeach ?>	
<?php endif ?>

		  </ul>
		<div class="tab-content">
			<i class="fa fa-refresh fa-spin" style="font-size: 128px; display:none; margin:20px 540px;color:#0071FF;"></i>
		  	<?php $counter = 0; ?>
			<div class="tab-pane active" id="all-years">
				<table class="table table-bordered pupinfo">
			    	<thead>
					    <tr>
					      <th>Full name</th>
					      <th>birthday</th>
					      <th>nationality</th>
					      <th>Course</th>
					      <th>gender</th>
					      <th>last updated</th>
					      <th>quick peek</th>
					    </tr>
			    	</thead>
			    	<tbody>
			    		<?php foreach ($keys as $key1 => $value1): ?>
							<?php foreach ($students[$value1] as $key2 => $value2): ?>
						        <tr data-rnum="<?php echo $value2['Pers_PersonID']; ?>" class="onmodal" role="button" data-toggle="modal" data-mtype="student">
									<td class="nm maked"><?php echo $value2['Pers_FirstName'] .' '.$value2['Pers_MiddleName'].' '.$value2['Pers_LastName']; ?></td>
					    			<td>{{$value2['Pers_DOB']}}</td>
					    			<td>{{$value2['Pers_Nationality']}}</td>
					    			<td>
					    				<?php if (!empty($value2['classes'])): ?>
					    					<?php if(isset($value2['classes'][0]['Clas_LocalClassName'])): ?>
					    						<?php echo $value2['classes'][0]['Clas_LocalClassName']; ?>
					    					<?php endif; ?>
					    					<?php else: ?>
					    					N/A
					    				<?php endif ?>
					    			</td>
					    			<td>{{$value2['Pers_Gender']}}</td>
					    			<td>{{$value2['Pers_UpdateDate']}}</td>
					    			<td><a href="#"></a></td>
						    	</tr>
								<?php endforeach ?>
							<?php $counter++; ?>  	
						<?php endforeach ?>
			    	</tbody>
			    </table>			  	
			</div><!-- #all-years -->
			<?php foreach ($keys as $key1 => $value1): ?>
				<div class="tab-pane " id="{{$value1}}">

				</div>
			<?php endforeach ?>
		</div>	
	</div>
</div>

 