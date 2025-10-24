<?php
include 'db_connect.php';
session_start();

$questions = $_SESSION['questions'];
$answers = $_SESSION['answers'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Review | Quiz</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="quiz-container">
    <h1>🧾 Review Summary</h1>
    <?php foreach ($questions as $i => $q): 
      $qid = $q['id'];
      $correct = $conn->query("SELECT id, option_text FROM options WHERE question_id = $qid AND is_correct = 1")->fetch_assoc();
      $selected = $answers[$qid] ?? null;
    ?>
      <div class="question review">
        <h3><?php echo ($i+1) . ". " . htmlspecialchars($q['question_text']); ?></h3>
        <?php foreach ($q['options'] as $opt): 
          $class = '';
          if ($opt['id'] == $correct['id']) $class = 'correct';
          elseif ($opt['id'] == $selected) $class = 'wrong';
        ?>
          <div class="option <?php echo $class; ?>">
            <?php echo htmlspecialchars($opt['option_text']); ?>
          </div>
        <?php endforeach; ?>
      </div>
    <?php endforeach; ?>
  </div>
</body>
</html>
