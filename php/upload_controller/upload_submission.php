
<?php
// Include the database configuration file
session_start();
include 'dbconn.php';
$statusMsg = '';


// File upload path
$targetDir = "upload_document/csc574/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
$size = $_FILES['file']['size'];
$upload_by = $_SESSION["name"];
$type = "exercise";
$exercise_name = $_POST['exercise_name'];
$subject = $_POST['subject_name'];
$status = "Completed";
$class_name = $_SESSION['class_name'];

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf','docx','pptx');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert = $db->query("INSERT into submission (student_name,attachment_file, upload_on,exercise_name,subject,status,class_name) VALUES ('$upload_by','$fileName', NOW(),'$exercise_name','$subject','$status','$class_name')");
                
            if($insert){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;
?>