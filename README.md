# Robot_Arm_Interface
Task 1: An interface for the robot arm's engines control panel. (All of the codes for this task are in the Robot Arm folder)

A control panel interface is designed to control the engines of the robot's arm using CSS, HTML, JavaScript and PHP, as well as a database to store and fetch the data into/from using SQL.

## CSS
  - To style the interface and make it appear user friendly.
![Screenshot (261)](https://user-images.githubusercontent.com/53409187/123121808-251b0f00-d44e-11eb-9fdb-9977753f9df5.png)

## HTML
  - Six sliders of tyoe range created for each engine with max value of 180 and a min value of 0, the default value for the engine is 90 degrees.
  - Three buttons created to send the data from the engines' sliders to the database; which are the save button to send the degree of the engine(s) to the database, and the On and Off buttons to change the state of the engines.
  
## JavaScript
  - To show the degree value in the span area of the sliders; an event listener added to to take the value and assign it to a variable.

## PHP
  - To save the data of the engines; a database created to store the values including the degree and the state of the engines by applying the following query:
      $RangeVal = $_POST['engine#'];
      $sql = "UPDATE enginestable SET Degree = '$RangeVal' WHERE EngineNum = '#'";
      $query = mysqli_query($db_con,$sql);
  - To fetch the degree values of the engines, the following query was applied:
      $sql = "SELECT * FROM enginestable WHERE EngineNum = '#'";
      $result = mysqli_query($db_con,$sql);
      $row = mysqli_fetch_array($result, MYSQLI_BOTH);  
      print("Engine #'s Degree= " .$row[2]);
   - To establish a connection to the database.
