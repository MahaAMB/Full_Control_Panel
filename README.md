# Full_Control_Panel
Task 2: An interface for both the robot's arm and base control panel. (All of the codes for this task are in the Full_Control_Panel folder)

A control panel interface is designed to control the engines for the direction of the robot's base, as well as to control the degree of the robot's arm using CSS, HTML, JavaScript and PHP, as well as a database to store and fetch the data into/from using SQL.

## CSS
  - To style the interface and make it appear user friendly.
 
![Screenshot (284)](https://user-images.githubusercontent.com/53409187/123548801-f8793700-d76e-11eb-8392-1cfe537eb18a.png)

- To make the interface responsive to mobile web devices, i added this block of code (can be found in the Full_Control_Panel_MobileWbPage Folder in this repository):

 ![Screenshot (295)](https://user-images.githubusercontent.com/53409187/123549487-f369b700-d771-11eb-9640-ffe40a4aa08c.png)


## HTML
  - Six sliders of tyoe range created for each engine with max value of 180 and a min value of 0, the default value for the engine is 90 degrees.
  - Three buttons created to send the data from the engines' sliders to the database; which are the save button to send the degree of the engine(s) to the database, and the On and Off buttons to change the state of the engines.
  - Five Buttons created to control which direction the robot moves. The robot moves to one of these directions which are forward, backward, left, right or stop.
  - These buttons are linked to the engines of the robot.
  
Additionally, at the beginning of the HTML code I added the line of code shown below in order to make the web page responsive to other devices:

< meta name="viewport" content="width=device-width, initial-scale=1.0"> 
 

## JavaScript
  - To show the degree value in the span area of the sliders; an event listener added to to take the value and assign it to a variable.

## PHP
  - Establish a connection to the database.
  - For the robot arm; store the values including the degree and the state of the engines by applying the following query:
      $RangeVal = $_POST['engine#'];
      $sql = "UPDATE enginestable SET Degree = '$RangeVal' WHERE EngineNum = '#'";
      $query = mysqli_query($db_con,$sql);
  - To fetch the degree values of the engines, the following query was applied:
      $sql = "SELECT * FROM enginestable WHERE EngineNum = '#'";
      $result = mysqli_query($db_con,$sql);
      $row = mysqli_fetch_array($result, MYSQLI_BOTH);  
      print("Engine #'s Degree= " .$row[2]);
  
  - For the robot base; store the values including the direction of each engine by applying the following query:
  
  ![Screenshot (294)](https://user-images.githubusercontent.com/53409187/123549028-ef3c9a00-d76f-11eb-8d63-5642cfe1727d.png)


