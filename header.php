<!DOCTYPE html>
<html>
<head>
<style>
.flex-container {
display: flex;
flex-wrap: wrap;
font-size: 30px;
text-align: center;
}
.flex-item-left {
padding: 10px;
flex: 50%;
}
.flex-item-right {
margin-top: 10px;
padding: 10px;
flex: 50%;
}
@media (max-width: 800px) {
.flex-item-right,
.flex-item-left {
flex: 100%;
}
}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
<div style="background-color: #454545;">
<marquee direction="left" height="30px" style="color:white">🪔🪔🪔 Welcome to Computer Science and Engineering(AI & ML) Department 🪔🪔🪔</marquee>
</div>
<div class="flex-container">
<h4 class="flex-item-left" style="text-align:center">Department of<br>
Computer Science & Engineering</h4>
<h4 class="flex-item-right" style="text-align:center">Artificial Intelligence & Machine Learning</h4>
</div>
  <div class="w3-bar w3-light-blue">
    <a href="https://rvrjcce.ac.in" class="w3-bar-item w3-button">Main Website</a>
    <a href="http://courses.rvrjc.ac.in/moodle/" class="w3-bar-item w3-button">Moodle</a>
    <a href="index.php" class="w3-bar-item w3-button">Home</a>
    <a href="courses.php" class="w3-bar-item w3-button">Courses Offered</a>
    <a href="time table.php" class="w3-bar-item w3-button">Time Table</a>
    <a href="faculty.php" class="w3-bar-item w3-button">Faculty</a>
    <a href="Student achievements.php" class="w3-bar-item w3-button">Student Acheivements</a>
    <div class="w3-dropdown-hover">
      <button class="w3-button">Syllabus</button>
      <div class="w3-dropdown-content w3-bar-block w3-card-4 w3-light-blue">
        <a href="http://csm.rvrjcce.ac.in/syllabus/Semester%20I%20R20%20Syllabus.pdf" class="w3-bar-item w3-button">Semester - I</a>
        <a href="http://csm.rvrjcce.ac.in/syllabus/Semester%20II%20R20%20Syllabus.pdf" class="w3-bar-item w3-button">Semester - II</a>
        <a href="http://csm.rvrjcce.ac.in/syllabus/Semester%20III%20R20%20Syllabus.pdf" class="w3-bar-item w3-button">Semester - III</a>
        <a href="http://csm.rvrjcce.ac.in/syllabus/Semester%20IV%20R20%20Syllabus.pdf" class="w3-bar-item w3-button">Semester - IV</a>
      </div>
    </div>
  </div>

</body>
</html>
