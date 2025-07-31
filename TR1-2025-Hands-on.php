<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>TECHNICAL ROUND 1 - 2025 (Hands_on)</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f0f2f5;
      margin: 0;
      padding: 20px;
    }
    h1 {
      text-align: center;
      color: #2c3e50;
      margin-bottom: 40px;
    }
    details {
      background: #ffffff;
      border-radius: 6px;
      margin-bottom: 20px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
      padding: 15px;
    }
    summary {
      font-size: 18px;
      font-weight: bold;
      color: #1a237e;
      cursor: pointer;
      padding: 10px 0;
    }
    .tabs {
      display: flex;
      flex-wrap: wrap;
      margin-top: 10px;
    }
    .tab-label {
      padding: 10px 15px;
      background: #e3e7f1;
      border-radius: 4px 4px 0 0;
      margin-right: 5px;
      cursor: pointer;
      font-weight: bold;
    }
    .tab-label:hover {
      background: #c5cae9;
    }
    .tab-content {
      display: none;
      padding: 15px;
      border: 1px solid #c5cae9;
      border-top: none;
      background: #fafbff;
      width: 100%;
      border-radius: 0 0 4px 4px;
    }
    input[type="radio"] {
      display: none;
    }
    input[type="radio"]:checked + label {
      background: #3949ab;
      color: white;
    }
    input[type="radio"]:checked + label + .tab-content {
      display: block;
    }
  </style>
</head>
<body>

<h1>TECHNICAL ROUND 1 - 2025 (Hands_on)</h1>
<p style="text-align:center;"><strong>Read instructions carefully. Store information in the mentioned files unless otherwise specified.</strong></p>

<details open>
  <summary>1. Collect System Information and Store in ~/eval_info.txt</summary>
  <div class="tabs">
    <input type="radio" id="q1a" name="q1" checked>
    <label class="tab-label" for="q1a">a)</label>
    <div class="tab-content">Retrieve the number of CPUs attached to your machine, along with the make and model of the CPU, and redirect the output to the file above.</div>

    <input type="radio" id="q1b" name="q1">
    <label class="tab-label" for="q1b">b)</label>
    <div class="tab-content">Your team lead urgently needs details about all attached devices and disk partitions. Append this information to the same file.</div>

    <input type="radio" id="q1c" name="q1">
    <label class="tab-label" for="q1c">c)</label>
    <div class="tab-content">Extract your default shell information from /etc/passwd and append the output to the above file.</div>

    <input type="radio" id="q1d" name="q1">
    <label class="tab-label" for="q1d">d)</label>
    <div class="tab-content">Append the last five lines of the /etc/group file to ~/eval_info.txt.</div>

    <input type="radio" id="q1e" name="q1">
    <label class="tab-label" for="q1e">e)</label>
    <div class="tab-content">Append the first three lines of /etc/resolv.conf to the same file.</div>
  </div>
</details>

<details>
  <summary>2. Perform the Following Tasks on Your Terminal</summary>
  <div class="tabs">
    <input type="radio" id="q2a" name="q2" checked>
    <label class="tab-label" for="q2a">a)</label>
    <div class="tab-content">Create a copy of /etc/passwd, preserving the timestamp, and save it as back-up-passwd in your home directory.</div>

    <input type="radio" id="q2b" name="q2">
    <label class="tab-label" for="q2b">b)</label>
    <div class="tab-content">Add the text "Hey! I am taking my first evaluation" to ~/info_file.txt.</div>

    <input type="radio" id="q2c" name="q2">
    <label class="tab-label" for="q2c">c)</label>
    <div class="tab-content">Create a symbolic (soft) link named ~/info_link.txt that points to ~/info_file.txt.</div>

    <input type="radio" id="q2d" name="q2">
    <label class="tab-label" for="q2d">d)</label>
    <div class="tab-content">Create a hard link named first_hard_link.txt that points to ~/info_file.txt.</div>

    <input type="radio" id="q2e" name="q2">
    <label class="tab-label" for="q2e">e)</label>
    <div class="tab-content">Count the number of lines in /etc/passwd and append the result to ~/info_file.txt without overwriting its existing content.</div>
  </div>
</details>

