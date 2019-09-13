



<?php  
 $connect = mysqli_connect("localhost", "root", "", "fee_management");  
 $output = '';  
 $sql = "SELECT * FROM class ORDER BY class_id ASC";  
 $result = mysqli_query($connect, $sql);  
 $output .= '  
       <div class="table-responsive" data-pattern="priority-columns">
			<table id="tech-companies-1" class="table  table-striped">
             <thead>
                 <tr>
                     <th width="10%">Sr. No. </th>
                     <th width="30%" >Class</th>
                     <th width="30%">Remark </th>
                     <th width="30%">Delete </th>
                 </tr>
                   </thead>
                 <tbody>';  
 $rows = mysqli_num_rows($result);
 if($rows > 0)  
 {  
	 $sr="1";
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td>'.$sr++.'</td>  
                     <td class="name" data-id1="'.$row["class_id"].'" contenteditable>'.$row["name"].'</td>  
                     <td class="info" data-id2="'.$row["class_id"].'" contenteditable>'.$row["info"].'</td>  
                     <td><button type="button" name="delete_btn" data-id3="'.$row["class_id"].'" class="btn btn-xs btn-danger btn_delete"><i class="fa fa-trash"></i></button></td>  
                </tr>  
           ';  
      }  
      $output .= '  
           <tr>  
                <td></td>  
                <td id="name" contenteditable></td>  
                <td id="info" contenteditable></td>  
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
           </tr>  
      ';  
 }  
 else  
 {  
      $output .= '
				<tr>  
					<td></td>  
					<td id="name" contenteditable></td>  
					<td id="info" contenteditable></td>  
					<td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
			   </tr>';  
 }  
 $output .= ' </tbody>
	</table>
</div>';  
 echo $output;  
 ?>