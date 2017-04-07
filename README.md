# mysql-pivot
This code will convert (pivot) your MySQL database table from rows to columns.

Here is an example of what this code will do:

__Original Table__

ID  | Name  | Color
--- | ----- | -----
 1  | James | Blue
 2  | Amy   | Red

__Converted Table__

ID    | 1     | 2
----- | ----- | -----
Name  | James | Amy
Color | Blue  | Red
