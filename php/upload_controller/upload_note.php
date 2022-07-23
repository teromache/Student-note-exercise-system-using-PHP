
<?php
// Include the database configuration file
include 'dbconn.php';
$statusMsg = '';
session_start();

// File upload path
$targetDir = "upload_document/csc574/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
$size = $_FILES['file']['size'];
$upload_by = $_SESSION["name"];
$subject_name = $_POST['subject_name'];

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
            // Allow certain file formats
            $allowTypes = array('jpg','png','jpeg','gif','pdf','docx','pptx');
            if(in_array($fileType, $allowTypes)){
                // Upload file to server
                if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
                    // Insert image file name into database
                    $insert = $db->query("INSERT into notes (file_name,upload_on,upload_by,size,subject_name) VALUES ('$fileName', NOW(),'$upload_by','$size','$subject_name')");
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