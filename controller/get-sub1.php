<?php 
require_once '../dao/categoryDAO.php'; //ininclude ko itong class para pwede ko magamit ang kanyang mga function
$sub1 = categoryDAO::sub1Categories($_POST['main']); //tinatawag ko ang function na ito para makuha ko ang lahat ng sub1 category

foreach($sub1 as $sub) {
 ?>
<option value="<?= $sub['sub1_category_id'] ?>"><?= $sub['sub1_category_name'] ?></option> <!-- ito ang magiging resulta -->
 <?php 
}
  ?>
