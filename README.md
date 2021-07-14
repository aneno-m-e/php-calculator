# php-calculator

A simple calculator in PHP.
The HTML and CSS is taken from my Javascript calculator. While using submit buttons as a form of input isn't an efficient and appropriate solution for a calculator, the purpose of this project was to apply what I learned from tutorials and to understand php better through practice.

As it is an exercise to learn PHP and how to use it, I'm documenting some of the problems I encountered and how I solved them.

## Learning stories

### Storing data in the absence of a database

**Problem**:  
I could not add more than one item to my `$total_input` array. Everytime I click on an input, my array would be populated with the value I just clicked on and not retain the previous ones.

**Debugging**:

1.  Am I using the right method to update my array? I used `print_r()` to see how my array was behaving, I checked the documentation and read a few threads on Stack Overflow. It helped me rule out this hypotheses and reframe my problem. 2. The issue is: Everytime I click on an input, it would submit the form, resulting in a reload of the page which would clear the data previously captured in the `$input_total` array. So how do I store that data? 3. After some research, I found out about `<input type="hidden>` as a way to store values, paired with `json_encode()`.

**Solution**:  
The data from my `$total_input` array is now stored this way:  
`<input type="hidden" name="total_input" value='<?php echo json_encode($total_input) ?>' >`.
Be careful to use single quotes to avoid formatting conflicts, as I painfully learned.
When the page reloads, I repopulate my array like so:  
`$total_input = json_decode($_POST['total_input'])`.

### Debugging a json_decode() error

**Problem**:  
After solving the previous issue, my code would store the first input but breack when trying to store the following ones.

**Debugging**:

1. Mostly a lot of `echo` and `print_r()` to figure out where the code was breacking. It was at the line where I push new content into the array.
2. I then checked:
   - the value I was trying to append, and it was ok,
   - the array: and it returned nothing.
     On top of that, `print_r($_Post)` was returning `Array ( [total_input] => [ [five] => 5 )`. Using `gettype()` would have made the problem more obvious by returning `NULL`.
3. This led me to isolate `json_encode()` and `json_decode()` as the main suspects. I read the documentation, and used `json_last_error_msg()` which confirmed a synthax error.
4. Additionnally, after adding a first digit to the array, the hidden input had a value of `"[" digit"]"=""` instead of `"["digit"]"`.

**Solution**:
My original code was `value="<?php echo json_encode($total_input) ?>"`.  
I fixed it by wrapping the php code into single quotes:  
`value='<?php echo json_encode($total_input) ?>'`.
