# The processor Folder (Controllers)

We aren't really using a real MVC pattern here, but we will be working with a similar concept. This folder will contain all your
processor files.

It is suggested that these files follow a format or that each processor set is saved under a folder.

## Examples:

- process_login.php
OR
- login/process.php

The idea is that when creating the files for login, dashboard, etc, it is simpler to identify where the data will be posted or get from.

### Note:

The processor should instanciate the class and the class will handle all the business logic. Avoiding mixing both will be helpful when debugging
or modifying the application.
