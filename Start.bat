@echo off

set /p rb= Do you want to rollback migrations? ([Y]/n) 
if "%rb%" == "" GOTO Rollback
if "%rb%" == "Y" GOTO Rollback
if "%rb%" == "y" GOTO Rollback
if "%rb%" == "N" exit
if "%rb%" == "n" exit

:Rollback
php artisan migrate:rollback
set /p mg= Do you want to execute migrations? ([Y]/n)
if "%rb%" == "" GOTO Migrate
if "%rb%" == "Y" GOTO Migrate
if "%rb%" == "y" GOTO Migrate
if "%rb%" == "N" exit
if "%rb%" == "n" exit

:Migrate
php artisan migrate
pause
exit