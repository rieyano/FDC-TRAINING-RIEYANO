SELECT`first_name`as "FIRST NAME",`last_name`as "LAST NAME" FROM employees;

SELECT DISTINCT gender from employees;

SELECT * from employees order by last_name desc;
SELECT * from employees order by first_name desc;

SELECT count(*) from employees;

SELECT * FROM employees WHERE birth_date  > "1950-01-01";

SELECT * FROM employees WHERE birth_date  > "1963-01-01" AND gender = "F";
SELECT * FROM employees WHERE birth_date  < "1963-01-01" AND gender = "F";

SELECT * FROM employees WHERE birth_date  >= "1963-01-01" AND birth_date <= "1963-12-31" AND gender = "F";

SELECT * FROM employees WHERE hire_date >= "1990-01-01" ;

SELECT * FROM employees  where first_name  LIKE "%Sam%";

SELECT COUNT( *) FROM employees  where first_name  LIKE "%Sam%";

SELECT  * FROM employees WHERE first_name LIKE"%Sam%" AND birth_date > "1960-01-01";


Write a query that inserts the following information in the employees table:
(99999,"2000-01-01","John","Doe","M","2019-02-01")

(emp_no,birth_date,first_name,last_name,gender,hire_date) 
INSERT INTO employees (emp_no,birth_date,first_name,last_name,gender,hire_date)VALUES(999999,"2000-01-01","John","Doe","M","2019-02-01");

update employees set  birth_date = "2019-07-03",first_name ="Pinky",last_name = "Matias",gender = "F",hire_date = "2009-03-03" where emp_no =999999;

DELETE FROM employees WHERE emp_no = 999999;
