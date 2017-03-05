<?php
//This function adds the contentsof the feedback form to the database
function addFeedbackToDatabase($dbh, $name,$email, $feedback) {
  $sth = $dbh->prepare('INSERT INTO feedback(name, email, feedback,created_at) VALUES (:name, :email, :feedback, NOW())');

  $sth->bindValue(':name', $name, PDO::PARAM_STR);

  $sth->bindValue(':name', $name, PDO::PARAM_STR);

  $sth->bindValue(':name', $name, PDO::PARAM_STR);

  $success = $sth->execute();

  return $sucess;
}

}
function connectDatabase($host, $database, $user, $pass){
  try {
    $dbh = new PDO('mysql:host=' . $host . ';dbname=' . $database, $user, $pass, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    return $dbh;

  } catch (PDOException $e) {
    print('Error! ' . $e->getMessage() . '<br>');
    die();
  }
}

// This magical function searches through an array
function filterResults($searchQuery, $data) {
  $matches = [];

  foreach ($data as $key => $value) {
    if (strpos(strtolower($value['text']), strtolower($searchQuery)) !== false) {
      $matches[] = $value;
    }
  }
  return $matches;
}

// This function returns all websites from the database
function getWebsites($dbh) {
  $sth = $dbh->prepare("SELECT * FROM websites");
  $sth->execute();

  $result = $sth->fetchAll();
  return $result;
}

// This function returns all websites filtered to a specific term
function searchWebsites($dbh, $searchQuery) {
  //Prepare the statement that will be executed.
  $sth = $dbh->prepare("SELECT * FROM websites WHERE text LIKE :search");

  // Bind the "$searchQuery" the SQL statement.
  $sth->bindValue(':search', '%' . $searchQuery . '%', PDO::PARAM_STR);

  // Execute the statement.
  $sth->execute();

  $result = $sth->fetchAll();
  return $result;
}
