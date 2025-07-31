<?php
// Question data array
$questions = [
  "Collect System Information and Store in ~/eval_info.txt" => [
    "Retrieve the number of CPUs attached to your machine, along with the make and model of the CPU, and redirect the output to the file above.",
    "Your team lead urgently needs details about all attached devices and disk partitions. Append this information to the same file.",
    "Extract your default shell information from /etc/passwd and append the output to the above file.",
    "Append the last five lines of the /etc/group file to ~/eval_info.txt.",
    "Append the first three lines of /etc/resolv.conf to the same file."
  ],
  "Perform the Following Tasks on Your Terminal" => [
    "Create a copy of /etc/passwd, preserving the timestamp, and save it as back-up-passwd in your home directory.",
    'Add the text "Hey! I am taking my first evaluation" to ~/info_file.txt.',
    "Create a symbolic (soft) link named ~/info_link.txt that points to ~/info_file.txt.",
    "Create a hard link named first_hard_link.txt that points to ~/info_file.txt.",
    "Count the number of lines in /etc/passwd and append the result to ~/info_file.txt without overwriting its existing content."
  ],
  "User Login Issue – Investigation Report (~/server-info.txt)" => [
    "Check how long the system Linoop.ddns.net has been running, and store the output.",
    "Verify whether the testuser account exists using appropriate commands (without reading any file).",
    "Read the contents of /etc/resolv.conf and append them to ~/server-info.txt.",
    "Extract all lines containing the string root from /etc/passwd and store them in the same file.",
    "Identify how to extract both root and ssh patterns from /etc/passwd."
  ],
  "Login in the linoop.ddns.net server. Get following information and store in ~/linoop_server.info" => [
    "Identify which user you are logged in as on the server.",
    "Use the appropriate command to get detailed information about the host.",
    "Retrieve the absolute path of your home directory.",
    "Check the OS release version of linoop.ddns.net",
    "Get the permissions of your home directory."
  ],
  "Directory and File Permissions – Practice Tasks" => [
    "Create a nested directory structure: ~/prod/dev/test.",
    "Inside the dev directory, create an empty file named new-file.txt. Change its permissions like allow owner to execute, group should be able to write, and others have no access.",
    "In the prod directory, create a file named prod-file1. Change its ownership so the owner is new-user and the group is admin.",
    "Inside the test directory, create two subdirectories: test-dir1 and test-dir2. Change the ownership of the test directory and all its contents so the owner is new-user and the group is students.",
    'Create a directory structure: ~/database/users/data. Verify it using the tree command, then delete the “users” directory.'
  ],
  "Find Command and File Management Tasks (~/first_eval.txt)" => [
    "Find all .txt files owned by your current user and store the list in ~/first_eval.txt.",
    "Find all .log files under /var/log, list them with ls -lh, and save the output to ~/log_files.",
    "Find all .conf files under /etc and copy them into ~/first_eval.txt.",
    "Your manager needs a list of all .py files under the /opt directory. Use long listing and redirect the output to the same file.",
    "Locate a file named messages under the /var directory and append its details to ~/eval_info.txt."
  ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>TECHNICAL ROUND 1 - 2025 (Hands_on)</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f4f6f8;
      padding: 20px;
      margin: 0;
    }
    h1 {
      text-align: center;
      color: #2c3e50;
    }
    .section {
      background-color: #fff;
      margin-bottom: 20px;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    }
    .section h2 {
      margin-top: 0;
      color: #1a237e;
    }
    .tabs {
      margin-top: 10px;
    }
    .tabs input[type="radio"] {
      display: none;
    }
    .tab-label {
      padding: 10px 15px;
      background: #e3e7f1;
      margin-right: 5px;
      border-radius: 4px 4px 0 0;
      display: inline-block;
      cursor: pointer;
      font-weight: bold;
    }
    .tab-label:hover {
      background: #cdd6f3;
    }
    .tab-content {
      display: none;
      border: 1px solid #c5cae9;
      border-top: none;
      background: #fafbff;
      padding: 15px;
      border-radius: 0 0 4px 4px;
    }
    input[type="radio"]:checked + label {
      background-color: #3949ab;
      color: #fff;
    }
    input[type="radio"]:checked + label + .tab-content {
      display: block;
    }
  </style>
</head>
<body>

<h1>TECHNICAL ROUND 1 - 2025 (Hands_on)</h1>
<p style="text-align: center;"><strong>Read instructions carefully. Store information in the mentioned files unless otherwise specified.</strong></p>

<?php
$questionNumber = 1;
foreach ($questions as $mainQuestion => $parts) {
    echo "<div class='section'>";
    echo "<h2>Q$questionNumber. $mainQuestion</h2>";
    echo "<div class='tabs'>";
    foreach ($parts as $index => $text) {
        $id = "q{$questionNumber}_".chr(97 + $index);
        $name = "tabs{$questionNumber}";
        $label = chr(97 + $index) . ")";
        $checked = ($index === 0) ? "checked" : "";
        echo "<input type='radio' id='$id' name='$name' $checked>";
        echo "<label class='tab-label' for='$id'>$label</label>";
        echo "<div class='tab-content'>$text</div>";
    }
    echo "</div></div>";
    $questionNumber++;
}
?>

</body>
</html>
