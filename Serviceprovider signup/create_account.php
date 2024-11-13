<?php
// Database connection details
$host = 'localhost';
$dbName = 'journey_beyond';
$username = 'root';
$password = '';

try {
    // Create a new PDO instance
    $conn = new PDO("mysql:host=$host;dbname=$dbName", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirm_password'];

        // Basic validation for password confirmation
        if ($password !== $confirmPassword) {
            echo "Passwords do not match!";
            exit();
        }

        // Hash the password for security
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Check if a PDF file is uploaded
        if (isset($_FILES['pdfFile']) && $_FILES['pdfFile']['error'] === UPLOAD_ERR_OK) {
            $fileTmpPath = $_FILES['pdfFile']['tmp_name'];
            $fileName = $_FILES['pdfFile']['name'];
            $fileSize = $_FILES['pdfFile']['size'];
            $fileType = $_FILES['pdfFile']['type'];
            $fileNameCmps = explode(".", $fileName);
            $fileExtension = strtolower(end($fileNameCmps));

            // Validate the file type (only PDF allowed)
            if ($fileExtension === 'pdf') {
                // Define the upload directory and target file path
                $uploadDir = 'uploads/';
                $targetFilePath = $uploadDir . uniqid() . '_' . $fileName;

                // Create the upload directory if it doesn't exist
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0777, true);
                }

                // Move the uploaded file to the target directory
                if (move_uploaded_file($fileTmpPath, $targetFilePath)) {
                    // Insert data into the database, including the PDF file path
                    $sql = "INSERT INTO signup (name, email, phone, password, pdf_file) VALUES (:name, :email, :phone, :password, :pdf_file)";
                    $stmt = $conn->prepare($sql);

                    // Bind parameters to prevent SQL injection
                    $stmt->bindParam(':name', $name);
                    $stmt->bindParam(':email', $email);
                    $stmt->bindParam(':phone', $phone);
                    $stmt->bindParam(':password', $hashedPassword);
                    $stmt->bindParam(':pdf_file', $targetFilePath);

                    // Execute the statement
                    if ($stmt->execute()) {
                        echo "Account created successfully with PDF file uploaded!";
                    } else {
                        echo "Error creating account.";
                    }
                } else {
                    echo "Error uploading PDF file.";
                }
            } else {
                echo "Only PDF files are allowed.";
            }
        } else {
            echo "Please upload a PDF file.";
        }
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