<details>
  <summary>3. User Login Issue – Investigation Report (~/server-info.txt)</summary>
  <div class="tabs">
    <input type="radio" id="q3a" name="q3" checked>
    <label class="tab-label" for="q3a">a)</label>
    <div class="tab-content">Check how long the system Linoop.ddns.net has been running, and store the output.</div>

    <input type="radio" id="q3b" name="q3">
    <label class="tab-label" for="q3b">b)</label>
    <div class="tab-content">Verify whether the testuser account exists using appropriate commands (without reading any file).</div>

    <input type="radio" id="q3c" name="q3">
    <label class="tab-label" for="q3c">c)</label>
    <div class="tab-content">Read the contents of /etc/resolv.conf and append them to ~/server-info.txt.</div>

    <input type="radio" id="q3d" name="q3">
    <label class="tab-label" for="q3d">d)</label>
    <div class="tab-content">Extract all lines containing the string root from /etc/passwd and store them in the same file.</div>

    <input type="radio" id="q3e" name="q3">
    <label class="tab-label" for="q3e">e)</label>
    <div class="tab-content">Identify how to extract both root and ssh patterns from /etc/passwd.</div>
  </div>
</details>

<details>
  <summary>4. Login to linoop.ddns.net and store info in ~/linoop_server.info</summary>
  <div class="tabs">
    <input type="radio" id="q4a" name="q4" checked>
    <label class="tab-label" for="q4a">a)</label>
    <div class="tab-content">Identify which user you are logged in as on the server.</div>

    <input type="radio" id="q4b" name="q4">
    <label class="tab-label" for="q4b">b)</label>
    <div class="tab-content">Use the appropriate command to get detailed information about the host.</div>

    <input type="radio" id="q4c" name="q4">
    <label class="tab-label" for="q4c">c)</label>
    <div class="tab-content">Retrieve the absolute path of your home directory.</div>

    <input type="radio" id="q4d" name="q4">
    <label class="tab-label" for="q4d">d)</label>
    <div class="tab-content">Check the OS release version of linoop.ddns.net</div>

    <input type="radio" id="q4e" name="q4">
    <label class="tab-label" for="q4e">e)</label>
    <div class="tab-content">Get the permissions of your home directory.</div>
  </div>
</details>

<details>
  <summary>5. Directory and File Permissions – Practice Tasks</summary>
  <div class="tabs">
    <input type="radio" id="q5a" name="q5" checked>
    <label class="tab-label" for="q5a">a)</label>
    <div class="tab-content">Create a nested directory structure: ~/prod/dev/test.</div>

    <input type="radio" id="q5b" name="q5">
    <label class="tab-label" for="q5b">b)</label>
    <div class="tab-content">Inside the dev directory, create an empty file named new-file.txt. Change its permissions to: owner (execute), group (write), others (no access).</div>

    <input type="radio" id="q5c" name="q5">
    <label class="tab-label" for="q5c">c)</label>
    <div class="tab-content">In the prod directory, create a file named prod-file1. Change its ownership so the owner is new-user and the group is admin.</div>

    <input type="radio" id="q5d" name="q5">
    <label class="tab-label" for="q5d">d)</label>
    <div class="tab-content">Inside the test directory, create two subdirectories: test-dir1 and test-dir2. Change ownership of the test directory and all contents so owner is new-user and group is students.</div>

    <input type="radio" id="q5e" name="q5">
    <label class="tab-label" for="q5e">e)</label>
    <div class="tab-content">Create directory structure: ~/database/users/data. Verify using tree command, then delete the “users” directory.</div>
  </div>
</details>

<details>
  <summary>6. Find Command and File Management Tasks (~/first_eval.txt)</summary>
  <div class="tabs">
    <input type="radio" id="q6a" name="q6" checked>
    <label class="tab-label" for="q6a">a)</label>
    <div class="tab-content">Find all .txt files owned by your current user and store the list in ~/first_eval.txt.</div>

    <input type="radio" id="q6b" name="q6">
    <label class="tab-label" for="q6b">b)</label>
    <div class="tab-content">Find all .log files under /var/log, list them with ls -lh, and save the output to ~/log_files.</div>

    <input type="radio" id="q6c" name="q6">
    <label class="tab-label" for="q6c">c)</label>
    <div class="tab-content">Find all .conf files under /etc and copy them into ~/first_eval.txt.</div>

    <input type="radio" id="q6d" name="q6">
    <label class="tab-label" for="q6d">d)</label>
    <div class="tab-content">Your manager needs a list of all .py files under the /opt directory. Use long listing and redirect the output to the same file.</div>

    <input type="radio" id="q6e" name="q6">
    <label class="tab-label" for="q6e">e)</label>
    <div class="tab-content">Locate a file named messages under the /var directory and append its details to ~/eval_info.txt.</div>
  </div>
</details>

</body>
</html>
