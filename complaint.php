 
<?php  
include('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $rollno = $_POST['rollno'];
    $fullname = $_POST['fullname'];
    $subject = $_POST['subject'];
    $complaint = $_POST['complaint'];
    $status = 'unsolved';  // Default status when a complaint is submitted

    $sql = "INSERT INTO complaint (rollno, fullname, subject, complaint, status) 
            VALUES ('$rollno', '$fullname', '$subject', '$complaint', '$status')";

    if (mysqli_query($connec, $sql)) {
        echo "<script>alert('Complaint Submitted Successfully!'); window.location.href='home3.html';</script>";
    } else {
        echo "Error: " . mysqli_error($connec);
    }
}
?>
