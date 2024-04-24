<?php

session_start();

include 'assets/php/config.php';

if (!isset($_SESSION['id'])) {
    header('location: error_page.php');
} else {
    $title = $image = $link = $content = $project_type = '';
    $error = array('title' => '', 'image' => '', 'link' => '', 'content' => '', 'project_type' => '');

    if (isset($_POST['submit'])) {
        if (empty(trim($_POST['title']))) {
            $error['title'] = 'This field is required';
        } else {
            $title = $_POST['title'];
        }

        if (empty($_FILES['image'])) {
            $error['image'] = 'Select an image';
        } else {
            $image_name = $_FILES['image']['name'];
            $temp_image_name = $_FILES['image']['tmp_name'];

            $explode = explode('.', $image_name);
            $ext = end($explode);

            $extensions = ['jpeg', 'JPEG', 'jpg', 'JPG', 'png', 'PNG'];

            if (in_array($ext, $extensions) === true) {
                $time = time();

                $new_img_name = $time . $image_name;

                move_uploaded_file($temp_image_name, '../userimgs/' . $new_img_name);
            } else {
                $error['image'] = "Invalid file format";
            }
        }

        if (empty(trim($_POST['link']))) {
            $error['link'] = 'This field is required';
        } else {
            $link = $_POST['link'];
        }

        if (empty(trim($_POST['content']))) {
            $error['content'] = 'This field is required';
        } else {
            $content = $_POST['content'];
        }

        if (empty(trim($_POST['project_type']))) {
            $error['project_type'] = 'This field is required';
        } else {
            $project_type = $_POST['project_type'];
        }

        if (!array_filter($error)) {
            $title = mysqli_real_escape_string($conn, $title);
            $image = mysqli_real_escape_string($conn, $new_img_name);
            $link = mysqli_real_escape_string($conn, $link);
            $content = mysqli_real_escape_string($conn, $content);
            $project_type = mysqli_real_escape_string($conn, $project_type);

            $sql = "INSERT INTO `projects`(`title`, `image`, `link`, `type`, `content`) VALUES ('$title','$image',
            '$link','$project_type','$content')";
            $result = mysqli_query($conn, $sql);
            $active = '';

            if ($result) {
                $active = 'active';
            }
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Project</title>
    <link rel="stylesheet" href="assets/css/project.css">
    <link rel="shortcut icon" href="assets/imgs/ossil.png" type="image/x-icon">
</head>

<body>
    <!--Header begins-->
    <?php
    include 'header.php';
    ?>
    <!--Header Ends-->
    <!--Add Project Begins-->
    <section id="add-project" class="<?php echo $active; ?>">
        <div class="add-project">
            <form action="project.php" class="add-project-from" method="POST" enctype="multipart/form-data">
                <header class="form-header">
                    <h2>Add New Project</h2>
                </header>
                <div class="form-details-container">
                    <div class="form-details-top">
                        <div class="details">
                            <label>Project Header:</label>
                            <input type="text" name="title" value="<?php echo htmlspecialchars($title); ?>" class="detail" placeholder="Enter project header">
                            <div class="error"><?php echo $error['title']; ?></div>
                        </div>
                        <div class="details">
                            <label>Project Image:</label>
                            <input type="file" name="image" value="<?php echo htmlspecialchars($image); ?>" class="detail" placeholder="Enter project header">
                            <div class="error"><?php echo $error['image']; ?></div>
                        </div>
                        <div class="details">
                            <label>Project Link:</label>
                            <input type="text" name="link" value="<?php echo htmlspecialchars($link); ?>" class="detail" placeholder="Enter project header">
                            <div class="error"><?php echo $error['link']; ?></div>
                        </div>
                        <div class="details">
                            <label>Project Type:</label>
                            <select id="project-type" , class="project-type" name="project_type">
                                <option value="">--Select a Project Type--</option>
                                <option value="project">Project</option>
                                <option value="tutorial">Tutorial</option>
                            </select>
                            <div class="error"><?php echo $error['project_type']; ?></div>
                        </div>
                    </div>
                    <div class="details">
                        <label>Project Description:</label>
                        <textarea name="content" value="<?php echo htmlspecialchars($content); ?>" class="project-description"></textarea>
                        <div class="error"><?php echo $error['content']; ?></div>
                    </div>
                </div>
                <div class="submit-btn-container">
                    <input type="submit" name="submit" class="submit-btn" value="Post">
                </div>
            </form>
        </div>
    </section>
    <!--Add Project Ends-->
    <!--Direction Begins-->
    <section id="direction" class="<?php echo $active; ?>">
        <div class="direction">
            <div class="direction-top">
                Project Added Successfully
            </div>
            <div class="direction-bottom">
                <a href="project.php">Add New Project</a>
                <a href="homepage.php">HomePage</a>
            </div>
        </div>
    </section>
    <!--Direction Ends-->
    <!--Footer Begins-->
    <footer id="footer" class="<?php echo $active; ?>">
        <div class="footer">
            <div class="footer-content">
                <div class="footer-bottom">
                    <div class="logo">
                        <h3>Ossil Tech</h3>
                    </div>
                    <div class="right">
                        <p>copyright © 2022 Ossil Tech Ltd. All rights researved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--Footer Ends-->
</body>

</html>