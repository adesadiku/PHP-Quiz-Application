document.addEventListener("DOMContentLoaded", () => {
  const timerDisplay = document.getElementById("timer");
  if (!timerDisplay) return;

  let timeLeft = 600; // 10 minutes

  const countdown = setInterval(() => {
    const minutes = Math.floor(timeLeft / 60);
    const seconds = timeLeft % 60;
    timerDisplay.textContent = `⏳ ${minutes}:${seconds < 10 ? "0" : ""}${seconds}`;

    if (timeLeft <= 0) {
      clearInterval(countdown);
      document.getElementById("quizForm").submit();
    }
    timeLeft--;
  }, 1000);
});
