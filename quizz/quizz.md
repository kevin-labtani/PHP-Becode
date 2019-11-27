# QUIZZ / PHP

Try to answer these questions. Some might require you to investigate. Here is a great tool for that : [http://phptester.net](http://phptester.net). Use it also to check whether you got it right. 

- PHP code must sit inside specific tags. Which one(s) ?
	- `<?php...?>`

- Which of the following variables **do not** have a valid name ? 
  
	- `myvar`
	- `$hotel4*`


- In which variable is stored the data sent via an html form using the GET method ? $_GET
- When submitting a form using the POST method, the variables values appear in the URL. False
- What is the difference between `$a=$b` and `$a==$b` ? assign vs equality
- What character must be at the end of each line of php code ? ;
- What will return this line: `echo "Hello" + " World";` ? error, concact with "." in php
- What is the right syntax :  
		- `<?php echo("Hello world"); ?>`    
		- `<?php echo 'Hello World'; ?>`  
		- `<?= "Hello World"; ?>` 
 
- What is the result of this script ? not correct 

```php  
$Hour = 15;
$hour = 3;
echo ($hour == $Hour) ? "yes": "not correct";
```

- What is the correct way to write comments in PHP ?
	- `// This is a comment `
	- `/* This is a comment */ `  
	- `# This is a comment`  

-  What is the name of this type of operator in the following example ? ternary

```php  
echo ( $season == 'summer' ) ? "Go to the beach.": "Go skying.";
```
- If the condition in the previous statement is true, where will we go ? beach

- What is the difference between : int vs sting vs arr
		- `$a = 10;`  
		- `$a = "10";`  
		- `$a = array(10); `   

	**Tip**: use the `var_dump($a);` function to check each of these expressions.


- What will the following return ?

```php  
$a = 10;  
$b = 2;  
echo $a + $b;  //12
```

- And this one ? 

```php  
$a = 10;  
$b = 2;  
echo $a * $b;  //20
```

- And this one ? 

```php  
$a = 10;  
$b = 2;  
echo $a - $b;  //8
```

- And this one ? Why ?

```php  
$a = 10;  
$b = 2;  
echo $a . $b;  //102 string concat
```

- What will this script return at 10h23 AM ? Hello!

```php  
$hour = date('H');
if ($hour > 17){
	echo "Good evening!";
} elseif ($hour > 13){
	echo "Good afternoon!";
} else{
	echo "Hello!";
}
```

- ... And what will it return at 15h02 PM ? Good afternoon!
- Assume `$a = 4`. What instruction will return : `4 = four` ? Why ? double quotes

	- `echo "$a = four";`

- In the case of a form to collect sensitive data, which method will we rather use to send the data :  
	- POST

 -----=== End of the quizz ===-----
