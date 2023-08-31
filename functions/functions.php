<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'jwd_assessment');

function dd($req)
{
  var_dump($req);
  die;
}

function query($query)
{
  global $conn;

  $hasil = mysqli_query($conn, $query);
  $rows = [];

  while ($row = mysqli_fetch_assoc($hasil)) {
    $rows[] = $row;
  }

  return $rows;
}

function tambah($data)
{
  global $conn;

  $nama     = htmlspecialchars($data["nama"]);
  $email    = htmlspecialchars($data["email"]);
  $no_hp    = htmlspecialchars($data["no_hp"]);
  $semester = htmlspecialchars($data["semester"]);
  $ipk      = htmlspecialchars($data["ipk"]);
  $beasiswa = htmlspecialchars($data["beasiswa"]);

  /* Proses Upload Berkas */
  $files = upload();
  if (!$files) {
    return false;
  }
  /* Akhir Proses Upload Berkas */

  $query = "INSERT INTO pendaftar VALUES ('', '$nama', '$email', '$no_hp', '$semester', '$ipk', '$beasiswa', '$files')";

  mysqli_query($conn, $query);
  return mysqli_affected_rows($conn);
}

function upload()
{
  $namaFile = $_FILES["berkas"]["name"];
  $ukuranFile = $_FILES["berkas"]["size"];
  $error = $_FILES["berkas"]["error"];
  $tmpName = $_FILES["berkas"]["tmp_name"];

  /* Mengambil format yang diupload */
  $formatFile = explode('.', $namaFile);
  $formatFile = strtolower(end($formatFile)); // mengambil format file dari suatu gambar yang sesuai dengan ekstensi gambar yang valid

  /* lolos pengecekan, gambar siap diupload */
  $encNamaFile = uniqid() . '.' . $formatFile; // ubah nama file menjadi nama acak
  move_uploaded_file($tmpName, 'upload/' . $encNamaFile);
  return $encNamaFile;
}