<?php 
	include_once 'header.php';

 ?>
	<form action="search.php" method="POST">
		<input type="text" name="search" placeholder="Search">
		<button type="submit" name="submit-search">Search</button>
	</form>

	<h1>Front Page</h1>
	<h2>All Articles</h2>
	<div class="article-container">
		<?php 
			$sql = "SELECT * FROM article";
			$result = mysqli_query($conn, $sql);
			$queryresults= mysqli_num_rows($result);
			if ($queryresults > 0) {
				while ($row = mysqli_fetch_assoc($result)) {
					echo "<div><h3 class='title'>".$row['a_title']."</h3></div>";
					echo $row['a_text'];
					echo "<h4 class='date'>".$row['a_date']."</h4>";					
					echo "<h4 class=\"author\">".$row['a_author']."</h4>";
				}
			}
		 ?>
	</div>
</body>
</html>