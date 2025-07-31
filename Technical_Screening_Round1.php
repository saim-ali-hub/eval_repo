<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Technical Screening Round - 1: Linux Interview Questions</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f4f6f9;
            color: #333;
            margin: 40px;
        }
        h1, h2 {
            color: #004080;
        }
        section {
            background: #fff;
            padding: 25px;
            border-radius: 10px;
            margin-bottom: 30px;
            box-shadow: 0 0 10px rgba(0,0,0,0.07);
        }
        ol {
            padding-left: 20px;
        }
        li {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

    <h1>Technical Screening Round - 1</h1>

    <section>
        <h2>A. Linux General Questions</h2>
        <ol start="1">
            <li>What is difference between open source and close source operating system?</li>
            <li>What are different flavours/distros of Linux are you familiar with?</li>
            <li>How would you check that a server is physical or virtual?</li>
            <li>What is the structure of Linux, or what are the core components of the Linux OS?</li>
            <li>What is the difference between shell and Kernel?</li>
            <li>How can we check the hostname?</li>
            <li>What is the command to check the OS release?</li>
            <li>How can you find out the kernel version of a Linux system?</li>
            <li>What are binaries, and where are they stored?</li>
            <li>What is the purpose of the /boot and /etc directories?</li>
            <li>What does the /proc file system contain, and what is the size of this file system?</li>
            <li>What is the basic difference between the /bin and /sbin directories?</li>
            <li>Which file system contains system configuration files?</li>
            <li>What does the /opt directory/file system contain?</li>
            <li>What’s the purpose of uptime command?</li>
            <li>Which is the command to list all logged-in users?</li>
            <li>What does the pwd command used for?</li>
            <li>How can we create a directory?</li>
            <li>What does the -p flag mean in mkdir?</li>
            <li>How can you list the directory tree structure?</li>
            <li>How can we long list files and sort by time stamp?</li>
            <li>Difference between “>” and echo “>>” sign.</li>
            <li>How to list the metadata of a file or directory?</li>
            <li>How can we copy a file or directory while preserving the time stamp?</li>
            <li>How to read 2 different files and redirect the output into one larger file?</li>
            <li>What is the head command? How many lines does it show by default?</li>
            <li>What is tail command? How many lines does tail command show by default?</li>
            <li>What is the difference between “/var/log/secure” and “/var/log/messages”?</li>
            <li>How do you list the block devices?</li>
            <li>What are the slowest and fastest components of the system?</li>
            <li>List the last 15 messages from the file which contains authentication/security logs?</li>
        </ol>
    </section>

    <section>
        <h2>B. Grep & Find Command</h2>
        <ol start="32">
            <li>What is the grep command?</li>
            <li>What is the basic difference between the "grep" and "find" commands?</li>
            <li>How can I find the pattern/string "root" from the /etc/passwd file?</li>
            <li>How would you get all the lines that do not containing “root” string from “/etc/passwd” file?</li>
            <li>How can we obtain logs that pertain to "sshd" from the Security logs?</li>
            <li>Which flag would you use to ignore case sensitivity while you grep a pattern?</li>
            <li>Find all files under “/var/log/” that are older than 90 days and delete them.</li>
            <li>Search “zero” byte files in /tmp directory, use appropriate command to delete these files?</li>
            <li>How to search files created in last ten days in the current working directory and copy these files under /tmp directory?</li>
            <li>Find all the files that are larger than 5 MB in your whole system.</li>
        </ol>
    </section>

    <section>
        <h2>C. Linux Permissions and Ownership</h2>
        <ol start="42">
            <li>What is the difference between chown and chmod commands?</li>
            <li>Which command we use to change permissions of a file/directory?</li>
            <li>What are different type of permission groups in linux?</li>
            <li>What are the different types of permissions in Linux?</li>
            <li>What are the numeric values that the system assigns for read, write, and execute?</li>
            <li>What are different ways to change the permissions of a file or directory?</li>
            <li>What does chown -R do?</li>
            <li>What is meant by chmod 777?</li>
            <li>How to change the user owner of a file?</li>
            <li>How can we modify the group on the file called "/etc/test" to be "devops"?</li>
            <li>What is the importance of the chgrp command?</li>
        </ol>
    </section>

    <section>
        <h2>D. Vi Editor</h2>
        <ol start="53">
            <li>Which is your preferred editor?</li>
            <li>What are the different modes of the vi/vim editor?</li>
            <li>How to quit Vim without saving any changes?</li>
            <li>How can you quit Vim while saving the changes you made?</li>
            <li>Why do we use "!" in addition to ":w" or ":wq" to quit?</li>
            <li>How would you move from the beginning of the line to the end of a line?</li>
            <li>How can you move back from the end of a line to the beginning of the line?</li>
            <li>How would you go to the last line of the file in vi or vim editor.</li>
            <li>How would you go back to first line of the file in vi or vim editor.</li>
            <li>How to switch to insert mode in Vi editor?</li>
        </ol>
    </section>

    <section>
        <h2>E. Link Management</h2>
        <ol start="63">
            <li>What are different types of links, you are familiar with?</li>
            <li>What is difference between a hard link and a symbolic link?</li>
            <li>What are symbolic link (symlink) or soft link and its purpose?</li>
            <li>How can a symbolic link be removed?</li>
            <li>How can a symbolic link be created? (Exact Syntax)</li>
            <li>What is a hard link and how is it created?</li>
        </ol>
    </section>

</body>
</html>
