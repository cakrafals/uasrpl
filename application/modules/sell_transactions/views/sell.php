<div align="center">
	<h1 class="ui dividing header"><?=$title?></h1>
<table class="ui celled structured table" width="100%">
	<thead>
		<tr>
			<th>No</th>
			<th>No Invoice</th>
		</tr>
	</thead>
	<tbody>
		<?php
		if (count($check_user->result() > 0)) {
			$no = 1;
			foreach ($check_user->result() as $item):
		?>
			<tr>
				<td><?php echo $no; ?></td>
				<td><?php echo $item->no_invoice; ?></td>
			</tr>
		<?php
			$no++;
			endforeach;
		}else{
			echo "Belum ada.";
		}
		?>
	</tbody>
</table>

</div>
      </div>
    </div>
  </div>
