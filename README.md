# InterMachine Communication Controller

The controller REST API primarily tracks of the results published by the `VMs` and put them on the file system for auditability.

To setup the API, you need to have:

- Git
- PHP (5.4 or above)

It is important to have PHP 5.4 or above as they have the support for built-in server.

First off, clone the code:

```
git clone https://github.com/ArkeologeN/intermachine-communication-controller.git
```

Once done, change working directory to the cloned folder and run:

```
php -S 0.0.0.0:81 callback.php
```

This will start the development server of `PHP` which will play the role of our callback.

## Implementation

The `Callback.php` server expects the request to have a `GET` method with the parameter `result`.

Liable example could be:
```
http://0.0.0.0:81?result={"ok":true,"jobId":"2f402a40-af7a-46e0-b3e1-0348ec8fc301","host":"3bc662375d8e","command":"say_hello","result":"Hello, World","timestamp":"2015-12-19T10:54:32.666Z"}
```

This will eventually log the request in the `results/` directory with the `job id`.
The content of the file would be serialized JSON which could be decoded to find the job information regarding the time, result and etc
