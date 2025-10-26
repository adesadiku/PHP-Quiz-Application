// Added by Omatiga(joshprograms)
<?php
include 'db_connect.php';
session_start();

// Fetch 60 random questions
$query = "SELECT * FROM questions ORDER BY RAND() LIMIT 60";
$result = $conn->query($query);

$questions = [];
while ($row = $result->fetch_assoc()) {
  $qid = $row['id'];
  $opt = $conn->query("SELECT * FROM options WHERE question_id = $qid");
  $row['options'] = $opt->fetch_all(MYSQLI_ASSOC);
  $questions[] = $row;
}

$_SESSION['questions'] = $questions;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Quiz | PHP & SQL</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js" defer></script>
</head>
<body>
  <div class="quiz-container">
    <div id="timer">⏳ 10:00</div>
    <form action="result.php" method="POST" id="quizForm">
      <?php foreach ($questions as $i => $q): ?>
        <div class="question">
          <h3><?php echo ($i + 1) . ". " . htmlspecialchars($q['question_text']); ?></h3>
          <?php foreach ($q['options'] as $opt): ?>
            <label class="option">
              <input type="radio" name="answers[<?php echo $q['id']; ?>]" value="<?php echo $opt['id']; ?>">
              <?php echo htmlspecialchars($opt['option_text']); ?>
            </label><br>
          <?php endforeach; ?>
        </div>
      <?php endforeach; ?>
      <button type="submit" class="btn-submit">Submit</button>
    </form>
  </div>
</body>
</html>
