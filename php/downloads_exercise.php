<?php
$conn = mysqli_connect('localhost', 'root', '', 'snesystem');

if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];

    // fetch file to download from database
    $sql = "SELECT * FROM exercise WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    $file = mysqli_fetch_assoc($result);
    $filepath = 'upload_controller/upload_document/csc574/' . $file['attachment_file'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('upload_controller/upload_document/csc574/' . $file['attachment_file']));
        readfile('upload_controller/upload_document/csc574/' . $file['attachment_file']);

        
         exit;
      
    }

}
?>