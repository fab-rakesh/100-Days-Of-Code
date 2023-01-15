<?php
/* Create structure for log.md file */

$days = 100; // 100 days of challenge

for ($i = 0; $i <= $days; $i++) {
  $date = strtotime("+$i day", strtotime("2023-01-15"));
  echo "### Day $i (" . date('l jS M Y', $date) . ")";
  echo "\n**Today's Progress:**\n\n";
  echo "- [ ] Progress posted on Twitter\n";
  echo "- [ ] Code pushed on GitHub\n";
  echo "\n**Thoughts:**";
  echo "\n\n**Link(s):** [text](link)\n\n";
  if ($i != $days)
    echo "<hr>\n\n";
}
