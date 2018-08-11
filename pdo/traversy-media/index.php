<?php 
	$host = "localhost";
	$user = "root";
	$password= "";
	$dbname = "pdoposts";

	// Set DSN
	$dsn = 'mysql:host='. $host .';dbname='. $dbname;

	//Create a PDO instance

	$pdo = new PDO($dsn, $user, $password);
	$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
	$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	# PDO Query

	// $stmt = $pdo->query('SELECT * FROM posts');


	# Passed as array
	// while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
	// 	echo $row['title']. '<br>';
	// }

	# Passed As Object
	// while($row = $stmt->fetch(PDO::FETCH_OBJ)){
	// 	echo $row->title. '<br>';
	// }

	#Prepared Statements (prepare & execute)

	//UNSAFE
	// $sql = "SELECT * FROM posts WHERE author = '$author'";

	// Fetch Multiple posts

	$author = 'Vimal';
	$is_published = true;
	$id = 1;
	$limit =1;

	#Postitional Parameters
	$sql = 'SELECT * FROM posts WHERE author = ? && is_published =? LIMIT ?';
	$stmt = $pdo->prepare($sql);
	$stmt->execute([$author, $is_published, $limit]);
	$posts = $stmt->fetchAll();

	#Named Parameters
	// $sql = 'SELECT * FROM posts WHERE author = :author && is_published = :is_published';
	// $stmt = $pdo->prepare($sql);
	// $stmt->execute(['author'=>$author, 'is_published' => $is_published]);
	// $posts = $stmt->fetchAll();

	// // var_dump($posts);

	

	foreach ($posts as $post) {
		echo $post->title . "<br>";
	}


	# Fetch Single Post

	// $sql = 'SELECT * FROM posts WHERE id = :id ';
	// $stmt = $pdo->prepare($sql);
	// $stmt->execute(['id'=>$id]);
	// $post = $stmt->fetch();

	// echo "<h1>".$post->title."</h1>";
	// echo "<p>".$post->body."</p>";


	# Get Row Count
	// $stmt = $pdo->prepare('SELECT * FROM WHERE author = ?');
	// $stmt->execute([$author]);
	// $postcount = $stmt->rowcount();

	// echo $postcount;

	#Insert Data
	// $title = 'Post Five';
	// $body = 'This is Post five';
	// $author = 'Kevin';

	// $sql = 'INSERT INTO posts(title, body, author) VALUES(:title, :body, :author)';
	// $stmt = $pdo->prepare($sql);
	// $stmt->execute(['title' => $title, 'body' => $body, 'author' => $author]);
	// echo 'Post Added';


	#Update Data
	// $id = 1;
	// $body = 'This is the updated post';
	// $author = 'Kevin';

	// $sql = 'UPDATE posts SET body = :body WHERE id = :id';
	// $stmt = $pdo->prepare($sql);
	// $stmt->execute(['id' => $id, 'body' => $body ]);
	// echo 'Post Updated';


	#Delete Data
	// $id = 3;

	// $sql = 'DELETE FROM posts WHERE id = :id';
	// $stmt = $pdo->prepare($sql);
	// $stmt->execute(['id' => $id]);
	// echo 'Post Deleted';



	#Search Data
	// $search = '%f%';
	// $sql = 'SELECT * FROM posts WHERE title LIKE ?';
	// $stmt = $pdo->prepare($sql);
	// $stmt->execute([$search]);
	// $posts = $stmt->fetchAll();

	// foreach($posts as $post){
	// 	echo $post->title.'<br>';
	// }
?>