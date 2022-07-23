
<?php
// Include the database configuration file
include 'dbconn.php';
$statusMsg = '';
session_start();

// File upload path
$file_id = $_POST['file_id'];
$end_date = $_POST['end_date'];
$targetDir = "upload_document/csc574/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
$size = $_FILES['file']['size'];

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
            // Allow certain file formats
            $allowTypes = array('jpg','png','jpeg','gif','pdf','docx','pptx');
            if(in_array($fileType, $allowTypes)){
                // Upload file to server
                if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
                    // update submission file into database
                    $update = $db->query("UPDATE exercise SET attachment_file='$fileName',end_date='$end_date' WHERE id='$file_id'");
                    if($update){
                        $statusMsg = "The file ".$fileName. " has been update successfully.";
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