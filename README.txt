Code Refactoring tips and improvements
Class => Booking Controller and Booking Repository

<!---Refactoring suggestions and key findings --!>

1. We need to use integer enum at the database end to get the query run faster
2. There are so much if else conditions which we can reduce by changing if with a switch statement as switch is efficient way than if else
3. In getAll function in repository both in if and else condition of role check have code redundancy which can we use by making a common function and pass it column name and array of request data.
4. There is no consistent variable name convention followed across the code.
5. Three different function for sending notification with almost same code. So we can achieve that by single function.
6. Whole controller have no try catch exception handling which should be there
7. No form request which should be there
8. No DB transactions is being used to avoid data loss or data creation
9. No code usability with common functions
10. No ACL is applied to avoid access controls.
11. instead of bool values string values have been used for comparison

<!-- Refactoring done !-->
I have reviewed most of the code and in Controller and Repository and added Todo on each part where I saw there need any improvement. Not all code is being refactored or reviewed but most of the code have same issues.


<!-- Test cases !-->
Test cases have been also added inside test director
For TsHelper test case I only added test case for one case which is time difference less than <=90

Test case for create or update is added with both create and update.