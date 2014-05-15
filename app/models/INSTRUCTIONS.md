# The classes folder

## Instructions

All classes on this folder will be autoloaded by the bootstrap autoloader function but for that you need to set a default format.
The class names should be formatted as:

- No prefix
- Name
- Suffix: Class

Example:

```
class Example {

}

```

And the file will be named:

- ExampleClass.php

The classes should hold all the business logic for your application. Your processors (controllers) will instanciate the class
and the business logic will be handled by it. The only thing that the processor will need to do is to return the data / messages
returned by the class.