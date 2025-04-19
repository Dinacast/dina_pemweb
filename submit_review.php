<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $name = $_POST['name'];
  $rating = $_POST['rating'];
  $comment = $_POST['comment'];

  $uploadDir = "uploads/";
  $defaultPhoto = 'https://via.placeholder.com/64';
  $photoPath = $defaultPhoto;

  // Pastikan folder upload ada
  if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
  }

  // Cek jika ada file diunggah
  if (isset($_FILES['photoFile']) && $_FILES['photoFile']['error'] === UPLOAD_ERR_OK) {
    $tmpName = $_FILES['photoFile']['tmp_name'];
    $fileName = basename($_FILES['photoFile']['name']);
    $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
    $allowedExts = ['jpg', 'jpeg', 'png', 'gif'];

    // Validasi ekstensi file
    if (in_array($fileExt, $allowedExts)) {
      $newFileName = uniqid("profile_", true) . "." . $fileExt;
      $destination = $uploadDir . $newFileName;

      if (move_uploaded_file($tmpName, $destination)) {
        $photoPath = $destination;
      }
    }
  }

  $newReview = [
    "name" => $name,
    "photo" => $photoPath,
    "rating" => $rating,
    "comment" => $comment
  ];

  $_SESSION['reviews'][] = $newReview;

  header("Location: testimonials.php");
  exit;
}
?>
