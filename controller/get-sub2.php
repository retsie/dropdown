<?php 
require_once '../dao/categoryDAO.php'; //ininclude ko itong class para pwede ko magamit ang kanyang mga function
$sub2 = categoryDAO::sub2Categories($_POST['sub1']); //tinatawag ko ang function na ito para makuha ko ang lahat ng sub2 category

foreach($sub2 as $sub) {
 ?>
<option value="<?= $sub['sub2_category_id'] ?>"><?= $sub['sub2_category_name'] ?></option> <!-- ito ang magiging resulta -->
 <?php 
}
  ?>
