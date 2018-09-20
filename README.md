# Task Spooler based PHP API  
  
## Pre-requisites  
 > Apache `apt-get install apache2`  
 > PHP `apt-get install php libapache2-mod-php`  
 > task-spooler `apt-get install task-spooler`  
  
## Installation  
** Install all Pre-Requisites **  
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
>> http://<host>/tsp.php?fetch_commands=1  
> To create a new task  
>> http://<host>/tsp.php?command=Base64EncodedCommand  
>> http://<host>/tsp.php?command=bHMgLWxhaA==  
> To get task's state (whether its still queued, running or finished)  
>> http://<host>/tsp.php?id=1&op=state  
> To get a tasks's output file  
>> http://<host>/tsp.php?id=1&op=of  
> To get a tasks's output data  
>> http://<host>/tsp.php?id=1&op=data  
> To kill a running task  
>> http://<host>/tsp.php?id=1&op=kill  
> To prioritize a task in queue  
>> http://<host>/tsp.php?id=1&op=urgent  
  
  
** Note: creating a new task will return task id **  
