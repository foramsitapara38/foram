<?php
include('guest_header.php');

// Check if the user is logged in
if (!isset($_SESSION['client'])) {
    // Redirect to login page if not logged in
    header("Location: accountinfo.php");
    exit();
}

// Include database connection
include('config.php');

// Fetch user data
$id = $_SESSION['client']['uid'];
$q = "SELECT * FROM register WHERE r_id ='" . $id . "'";
$res = mysqli_query($link, $q);
$row = mysqli_fetch_assoc($res);

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Update profile information
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $mobile = $_POST['mobile'];

    // Check if a new profile picture is uploaded
    if (isset($_FILES['profilePic']) && $_FILES['profilePic']['error'] == UPLOAD_ERR_OK) {
        // Upload directory
        $uploadDir = "profile_image/";
        // Generate a unique name for the uploaded file
        $fileName = uniqid() . '_' . basename($_FILES["profilePic"]["name"]);
        $targetFilePath = $uploadDir . $fileName;

        // Move the uploaded file to the upload directory
        if (move_uploaded_file($_FILES["profilePic"]["tmp_name"], $targetFilePath)) {
            // Update the profile picture path in the database
            $updateQuery = "UPDATE register SET profile_picture = '$targetFilePath' WHERE r_id = '$id'";
            $updateResult = mysqli_query($link, $updateQuery);
            if (!$updateResult) {
                // Error updating profile picture in the database
                echo "Error updating profile picture: " . mysqli_error($link);
                exit();
            }
        } else {
            // Error uploading file
            echo "Error uploading profile picture.";
            exit();
        }
    }

    // Update other profile information
    $updateQuery = "UPDATE register SET r_fnm = '$fullname', r_unm = '$username', r_mno = '$mobile' WHERE r_id = '$id'";
    $updateResult = mysqli_query($link, $updateQuery);
    if (!$updateResult) {
        // Error updating profile information in the database
        echo "Error updating profile information: " . mysqli_error($link);
        exit();
    }

    // Redirect to profile page after updating
    echo "<script>window.location='accontinfo.php';</script>";

    exit();
}
?>

<div class="login">
    <div class="main-agileits">
        <div class="form-w3agile">
            <h3>Edit Profile</h3>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="profilePic">Profile Picture:</label>
                    <input type="file" class="form-control-file" id="profilePic" name="profilePic">
                    <small class="form-text text-muted">Choose a new profile picture.</small>
                </div>
                <div class="form-group">
                    <label for="fullname">Full Name:</label>
                    <input type="text" class="form-control" id="fullname" name="fullname" value="<?php echo $row['r_fnm']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="username">User Name:</label>
                    <input type="text" class="form-control" id="username" name="username" value="<?php echo $row['r_unm']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" readonly class="form-control" id="email" name="email" value="<?php echo $row['r_email']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="mobile">Mobile:</label>
                    <input type="text" class="form-control" id="mobile" name="mobile" value="<?php echo $row['r_mno']; ?>" required>
                </div>
                <button type="submit" class="btn btn-primary">Save Changes</button>
            </form>
        </div>
    </div>
</div>

<?php
include('include/footer.php');
?>