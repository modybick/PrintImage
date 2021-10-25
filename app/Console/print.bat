@REM IFS=$'\n'
@REM for file in `find /var/www/PrintImage/public/uploaded/ -maxdepth 1 -type f`; do
@REM     python3 '/var/www/PrintImage/app/Console/Print.py' $file
@REM done

for /L %%i in (1,1,6) do (
    for %%f in (C:\xampp\htdocs\PrintImage\public\uploaded\*) do (
        IF not %%~xf==".pdf" (
            python "C:\xampp\htdocs\PrintImage\app\Console\print_win.py" "%%f"
        )
    )
    timeout /T 10
)
