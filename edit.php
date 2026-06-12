<?php
session_start();

if(!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

include "db.php";

$id = $_GET['id'];

$sql = "SELECT * FROM posts WHERE id='$id'";
$result = $conn->query($sql);

$row = $result->fetch_assoc();

if(isset($_POST['update'])) {

    $title = $_POST['title'];
    $content = $_POST['content'];

    $stmt = $conn->prepare(
    "UPDATE posts
     SET title=?, content=?
     WHERE id=?"
);

$stmt->bind_param("ssi", $title, $content, $id);

$stmt->execute();

    if($conn->query($update_sql) === TRUE) {

        header("Location: index.php");
        exit();

    } else {

        echo "Error Updating Post";

    }
}
?>

<!DOCTYPE html>
<html>
<head>

<title>Edit Post - BlogSphere</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<style>

body{
    background-image:url('https://images.unsplash.com/photo-1455390582262-044cdead277a?w=1600');
    background-size:cover;
    background-position:center;
    background-repeat:no-repeat;
    min-height:100vh;
}

.overlay{
    background:rgba(0,0,0,0.55);
    min-height:100vh;
    padding:40px 0;
}

.edit-card{
    width:700px;
    max-width:95%;
    margin:auto;
    background:rgba(255,255,255,0.15);
    backdrop-filter:blur(15px);
    border-radius:20px;
    padding:30px;
    color:white;
    box-shadow:0 8px 32px rgba(0,0,0,0.3);
}

.form-control{
    border-radius:12px;
}

.btn{
    transition:0.3s;
}

.btn:hover{
    transform:scale(1.03);
}

.avatar{
    width:40px;
    height:40px;
    border-radius:50%;
    margin-right:10px;
}

.navbar{
    box-shadow:0 4px 10px rgba(0,0,0,0.3);
}

</style>

</head>

<body>

<nav class="navbar navbar-dark bg-dark">

<div class="container">

<span class="navbar-brand fw-bold">
📝 BlogSphere
</span>

<span class="text-white">

<img
src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png"
class="avatar">

<?php echo $_SESSION['username']; ?>

</span>

</div>

</nav>

<div class="overlay">

<div class="edit-card">

<h2 class="text-center mb-4">

<i class="fas fa-edit"></i>
 Edit Blog Post

</h2>

<form method="POST">

<div class="mb-3">

<label class="form-label">
Post Title
</label>

<input
type="text"
name="title"
class="form-control"
value="<?php echo $row['title']; ?>"
required>

</div>

<div class="mb-3">

<label class="form-label">
Post Content
</label>

<textarea
name="content"
class="form-control"
rows="8"
required><?php echo $row['content']; ?></textarea>

</div>

<button
type="submit"
name="update"
class="btn btn-primary w-100">

<i class="fas fa-save"></i>
 Update Post

</button>

</form>

<div class="text-center mt-4">

<a href="dashboard.php"
class="btn btn-secondary m-1">

🏠 Dashboard

</a>

<a href="index.php"
class="btn btn-success m-1">

📖 View Posts

</a>

</div>

</div>

</div>

</body>
</html>