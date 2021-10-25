IFS=$'\n'
for file in `find /var/www/PrintImage/public/uploaded/ -maxdepth 1 -type f`; do
    python3 '/var/www/PrintImage/app/Console/Print.py' $file
done
