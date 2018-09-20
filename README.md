# Task Spooler based PHP API  
  To run bash commands from web in a queue like manner.  
    
  
  Example scenario: I connected a command-line scanner to a web interface and used this to start multiple scans at the same time. see if the scan is completed and updated the response with the data returned from that command once the scan was completed.
## Pre-requisites  
 > Apache `apt-get install apache2`  
 > PHP `apt-get install php libapache2-mod-php`  
 > task-spooler `apt-get install task-spooler`  
  
## Installation  
**Install Pre-requisites**  
> `git clone https://github.com/ZeeshanSultan/tsp tsp`  
> `mv tsp/tsp.php /var/www/html`  
> `sudo chmod 777 /var/www/html/tsp.php`  
  
## Endpoint  
`http://<host>/tsp.php`  
  
### Parameters  
`id (ID of task), op (Task Operation), fetch_commands (Fetch all tasks), command (Add a command in task queue)`  
  
### Task operations  
>> state  
>> kill  
>> of  
>> urgent  
>> data  
  
### Request-Type > GET  
  
### Dummy Requests  
> To get all tasks  
>> http://HOST/tsp.php?fetch_commands=1  

> To create a new task  
>> http://HOST/tsp.php?command=Base64EncodedCommand  
>> http://HOST/tsp.php?command=bHMgLWxhaA==  
  
> To get task's state (whether its still queued, running or finished)  
>> http://HOST/tsp.php?id=1&op=state  
  
> To get a task's output file  
>> http://HOST/tsp.php?id=1&op=of  
  
> To get a task's output data  
>> http://HOST/tsp.php?id=1&op=data  
  
> To kill a running task  
>> http://HOST/tsp.php?id=1&op=kill  
  
> To prioritize a task in queue  
>> http://HOST/tsp.php?id=1&op=urgent  
  
  
**Note: creating a new task will return task id**  
