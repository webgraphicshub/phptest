<?php 
	include_once('header.php');

 ?>
 <h1>Search Page</h1>
 <div class="article-container">
 	<?php 
 		if (isset($_POST['submit-search'])){
 			$search = mysqli_real_escape_string($conn, $_POST['search']);
 			$sql = "SELECT * from FROM article WHERE a_title LIKE '%$search%' OR a_text LIKE '%$search%' OR a_author LIKE '%$search%' OR a_date LIKE '%$search%'";
 			$result = mysqli_query($conn, $sql);
 			$query_result = mysqli_num_rows($result);
 			if ($query_result > 0) {
 				while ( $row = mysqli_fetch_assoc()) {
 						echo "<a><div><h3 class='title'>".$row['a_title']."</h3></div>";
						echo $row['a_text'];
						echo "<h4 class='date'>".$row['a_date']."</h4>";					
						echo "<h4 class=\"author\">".$row['a_author']."</h4></a>";
 				} 
 			} else {
 				echo "There are no results mathing your query";
 			}
 		}

 	 ?>
 </div>
 <!-- https://github.com/webgraphicshub/phptest.git -->