<!DOCTYPE html>
<html>
    <head>
        <title>Build Your Resume</title>
        <link href="./style.css" rel="stylesheet">
    </head>
    <body>
        <h1>Build Your Resume</h1>
        <form action="./submit.php" method="POST">
                <label for="nameField">Name</label>
                <input type="text" class="field" name="nameField" id="nameField" placeholder="Jane Doe" />
                <br />
                <label for="emailField">Email</label>
                <input type="email" class="field" name="emailField" id="emailField" placeholder="j.doe@example.com" />
                <br />
                <label for="phoneField">Phone</label>
                <input type="text" class="field" name="phoneField" id="phoneField" placeholder="777-777-7777" />
                <br />
                <label for="githubField">Github URL</label>
                <input type="url" class="field" name="githubField" id="githubField" placeholder="https://github.com/JDWorks" />
                <br />
                <label for="eduField">Highest Education</label>
                <select class="field" name="eduField" id="eduField">
                    <option>Highschool / GED</option>
                    <option>Some College</option>
                    <option>Associate</option>
                    <option>Bachelor's</option>
                    <option>Master's</option>
                    <option>Doctorate</option>
                </select>
                <input type="text" class="field" name="schoolName" id="schoolName" />

                <input type="text" class="field" name="gradYear" id="gradYear" />
                <br />

                <h3>Job History</h3>
                <label for="jobTitle">Job Title</label>
                <input type="text" class="field" name="jobTitle" id="jobTitle" placeholder="Title of Job Level 1" />
                <br />

                <label for="companyName">Company</label>
                <input type="text" class="field" name="companyName" id="companyName" placeholder="Company Inc." />
                <br />

                <label for="startDate">Start Date (Month and Year)</label>
                <input type="month" class="field" name="startDate" id="startDate" placeholder="2019-12" />
                <br />

                <label for="endDate">End Date (Month and Year)</label>
                <input type="month" class="field" name="endDate" id="endDate" placeholder="2019-12" />
                <br />

                <label for="duties">Duties</label>
                <textarea class="field" name="duties" id="duties" rows="4" cols="50">task 1
task 2
task 3
                </textarea>
                <p>Separate each duty on a new line.</p>
                <br />

                <h3>Technical Skills</h3>
                <p>Separate each skill on a new line.</p>
                <textarea class="field" name="skills" id="skills" rows="15" cols="50">Ruby
PHP
Postgres SQL
Javascript
C#
Perl
Bash
Powershell
Batch
Python

                </textarea>


                <input type="submit" value="Submit"/>

        </form>

    </body>
</html>