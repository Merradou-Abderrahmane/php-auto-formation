## The following are case-insensitive in PHP:

### PHP constructs such as : if, if-else, if-elseif, switch, while, do-while, etc.
### Keywords such as true and false.
### User-defined function & class names.

### On the other hand, variables are case-sensitive. e.g., $message and $MESSAGE are different variables.

### The closing tag of a PHP block (?>) automatically implies a semicolon (;). Therefore, you don’t need to place a semicolon in the last statement in a PHP block. For example:
### <?php echo $name ?>




## Whitespace & line breaks
### In most cases, whitespace and line breaks don’t have special meaning in PHP. Therefore, you can place a statement in one line or span it across multiple lines. For example, the following code snippets are equivalent: 
### login( $username, $password );

### And:

### login( 
  ### $username,
  ### $password
  ### );


## Summary
### PHP is partially case-sensitive.
### PHP constructs, function names, class names are case-insensitive, whereas variables are case-sensitive.
### A statement ends with a semicolon (;).
### Whitespace and line breaks don’t matter in PHP; do leverage them to make the code more readable.

