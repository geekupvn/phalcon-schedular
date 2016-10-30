# phalcon-schedular

App skeleton base on [Phalcon-Cli](https://docs.phalconphp.com/en/latest/reference/cli.html) application. Normally, we can run with `php /app/run version`. That docker help me to run script with crontab schedular.

Add any script you want to run in `app/crontab` file
```
* * * * * /usr/bin/php /app/run version >> /var/log/cron.log 2>&1
* * * * * /usr/bin/php /app/run >> /var/log/cron.log 2>&1
```



